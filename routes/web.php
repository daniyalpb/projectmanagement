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



Route::get('vivek','VivekController@vivek');


Route::get('dashboard','IndexController@dashboard');
Route::get('dashboardnew','DashboardController@chartdashboard');
//Route::get('dashboardnew','DashboardController@dashboard');

Route::get('/registration','IndexController@registration');
Route::post('/registration-form','IndexController@insert_registration');

/*Project-Master*/

Route::get('/project-master','ProjectController@project');
Route::post('/project-master-form','ProjectController@project_insert');
Route::get('/project-master-sp','ProjectController@project_master_sp');

Route::get('/task-description','ProjectController@projectmaster');
Route::post('/task-description-form','ProjectController@project_master');
Route::get('/project-master-view','ProjectController@projectmasterview');
Route::get('/employee-master','EmployeeMasterController@employeemaster');
Route::post('/employee-master-form','EmployeeMasterController@employee_master');
Route::get('/employee-table','EmployeeMasterController@employee_table');
Route::get('/employee-master-view/{id}','EmployeeMasterController@employeeupdate');
Route::post('/employee-master-update','EmployeeMasterController@employee_update');
Route::get('/assign-task','AssignTaskController@assigntask');
Route::get('/project-master','ProjectController@projectview');

Route::get('/task-history','AssignTaskController@taskhistory');
Route::get('/task-history-view/{id}','AssignTaskController@task_history_view');
Route::post('/task-history-update','AssignTaskController@task_history_update');
Route::get('/create-issue','CreateIssueController@create_issue');
Route::post('/create-issue-form','CreateIssueController@insert_create_issue');
Route::get('/module-master','ModuleController@modulemaster');
Route::post('/module-master-insert','ModuleController@insertmodulemaster');
Route::get('/module-master-view','ModuleController@modulemasterview');

Route::get('/task-master-view','TaskMasterController@taskmasterview');
Route::post('/task-master-insert','TaskMasterController@inserttaskmaster');

Route::get('/tag-activity-view','TagActivityController@tagactivityview');
Route::post('/tag-activity-insert','TagActivityController@tagactivityinsert');
Route::get('/tag-activity','TagActivityController@tagactivity');


Route::get('/assign-tag-activity','TagActivityController@assignactivity');


Route::get('/subtask-master','SubTaskMasterController@subtaskmaster');
Route::get('/subtask-master-view','SubTaskMasterController@subtaskmasterview');
Route::post('/subtask-master-insert','SubTaskMasterController@subinserttaskmaster');
Route::get('/assign-subtask-master/{id}','SubTaskMasterController@assignSubtaskmaster
');
Route::get('/Releses','RelesesController@release');
Route::post('/realeses-details-insert','RelesesController@releasedetails');


Route::get('/release-details','RelesesController@releasedetailsview');
Route::get('/bug-activity','BugActivityController@bugactivity');
Route::post('/bug-activity-insert','BugActivityController@bugactivityinsert');
Route::get('/bug-activity-view','BugActivityController@bugactivityview');


Route::get('/home','HomeController@homemaster');
Route::post('/home-master-insert','HomeController@inserthomemaster');


Route::get('/home-master-view','HomeController@homemasterview');
Route::get('/openissues','OpenIssueController@open_issue');

Route::get('/openissues-view/{id}','OpenIssueController@open_issueview');
Route::post('/openissues-update','OpenIssueController@open_issueupdate');

Route::get('/open-issues','OpenIssueController@openis');


Route::get('/open-bug-issue','OpenIssueController@openbug');

Route::get('/view-recently','OpenIssueController@view_recently');

Route::get('/recently-resolved','OpenIssueController@recently_resolved');

Route::get('/view-all-bug','OpenIssueController@view_all_bug');

Route::get('/unrelesed','OpenIssueController@task_unrelesed');
Route::get('/google-line-chart', 'GoogleChartController@googleLineChart');
Route::get('/report','GoogleChartController@chart');

Route::get('/user-master','UserMasterController@user_master');
Route::get('/user-master-view/{id}','UserMasterController@user_master_view');
Route::post('/user-master-update','UserMasterController@user_master_update');
Route::get('/about-us','HomeController@about_us');

Route::get("addmore","HomeController@addMore");
Route::post("addmore","HomeController@addMorePost");
//Route::get("save-project-name/{pro_name}/{id}","TaskMasterController@add_task");
Route::get("cascading-demo","SendSMSController@cascading_demo");

Route::get('dashboard.myform',array('as'=>'myform','uses'=>'HomeController@myform'));
Route::get('dashboard.myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'HomeController@myformAjax'));

// avitest
 Route::get('send-sms','SendSMSController@sendsmsrea');
 Route::get('send-sms-state','SendSMSController@sendsmsren');
 Route::post('send-sms-city','SendSMSController@sendsmscity');
Route::post('send-sms-save','SendSMSController@send_sms_save');
Route::post('send-sms-detail','SendSMSController@getfbalist');
Route::get('send-sms/{id}',array('as'=>'sendsms.ajax','uses'=>'SendSMSController@sendsmscity'));
//Route::get('send-sms','SendSMSController@ViewSendSMSDetails');
 Route::get('send-sms-zone','SendSMSController@getsmszone');


// aviend

// Route::get('/task-master','TaskMasterController@taskmaster');
// Route::post('/task-master','TaskMasterController@taskmasterpost');
// Route::get("addmore","HomeController@addMore");
// Route::post("addmore","HomeController@addMorePost");



Route::get('task-master',array('as'=>'task-master','uses'=>'TaskMasterController@task_master'));
Route::get('task-master/ajax/{Id}',array('as'=>'task-master.ajax','uses'=>'TaskMasterController@task_masterajax'));


Route::get('task-master/{module_id}','TaskMasterController@taskmasterAjaxnew');

Route::post('task-master','TaskMasterController@projects');
Route::post('save-project-name','TaskMasterController@add_task');
//Route::get('save-project-name/{pro_name}/{ProjectId}','TaskMasterController@add_task');

Route::post('save-project-module','TaskMasterController@add_module');
//Route::get('save-project-module/{Module_Name}','TaskMasterController@add_module');
Route::post('save-project-task','TaskMasterController@add_tasknew');



Route::post('task-master','TaskMasterController@projects');
//Route::get('task-master','TaskMasterController@view_project_details');

// project move

Route::get('project-move','ProjectController@projectsmove');



//view_project_details





Route::get('/header','HomeControlle@issueheader');
Route::get('/menu-group','MenuController@menugroup');
Route::get('/menu-list','MenuController@menulist');
Route::post('/menu-list-form','MenuController@menu_list');
Route::get('/menu-group','MenuController@menugroup');

Route::get('get-count-value/{id}','AssignTaskController@getcountvalue');
});