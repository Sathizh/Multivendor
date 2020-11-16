<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderPaid;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{
    public function checkout($OrderId)
    {
        $item=Order::findOrFail($OrderId);
        // dd($item->billing_fullname);
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51HPhowDdzt2WcuDDuNxQ2KTdirIB0v6YkSJYOcFZf4wKIy86EVBKobuGnDgUTDR2cMCg8NAZ5sOAhJskG0GvAtaV00enFahwqx');
        \Stripe\Stripe::setMaxNetworkRetries(5);
		$amount = $item->grand_total;
		$amount *= 100;
        $amount = (int) $amount;
        $amount+=5000;
        // dd($amount);
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From '.$item->billing_fullname,
			'payment_method_types' => ['card'],
		]);
        $intent = $payment_intent->client_secret;
        // dd($intent);

		return view('cart.credit-card')->with(['intent'=>$intent,'item'=>$item,]);

    }

    public function afterPayment($id)
    {
        $order = Order::findOrFail($id);
                $order->is_paid = true;
                $order->payment_status = "paid";
                $order->save();

        \Cart::session(auth()->id())->clear();
        // mail to user
        Mail::to($order->user->email)->send(new OrderPaid($order));
        // mail to vendor
        // for loop needed for itrate diffrent item vendors
        // Mail::to($order->user->email)->send(new ToVendor($order));

        return redirect()->route('home')->withMessage('Payment successfull!');
    }
}
