<?php

use App\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/product/{product}', 'HomeController@single_product')->name('product.details');

Route::get('/product/{product}', function (Product $product) {
   return view('product')->with('details',$product);
})->name('details');

// cart
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');
Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::get('/cart/clear', 'CartController@clear')->name('cart.clear')->middleware('auth');

// whishlist
Route::get('/Whishlist/{product}', 'WishlistController@add_or_remove')->name('wishlist.add_or_remove')->middleware('auth');
Route::get('/Whishlist', 'WishlistController@wishlist')->name('wishlist')->middleware('auth');
Route::get('/Whitelit_clear', 'WishlistController@delete')->name('wishlist.clear')->middleware('auth');


Route::resource('orders', 'OrderController')->middleware('auth');;

// PayPal
Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');

// Stripe
Route::get('stripe/checkout/{order}','StripeController@checkout')->name('stripe.checkout');
Route::post('stripe/checkout/{order}','StripeController@afterpayment')->name('checkout.credit-card');
// Route::post('/checkout_stripe','StripeController@afterpayment');

// Customer
Route::get('/Orders','HomeController@customer_dashboard')->name('customer.orders')->middleware('auth');
Route::get('/Profile','HomeController@customer_profile')->name('customer.profile')->middleware('auth');
Route::get('/Dashboarda','HomeController@customer_address')->name('customer.address')->middleware('auth');
Route::post('/customer_address_update','HomeController@customer_address_update')->name('customer.address_update')->middleware('auth');


// shop
Route::get('/create_shop',);

// validation
Route::post('/register/checkphone', 'HomeController@phonevalidation')->name('email.phone');

