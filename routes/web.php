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




Route::get('/','LoginController@checklogin');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');



Route::group(['middleware' => ['CheckMidd']], function (){
Route::get('dashboard','DashboardController@dashboard');
Route::get('employe-master','MastersController@aspxdata');
Route::post('employee-master_submit','MastersController@employee_master_submit');
Route::post('employe-master','MastersController@employ_master');
Route::POST('update_empmaster','MastersController@employ_master');

Route::get('bank-master','MastersController@bankmaster');
Route::post('bank-master','MastersController@bank_master');
Route::post('update_bank_master','MastersController@bank_master_edit');

Route::get('break-master','MastersController@breakmaster');
Route::post('break-master','MastersController@break_master');

Route::get('state-master','MastersController@statemaster');
Route::post('state-master','MastersController@state_master');

Route::get('city-master','MastersController@citymaster');
Route::post('city-master','MastersController@city_master');

Route::get('designation-master','MastersController@designationmaster');
Route::POST('update_view_templete','MastersController@designation_master');

Route::get('employe-list','MastersController@employelistmaster');

Route::get('edit-employe-list','MastersController@edit_employelist_master');
Route::get('edit-employe-list/{id}','MastersController@table_edit');
Route::post('update_employe_list','MastersController@employe_master_editlist');



Route::get('leadstatus-master','MastersController@leadstatusmaster');
Route::post('leadstatus-master','MastersController@leadstatus_master');

Route::get('product-master','MastersController@productmaster');
Route::post('product-master','MastersController@product_master');

Route::get('profession-master','MastersController@professionmaster');
Route::post('profession-master','MastersController@profession_master');

Route::get('role-master','MastersController@rolemaster');
Route::get('associate-master','MastersController@associatemaster');

Route::get('link-entry','MastersController@messagelinkdetail');
Route::post('link-entry','MastersController@message_link_detail');

Route::get('app-version-master','MastersController@appversionmaster');
Route::POST('app-version-master','MastersController@app_version_master');
Route::get('app-version-master-history','MastersController@appversionmaster_history');

Route::get('loan-disbursement','MastersController@loandisbursement');

Route::get('app-version-master-history/{$id}','MastersController@history');



           //**UsersController***********************

Route::get('user-group','UsersController@usergroup');
Route::get('user-master','UsersController@usermaster');
Route::get('user-rights','UsersController@userrights');
Route::get('user-rights/{id}', 'UsersController@search');

Route::get('edit-menu','UsersController@editmenu');
Route::get('menu-master','UsersController@menumaster');

Route::get('group-rights','UsersController@grouprights');
Route::get('monthly-target','UsersController@monthlytarget');



           //**BillingController***********************

Route::get('create-invoice','BillingController@createinvoice');
Route::get('create-broker-invoice','BillingController@brokerinvoice');
Route::get('broker-invoice-register','BillingController@brokerinvoiceregister');



         //**ActivityController***********************

Route::get('daily-planning','ActivityController@dailyplanning');
Route::post('daily-planning','ActivityController@daily_planning');
Route::post('update_daily','ActivityController@daily_planning_edit');

Route::get('lead-capture','ActivityController@leadcapture');
Route::get('registration-report','ActivityController@registrationreport');



 /************
//  Menu List
******************/
Route::get('menu-list','MenuController@menulist');
Route::post('menu-list-add','MenuController@menulist_add');
Route::get('menu-mapping','MenuController@menu_mapping');
Route::post('grouprights-add','MenuController@grouprights_add');

 /************
//  Performance Appraisal System 
******************/
Route::get('eap-details','pas\PasController@emp_details');
Route::get('pas-details','pas\PasController@pms_details');
Route::post('asp-insert','pas\PasController@pas_insert');
Route::get('pas-registrar','pas\PasController@pas_registrar'); 
Route::get('pas-data','pas\PasController@pas_data'); 
 
});
 


 