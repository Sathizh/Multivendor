<?php

namespace App\Http\Controllers;

use App\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);
        return redirect($response['paypal_link']);
    }

    private function checkoutData($orderId)
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) use($cart) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']

            ];
        }, $cart->getContent()->toarray());



        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success', $orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => " Order description ",
            'total' => $cart->getSubTotal(),
            'shipping_discount' => $cart->getSubTotal() - $cart->getTotal()

        ];

        return $checkoutData;
    }

    public function cancelPage()
    {
        dd('payment failed');
    }


    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {

        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData($orderId);

        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Perform transaction on PayPal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status, ['Completed','Processed'])) {
                $order = Order::find($orderId);
                $order->is_paid = true;
                $order->payment_status = "paid";
                $order->save();

                //send mail

                // Mail::to($order->user->email)->send(new OrderPaid($order));

                \Cart::session(auth()->id())->clear();

                return redirect()->route('home')->withMessage('Payment successfull!');
            }

        }

        return redirect()->route('home')->withError('Payment UnSuccessfull! Something went wrong!');


    }
}
