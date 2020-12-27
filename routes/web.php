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

Auth::routes(['verify'=>true]);

// auth with providers
Route::get('login/github', 'Auth\LoginController@github');
Route::get('login/github/redirect', 'Auth\LoginController@githubRedirect');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login_register', function () {
    return view('auth.login&register');
})->name('login_register');
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
Route::post('/new_profile_change','HomeController@change_profile')->middleware('auth');
Route::post('/customer_address_update','HomeController@customer_address_update')->name('customer.address_update')->middleware('auth');


// Vendor
Route::get('/dashboard', function () {
    return view('vendor.vendor_dashboard');
})->name('shop.dashboard');
Route::get('/product_add','ProductController@create')->name('product.add')->middleware('auth');
Route::post('/add_product','ProductController@store')->name('shop.product.add')->middleware('auth');
Route::get('/product_edit/{id}', 'ProductController@edit')->name('product.edit')->middleware('auth');
Route::get('/edit_product/{id}', 'ProductController@update')->middleware('auth');
Route::get('/delete_product', 'ProductController@destroy')->middleware('auth');
// Route::post('/product_image_upload','ProductController@img')->middleware('auth');
Route::get('/Shop/Profile','ShopController@shop_profile')->name('shop.profile')->middleware('auth');
Route::get('/Shop/Profile_update','ShopController@shop_profile_update')->name('shop.profile.update')->middleware('auth');
Route::get('/Dashboarda','HomeController@customer_address')->name('customer.address')->middleware('auth');
Route::post('/customer_address_update','HomeController@customer_address_update')->name('customer.address_update')->middleware('auth');
Route::get('/Shop/my_products','ProductController@My_Product')->name('product.list')->middleware('auth');
Route::get('/Shop/my_orders','OrderController@My_Orders')->name('MyOrders')->middleware('auth');
Route::post('/update_order_status','OrderController@update_order')->middleware('auth');
Route::get('/BuyersList','OrderController@buyers_list')->name('buyers.list')->middleware('auth');


// admin

Route::get('/Admin/Profile','AdminController@admin_profile')->name('admin.profile')->middleware('auth');
Route::get('/Admin/Dashboard','AdminController@Dashboard')->name('admin.dashboard')->middleware('auth');
Route::get('/Admin/Maintenance', function () {
    return view('admin.maintenance_and_approval');
})->name('admin.maintenance_and_approval')->middleware('auth');
Route::get('/Admin/Add/Category', function () {
    return view('admin.add_category');
})->name('admin.add_category')->middleware('auth');
Route::get('/Customer_Active_status_change/{id}','AdminController@customer_active_status_change')->name('status.change')->middleware('auth');


// shop
Route::get('/build_shop', function () {
   return view('Shop.create');
})->name('shop.build');
Route::post('/create_shop','shopcontroller@create')->name('shop.create')->middleware('auth');

// validation
Route::post('/register/checkphone', 'Auth\RegisterController@phonevalidation')->name('email.phone');
Route::post('/shop_register/checkgst', 'HomeController@GSTvalidation')->name('shop.gst');

// DropZone
// Route::post('dropzone/upload', 'ProductController@upload')->name('dropzone.upload');

// Route::get('dropzone/fetch', 'ProductController@fetch')->name('dropzone.fetch');

// Route::get('dropzone/delete', 'ProductController@delete')->name('dropzone.delete');
