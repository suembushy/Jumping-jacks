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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/generaluser', 'GeneralUserController@index')->name('generaluser.dashboard');

//******************************/ GENERAL USER ROUTES

// 1)  Supplier Details form Route
Route::get('/generaluser/supplierinput', 'GeneralUserController@input_supplier')->name('input_supplier');
// 2)  Post Supplier details form to db Route
Route::post('/generaluser/supplierinput/create', 'GeneralUserController@push_to_form')->name('input_supplier.create');
// 3) Donor Details from route
Route::get('/generaluser/donorinput', 'GeneralUserController@input_donor')->name('input_donor');
// 4)  Post Donor Details form to db route
Route::post('/generaluser/donorinput/create', 'GeneralUserController@push_form')->name('input_donor.create');

// 5) Stock view
Route::get('/generaluser/stock', 'StockController@stock')->name('stock');
Route::post('/generaluser/stock/create', 'StockController@push_to_form')->name('stock.create');

// 6) Donations details from route
Route::get('/generaluser/donationsinput', 'GeneralUserController@input_donations')->name('input_donations');
Route::post('/generaluser/donationsinput/create', 'GeneralUserController@push_towards_form')->name('input_donations.create');

// 7) Route to view Stock Table
Route::get('/generaluser/orderstock/table', 'GeneralUserController@viewStock')->name('view_stock');

// ************************************ADMIN ROUTES************************************

// 1) Admin Supplier Details form Route
Route::get('/admin/supplierinput', 'AdminController@input_supplier')->name('admin_input_supplier');

// 2) Post Supplier details form to db Route
Route::post('/admin/supplierinput/create', 'AdminController@push_to_form')->name('admin_input_supplier.create');

// 3) Route to view Supplier table
Route::get('/admin/supplierinput/table', 'AdminController@viewSupplier')->name('view_supplier');

// 4) Edit Suppliers function
Route::get('/admin/supplierinput/click_edit/{id}', 'AdminController@editSupplier')->name('admin_edit_supplier');
Route::post('admin/supplierinput/update/{id}', 'AdminController@updateSupplier')->name('admin_update_supplier');

// 5) Admin Register Order
Route::get('/admin/orderinput', 'AdminController@input_order')->name('admin_input_order');

// 6) Admin Order Push to DB
Route::post('/admin/orderinput/create', 'AdminController@push_order_form')->name('admin_input_order.create');

// 7) Route to view Order Table
Route::get('/admin/orderinput/table', 'AdminController@viewOrder')->name('view_order');

// 8) Route to Accounts
Route::get('/admin/accountinput', 'AdminController@input_Accounts')->name('input_accounts');
Route::get('/admin/accountsview/table', 'AdminController@viewAccounts')->name('view_accounts');
Route::get('/admin/accountsview/edit/{id}', 'AdminController@editAccounts')->name('edit_accounts');
Route::post('admin/accountsedit/update/{id}', 'AdminController@updateAccounts')->name('update_accounts');

// 9) Edit Orders function
Route::get('/admin/orderinput/click_edit/{id}', 'AdminController@editOrder')->name('admin_edit_order');
Route::post('/admin/orderinput/update/{id}', 'AdminController@updateOrder')->name('admin_update_order');

// 10) Delete Supplier function
Route::get('/admin/supplierinput/click_delete/{id}', 'AdminController@deleteSupplier')->name('admin_delete_supplier');

// 11)  Input Donations into the Admin dashboard
Route::get('/admin/donationsadmin', 'AdminController@input_donations')->name('input_donations');
Route::post('/generaluser/donationsadmin/create', 'AdminController@push_towards_form')->name('input_donations.create');

//12) Route to view Donations table
Route::get('/admin/donationsadmin/table', 'AdminController@viewdonations')->name('view_donations');

// 13) Delete Order Route
Route::get('/admin/orderinput/click_delete/{id}', 'AdminController@deleteOrder')->name('admin_delete_order');

//14) Route to input stocks
Route::get('/admin/stockinput', 'AdminController@input_Stock')->name('admin_input_stock');
//Routes to
Route::post('/admin/stockinput/create', 'AdminController@push_to_form')->name('admin_input_stock.create');

//Routes  to view stock
Route::get('/admin/stockview/table','AdminController@viewStock')->name('view_stock');
//Route to edit stock
Route::get('/admin/stockview/edit', 'AdminController@editStock')->name('admin_edit_stock');
Route::post('/admin/stockinput/update{id}','AdminController@updateStock')->name('admin_update_stock');
//Route to delete stocks
Route::get('/admin/orderinput/click_delete{id}','AdminController@deleteStock')->name('admin_delete_stock');
