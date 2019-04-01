<?php

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

Route::get('/', 'MangoBD@homepage');
Route::get('/shop', 'MangoBD@shop');
Route::get('/about', 'MangoBD@about');
Route::get('/blog-view', 'MangoBD@blog');
Route::get('/single-blog-view', 'MangoBD@singleBlogView');
Route::get('/contact', 'MangoBD@contact');
Route::post('/contact-info-save', 'MangoBD@saveContactInfo');

Route::get('/seller-info/{id}', 'MangoBD@sellerInfo');

Route::get('/products/{unique_id}', 'MangoBD@show');
Route::get('category-products/{unique_id}', 'MangoBD@categoryProducts');

/* Seller */
Route::get('/add-product-seller', 'SellerController@productAddSeller');
Route::post('/add-product-by-seller', 'SellerController@addProdcutBySeller');

/* Seller */

Route::post('/add-to-cart', 'CartController@addToCart');
Route::get('/show-cart', 'CartController@showCart');
Route::post('/update-cart-product', 'CartController@updateCartProduct');
Route::get('/delete-cart-product/{id}', 'CartController@deleteCartProduct');

Route::get('/checkout', 'CheckoutController@index');
Route::post('/customer-login', 'CheckoutController@customerLogin');


Route::post('/customer-sign-out', 'CheckoutController@customerLogout');

Route::get('/search-mango', 'SearchController@searchMango');
Route::post('/filter-products', 'MangoBD@filterProducts');

/* Customer Login */
Route::get('/customer-signin', 'CheckoutController@customerSignIn');
Route::post('/customer-login-home', 'CheckoutController@customerSignInHome');
Route::get('/customer-signup', 'CheckoutController@customerSignUp');
Route::post('/customer-signup-home', 'CheckoutController@customerSignUpHome');
/* Customer Login */

/* Customer Dashboard Login */
Route::get('/user/home', 'VendorController@userDashboard');
Route::post('/customer-login-dashboard', 'VendorController@customerDashboardLogin');

Route::get('/customer-order-info','VendorController@showCustomerOrderInfo');
Route::get('/view-customer-order-details/{id}','VendorController@viewCustomerOrderDetails');
Route::get('/view-customer-order-invoice/{id}','VendorController@viewCustomerOrderInvoice');

Route::get('/customer-sign-out-dashboard','VendorController@customerDashboardLogout');
/* Customer Dashboard Login */

Route::post('/new-customer', 'CheckoutController@saveCustomerInfo');
Route::get('/shipping-info', 'CheckoutController@showShippingInfo');
Route::post('/new-shipping', 'CheckoutController@saveShippingInfo');
Route::get('/payment-info', 'CheckoutController@showPaymentForm');
Route::post('/new-order', 'CheckoutController@saveOrderInfo');


Route::resource('/admin/category','CategoryController')->middleware('MangoBDMiddleWare');
Route::get('/admin/category/publish/{unique_id}','CategoryController@publish');
Route::get('/admin/category/unpublish/{unique_id}','CategoryController@unPublish');

Route::resource('/admin/product','ProductController')->middleware('MangoBDMiddleWare');
Route::get('/admin/product/publish/{unique_id}','ProductController@publish');
Route::get('/admin/product/unpublish/{unique_id}','ProductController@unPublish');

Route::resource('/admin/user','UserController');
Route::get('/admin/user/{id}/edit/type','UserController@editTypeUser');
Route::post('/admin/user/update/{id}','UserController@updateTypeUser');

Route::get('/order-info','OrderController@showOrderInfo')->middleware('MangoBDMiddleWare');
Route::get('/view-order-details/{id}','OrderController@viewOrderDetails')->middleware('MangoBDMiddleWare');
Route::get('/view-order-invoice/{id}','OrderController@viewOrderInvoice')->middleware('MangoBDMiddleWare');
Route::get('/edit-order-info/{id}','OrderController@editOrderInfo');
Route::post('/update-order-info','OrderController@updateOrderInfo');
Route::get('/delete-order-info/{id}','CheckoutController@deleteOrderInfo');
Route::get('/delete-product-info/{id}','CheckoutController@deleteProductInfo');
Route::get('/delete-user-info/{id}','CheckoutController@deleteUserInfo');
Route::get('/verify','CheckoutController@verify');
Route::post('/verify','CheckoutController@Doverify');

Route::get('/verify-customer','CheckoutController@verifyCustomer');
Route::post('/verify-customer','CheckoutController@DoCustomerverify');


/* PDF */
Route::get('/pdf','OrderController@myPdf')->middleware('MangoBDMiddleWare');
Route::get('/download-invoice/{id}','OrderController@downloadOrderInvoice')->middleware('MangoBDMiddleWare');
/* PDF */

Route::post('/website/user','UserController@store1')->middleware('MangoBDMiddleWare');;

Auth::routes();

/* Email Verify*/
Auth::routes(['verify' => true]);

/* Dashboard Url*/
Route::get('/admin/contact/manage','DashboardController@showContactMessage');
Route::get('/dashboard/contact/view/{id}','DashboardController@viewContactMessage');
Route::get('/admin/contact/replay/{id}','DashboardController@replyContactMessage');

/* Dashboard Url*/

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



/*Route::get('{path}',"HomeController@error")->where( 'path', '([A-z\d-\/_.]+)?' );*/