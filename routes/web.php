<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SCCPController;
use App\Http\Controllers\Form\DocumentReviewController;
use App\Http\Controllers\Form\FoodPremiseController;
use App\Http\Controllers\Form\ProgramController;
use App\Http\Controllers\Form\ActivityMonitoringController;
use App\Http\Controllers\Form\ReferralFormController;
use App\Http\Controllers\Form\ComplaintFormController;
use App\Http\Controllers\Form\TermsController;
use App\Http\Controllers\Form\SpeakerController;
use App\Http\Controllers\Form\SLOReportController;
use App\Http\Controllers\Form\ClinicController;
use App\Http\Controllers\ManageReportController;
use App\Http\Controllers\Form\MyTaskController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//auth route for all
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

    //Manage My Report
    Route::get('/my-report-history', 'App\Http\Controllers\Form\ManageReportController@viewReportHistory')->name('report.history');
    
    //Complaint
    Route::get('/complaint/create', 'App\Http\Controllers\Form\ComplaintFormController@create')->name('complaint.create');
    Route::post('/complaint/store', 'App\Http\Controllers\Form\ComplaintFormController@storeReport')->name('complaint.store');
    Route::get('/complaint/details/{id}', 'App\Http\Controllers\Form\ComplaintFormController@viewComplaintDetails');
    Route::get('/complaint/show', 'App\Http\Controllers\Form\ComplaintFormController@show')->name('complaint.show');
    Route::get('/complaint/pdf/{id}','App\Http\Controllers\Form\ComplaintFormController@pdf')->name('complaint.pdf');
    Route::get('/complaint/view/{id}','App\Http\Controllers\Form\ComplaintFormController@view')->name('complaint.view');
});


// routes for admin
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    
    Route::get('/sccp/view', 'App\Http\Controllers\SCCPController@index')->name('sccp.view');

    //Manage Staff
    Route::get('/user-list', 'App\Http\Controllers\AdminController@ViewAllUser')->name('user.view');
    Route::post('/search-user', 'App\Http\Controllers\AdminController@SearchUser');
    Route::get('/edit-user-access/{id}', 'App\Http\Controllers\AdminController@EditUserAccess')->name('user-access.edit');
    Route::post('/update-user-access/{id}', 'App\Http\Controllers\AdminController@UpdateUserAccess')->name('user-access.update');
    
    //My Task
    Route::get('/my-task', 'App\Http\Controllers\Form\MyTaskController@viewTask')->name('view.task');

});

// routes for dsc and ndsc
Route::group(['middleware' => ['auth', 'role:dsc']], function() {

    // //Manage My Report
    // Route::get('/my-report-history', 'App\Http\Controllers\Form\ManageReportController@viewReportHistory')->name('report.history');
    // //Route::get('/my-report-history', 'App\Http\Controllers\Form\ManageReportController@show')->name('report.history');
    

    //My Task
    Route::get('/my-task', 'App\Http\Controllers\Form\MyTaskController@viewTask')->name('view.task');


    //Document Review
    Route::get('/document-review/create', 'App\Http\Controllers\Form\DocumentReviewController@create')->name('document-review.create');
    Route::post('/document-review/store', 'App\Http\Controllers\Form\DocumentReviewController@store')->name('document-review.store');
    Route::get('/manage-document-review/view/all', 'App\Http\Controllers\Form\DocumentReviewController@viewAll')->name('document-review.view-all');
    Route::get('/document-review/details/{id}', 'App\Http\Controllers\Form\DocumentReviewController@viewDocumentDetails');
    Route::get('/document-review/pdf/{id}','App\Http\Controllers\Form\DocumentReviewController@pdf')->name('document.pdf');

    //Food Premise
    Route::get('/food/create', 'App\Http\Controllers\Form\FoodPremiseController@create')->name('food.create');
    Route::post('/food/store', 'App\Http\Controllers\Form\FoodPremiseController@store')->name('food.store');
    Route::get('/food/show', 'App\Http\Controllers\Form\FoodPremiseController@show')->name('food.show');
    Route::post('food', 'App\Http\Controllers\Form\FoodPremiseController@store')->name('food.store');
    Route::post('food', 'App\Http\Controllers\Form\FoodPremiseController@store');
    Route::post('/food/store', 'FoodPremiseController@store');

    //Program Monitoring
    Route::get('/program/create', 'App\Http\Controllers\Form\ProgramController@create')->name('program.create');
    Route::post('/program/store', 'App\Http\Controllers\Form\ProgramController@store')->name('program.store');
    Route::get('/program/show', 'App\Http\Controllers\Form\ProgramController@show')->name('program.show');
    Route::get('/manage-program/view/all', 'App\Http\Controllers\Form\ProgramController@viewAll')->name('program.view-all');
    Route::get('/program/assign-staff/{id}', 'App\Http\Controllers\Form\ProgramController@assignStaff')->name('program.assign');
    Route::post('/program/assign-staff/store/{id}', 'App\Http\Controllers\Form\ProgramController@storeAssignStaff')->name('program.store.assign');
    Route::get('/program/comment/{id}', 'App\Http\Controllers\Form\ProgramController@commentProgram');
    Route::post('/program/comment/store/{id}', 'App\Http\Controllers\Form\ProgramController@storeComment');
    Route::get('/program/pdf/{id}','App\Http\Controllers\Form\ProgramController@pdf')->name('program.pdf');
    Route::get('/program/view/{id}','App\Http\Controllers\Form\ProgramController@view')->name('program.view');
    // Route::post('program', 'App\Http\Controllers\Form\ProgramController@store')->name('program.store');
    // Route::post('program', 'App\Http\Controllers\Form\ProgramController@store');
    // Route::post('/program/store', 'ProgramController@store');

    //Activity Monitoring
    Route::get('/activity-monitoring/create', 'App\Http\Controllers\Form\ActivityMonitoringController@create')->name('activity-monitor.create');
    Route::post('/activity-monitoring/store', 'App\Http\Controllers\Form\ActivityMonitoringController@store')->name('activity-monitor.store');

    //Referral
    Route::get('/referral/create', 'App\Http\Controllers\Form\ReferralFormController@create')->name('referral.create');
    Route::post('referral/store', 'App\Http\Controllers\Form\ReferralFormController@store')->name('referral.store');
    Route::get('/manage-referral/view/all', 'App\Http\Controllers\Form\ReferralFormController@viewAll')->name('referral.view-all');
    Route::get('/referral/details/{case_no}', 'App\Http\Controllers\Form\ReferralFormController@viewReferralDetails');
    Route::get('/referral/assign-staff/{case_no}', 'App\Http\Controllers\Form\ReferralFormController@assignStaff')->name('referral.assign');
    Route::post('/referral/assign-staff/store/{case_no}', 'App\Http\Controllers\Form\ReferralFormController@storeAssignStaff')->name('referral.store.assign');
    Route::get('/referral/status/{case_no}', 'App\Http\Controllers\Form\ReferralFormController@statusReferral');
    Route::post('/referral/status/store/{case_no}', 'App\Http\Controllers\Form\ReferralFormController@storeStatus');
    Route::get('/referral/pdf/{id}','App\Http\Controllers\Form\ReferralFormController@pdf')->name('referral.pdf');

    //Complaint
    // Route::get('/complaint/create', 'App\Http\Controllers\Form\ComplaintFormController@create')->name('complaint.create');
    // Route::post('/complaint/store', 'App\Http\Controllers\Form\ComplaintFormController@storeReport')->name('complaint.store');
    Route::get('/manage-complaint/view/all', 'App\Http\Controllers\Form\ComplaintFormController@viewAll')->name('complaint.view-all');
    // Route::get('/complaint/details/{id}', 'App\Http\Controllers\Form\ComplaintFormController@viewComplaintDetails');
    Route::get('/complaint/assign-staff/{id}', 'App\Http\Controllers\Form\ComplaintFormController@assignStaff')->name('complaint.assign');
    Route::post('/complaint/assign-staff/store/{id}', 'App\Http\Controllers\Form\ComplaintFormController@storeAssignStaff')->name('complaint.store.assign');
    Route::get('/complaint/investigate/{id}', 'App\Http\Controllers\Form\ComplaintFormController@investigateComplaint');
    Route::post('/complaint/investigate/store/{id}', 'App\Http\Controllers\Form\ComplaintFormController@storeInvestigation');
    // Route::get('/complaint/show', 'App\Http\Controllers\Form\ComplaintFormController@show')->name('complaint.show');
    // Route::get('/complaint/pdf/{id}','App\Http\Controllers\Form\ComplaintFormController@pdf')->name('complaint.pdf');
    // Route::get('/complaint/view/{id}','App\Http\Controllers\Form\ComplaintFormController@view')->name('complaint.view');

    //T&C
    Route::get('/terms/create', 'App\Http\Controllers\Form\TermsController@create')->name('terms.create');
    Route::post('/terms/store', 'App\Http\Controllers\Form\TermsController@store')->name('terms.store');
    Route::get('/manage-terms/view/all', 'App\Http\Controllers\Form\TermsController@show')->name('terms.view-all');
    Route::get('/terms/edit', 'App\Http\Controllers\Form\TermsController@edit')->name('terms.edit');
    Route::get('/terms/show', 'App\Http\Controllers\Form\TermsController@show')->name('terms.show');
    Route::get('/terms/pdf/{id}','App\Http\Controllers\Form\TermsController@pdf')->name('terms.pdf');
    Route::get('/terms/view/{id}','App\Http\Controllers\Form\TermsController@view')->name('terms.view');
    Route::post('terms', 'App\Http\Controllers\Form\TermsController@store')->name('terms.store');
    Route::post('terms', 'App\Http\Controllers\Form\TermsController@store');
    Route::post('/terms/store', 'TermsController@store');

    //Speaker Consent Form
    Route::get('/speaker/create', 'App\Http\Controllers\Form\SpeakerController@create')->name('speaker.create');
    Route::post('/speaker/store', 'App\Http\Controllers\Form\SpeakerController@store')->name('speaker.store');
    Route::get('/manage-speaker/view/all', 'App\Http\Controllers\Form\SpeakerController@show')->name('speaker.view-all');
    Route::get('/speaker/edit', 'App\Http\Controllers\Form\SpeakerController@edit')->name('speaker.edit');
    Route::get('/speaker/show', 'App\Http\Controllers\Form\SpeakerController@show')->name('speaker.show');
    Route::get('/speaker/pdf/{id}','App\Http\Controllers\Form\SpeakerController@pdf')->name('speaker.pdf');
    Route::get('/speaker/view/{id}','App\Http\Controllers\Form\SpeakerController@view')->name('speaker.view');
    Route::post('speaker', 'App\Http\Controllers\Form\SpeakerController@store')->name('speaker.store');
    Route::post('speaker', 'App\Http\Controllers\Form\SpeakerController@store');
    Route::post('/speaker/store', 'SpeakerController@store');

    //SLO report
    Route::get('/slo-report/create', 'App\Http\Controllers\Form\SLOReportController@create')->name('slo-report.create');
    Route::post('/slo-report/store', 'App\Http\Controllers\Form\SLOReportController@storeReport')->name('slo-report.store');
    Route::get('/manage-sloreport/view/all', 'App\Http\Controllers\Form\SLOReportController@viewAll')->name('slo-report.view-all');
    Route::get('/slo-report/details/{id}', 'App\Http\Controllers\Form\SLOReportController@viewSLOReportDetails');
    Route::get('/sloreport/assign-staff/{id}', 'App\Http\Controllers\Form\SLOReportController@assignStaff')->name('slo-report.assign');
    Route::post('/sloreport/assign-staff/store/{id}', 'App\Http\Controllers\Form\SLOReportController@storeAssignStaff')->name('slo-report.store.assign');
    Route::get('/sloreport/investigate/{id}', 'App\Http\Controllers\Form\SLOReportController@commentSLOReport');
    Route::post('/sloreport/investigate/store/{id}', 'App\Http\Controllers\Form\SLOReportController@storeComment');
    Route::get('/sloreport/pdf/{id}','App\Http\Controllers\Form\SLOReportController@pdf')->name('slo-report.pdf');

    //Shariah Clinic
    Route::get('/clinic/create', 'App\Http\Controllers\Form\ClinicController@create')->name('clinic.create');
    Route::post('/clinic/store', 'App\Http\Controllers\Form\ClinicController@store')->name('clinic.store');
    Route::get('/manage-clinic/view/all', 'App\Http\Controllers\Form\ClinicController@viewAll')->name('clinic.view-all');
    Route::get('/clinic/show', 'App\Http\Controllers\Form\ClinicController@show')->name('clinic.show');
    Route::get('/clinic/pdf/{id}','App\Http\Controllers\Form\ClinicController@pdf')->name('clinic.pdf');
    Route::get('/clinic/view/{id}','App\Http\Controllers\Form\ClinicController@view')->name('clinic.view');
    Route::get('/clinic/assign-staff/{id}', 'App\Http\Controllers\Form\ClinicController@assignStaff')->name('clinic.assign');
    Route::post('/clinic/assign-staff/store/{id}', 'App\Http\Controllers\Form\ClinicController@storeAssignStaff')->name('clinic.store.assign');
    Route::get('/clinic/comment/{id}', 'App\Http\Controllers\Form\ClinicController@commentClinic');
    Route::post('/clinic/comment/store/{id}', 'App\Http\Controllers\Form\ClinicController@storeComment');
    // Route::post('clinic', 'App\Http\Controllers\Form\ClinicController@store')->name('clinic.store');
    // Route::post('clinic', 'App\Http\Controllers\Form\ClinicController@store');
    // Route::post('/clinic/store', 'ClinicController@store');
    // Route::get('/clinic/list', 'ClinicController@index')->name('clinic.index');
    // Route::get('clinic/list', 'ClinicController@index')->name('clinic.index');
    // Route::get('/clinic/list', 'App\Http\Controllers\Form\ClinicController@index')->name('clinic.index');
    // Route::get('clinic/list', 'App\Http\Controllers\Form\ClinicController@index')->name('clinic.index');
    // Route::get('edit/{id}', ['App\Http\Controllers\Form\StudentController::class', 'edit']);
    // Route::post('clinic/edit/{id}','App\Http\Controllers\Form\ClinicController@edit');
});

// routes for ndsc
Route::group(['middleware' => ['auth', 'role:ndsc']], function() {

});

require __DIR__.'/auth.php';
