<?php


use App\Http\Controllers\PatientPassengerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NurseController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TimeShiftController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\PatientsFileController;
use App\Http\Controllers\PsychiatristController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\AuthSkipReasonController;
use App\Http\Controllers\MorningLectureController;
use App\Http\Controllers\EmergencyReasonController;
use App\Http\Controllers\Nurse\Auth\LoginController;
use App\Http\Controllers\TransportRequestController;
use App\Http\Controllers\MaintenanceRequestController;
use App\Http\Controllers\MaintenanceServiceController;
use App\Http\Controllers\MissionValuesController;
use App\Http\Controllers\PsychiatristRequestController;
use App\Http\Controllers\PsychiatristTimeShiftController;
use App\Http\Controllers\Psychiatrist\Auth\LoginController as AuthLoginController;

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
    return redirect('login');
});


Route::get('privacy-policy', [PrivacyPolicyController::class, 'indexView']);

Route::name('psychiatrist.')->namespace('Psychiatrist')->prefix('psychiatrist')->group(function () {
    Route::namespace('Auth')->middleware('guest:psychiatrist')->group(function () {
        Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthLoginController::class, 'login'])->name('login');
    });
    Route::namespace('Auth')->middleware('auth:psychiatrist')->group(function () {
        Route::post('/logout', [AuthLoginController::class, 'logout'])->name('logout');
        Route::get('/', [DashboardController::class, 'nurseDashboard'])->name('index');
        Route::get('/profile-edit', [AuthLoginController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile-edit', [AuthLoginController::class, 'updateProfile'])->name('profile.update');
        Route::post('/email-update', [AuthLoginController::class, 'updateEmail'])->name('profile.update-email');
        Route::post('/password-update', [AuthLoginController::class, 'updatePassword'])->name('profile.update-password');

        Route::get('/show-patients', [PsychiatristController::class, 'getPatients'])->name('patients');
        Route::get('/edit-time-slot/{id}', [PsychiatristController::class, 'editTimeSlot'])->name('edit-time-slot');
        Route::put('/update-time-slot/{id}', [PsychiatristController::class, 'updateTimeSlot'])->name('update-time-slot');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);

    Route::resource('/', DashboardController::class);
    Route::resource('/patient', PatientController::class);


    Route::get('driver-route-assign/{id}',[DriverController::class,'assignRoute'])->name('driver.routeassign');
    Route::post('save-route-coordinates',[ DriverController::class,'assignRouteCoordinate'])->name('driver.save.routeassign');
    Route::get('driver-route-map-view-route/{id}',[DriverController::class,'viewMapRoute'])->name('driver.mapviewroute');

    Route::get('driver-trip-date/{id}', [DriverController::class, 'driverTripDate'])->name('driver.trip.date');
    Route::get('driver-trip-list/{id}/{date}', [DriverController::class, 'driverTripList'])->name('driver.trip.list');
    Route::get('driver-emergency', [DriverController::class, 'driverEmergency'])->name('driver.emergency');
    Route::post('driver-emergency/approve/{id}', [DriverController::class, 'emergencyApprove'])->name('driver.emergeny-approve');

    Route::resource('driver', DriverController::class);


    Route::resource('psychiatrists', PsychiatristController::class);

    Route::post('getstatebycountry', [StateController::class, 'getState']);

    // Route::get('test', [MorningLectureController::class, 'test']);


    Route::post('morning-lectures-patients', [MorningLectureController::class, 'patientsDestroy'])->name('morning.lecture.patients.destroy');
    Route::post('morning-lectures-assign-patient/{id}', [MorningLectureController::class, 'assignPatient'])->name('morning.lecture.assign.patient');

    Route::get('morning-lectures-assign-patient-transport/{morningLectureId}/{patientId}', [MorningLectureController::class, 'transportRequest'])->name('morning.lecture.patients.transportRequest');

    Route::get('morning-lectures-patients/{id}', [MorningLectureController::class, 'patientsIndex'])->name('morning.lecture.patients');
    Route::resource('morning-lectures', MorningLectureController::class);
    Route::resource('nurses', NurseController::class);

    Route::resource('maintenance-services', MaintenanceServiceController::class);

    Route::resource('reasons', ReasonController::class);
    Route::resource('vehicle-types', VehicleTypeController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('time-shifts', TimeShiftController::class);
    Route::resource('psychiatrist-time-shifts', PsychiatristTimeShiftController::class);
    Route::resource('abouts', AboutPageController::class);
    Route::resource('mission-values', MissionValuesController::class);
    Route::resource('privacy-policy', PrivacyPolicyController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('housings', HousingController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('emergency-reasons', EmergencyReasonController::class);
    Route::resource('report', ReportController::class);
    Route::post('get-passengers', [ReportController::class, 'getPassengersByPatient'])->name('passengers.by-patient');

    Route::post('assign-house-patient/{id}', [PatientController::class, 'assignHouse'])->name('assign.house');Route::get('unassign-house-patient/{id}', [PatientController::class, 'unassignHouse'])->name('unassign.house');
    Route::post('assign-patient-house/{id}', [HousingController::class, 'assignPatient'])->name('house.assign.patient');
    Route::post('house-floors', [HousingController::class, 'getHouseFloors'])->name('house.floors');
    Route::post('floor-rooms', [HousingController::class, 'getFloorRooms'])->name('floor.rooms');
    Route::post('floor-beds', [HousingController::class, 'getFloorBeds'])->name('floor.beds');

    Route::delete('floor-beds/{id}', [HousingController::class, 'destroyBeds'])->name('beds.destroy');
    Route::delete('floor-rooms/{id}', [HousingController::class, 'destroyRooms'])->name('rooms.destroy');
    Route::delete('house-floors/{id}', [HousingController::class, 'destroyFloors'])->name('floors.destroy');
    Route::delete('floor-bathrooms/{id}', [HousingController::class, 'destroyBathrooms'])->name('bathrooms.destroy');
    Route::delete('floor-kitchens/{id}', [HousingController::class, 'destroyKitchens'])->name('kitchens.destroy');

    Route::post('assign-nurse-patient/{id}', [PatientController::class, 'assignNurse'])->name('assign.nurse');
    Route::post('assign-patient-nurse/{id}', [NurseController::class, 'assignPatient'])->name('assign.patient');
    Route::post('passenger/store/{patientId}', [PatientPassengerController::class, 'store'])->name('passenger.store');
    Route::get('passenger/make-patient/{patientId}', [PatientPassengerController::class, 'makePatientModal'])->name('passenger.get-patient');
    Route::post('passenger/make-patient/{id}', [PatientPassengerController::class, 'passengerMakePatient'])->name('passenger.make-patient');
    Route::put('passenger/update-parent/{id}', [PatientController::class, 'makeParent'])->name('passenger.update-parent');
    Route::get('passenger/{patientId}', [PatientPassengerController::class, 'index'])->name('passenger.index');
    Route::delete('passenger/{id}', [PatientController::class, 'passengerDestroy'])->name('passenger.destroy');


    Route::post('transport-request/approve/{id}', [TransportRequestController::class, 'approve'])->name('transport-request.approve');
    Route::post('transport-request/decline/{id}', [TransportRequestController::class, 'decline'])->name('transport-request.decline');
    Route::post('transport-request/driver-assign', [TransportRequestController::class, 'assignDriver'])->name('transport-request.assign-driver');
    Route::post('transport-request/time-set', [TransportRequestController::class, 'timeSet'])->name('transport-request.time-set');
    Route::resource('transport-request', TransportRequestController::class);

    Route::post('maintenance-request/approve/{id}', [MaintenanceRequestController::class, 'approve'])->name('maintenance-request.approve');
    Route::post('maintenance-request/decline/{id}', [MaintenanceRequestController::class, 'decline'])->name('maintenance-request.decline');
    Route::post('maintenance-request/complete/{id}', [MaintenanceRequestController::class, 'complete'])->name('maintenance-request.complete');


    Route::resource('maintenance-request', MaintenanceRequestController::class);

    Route::post('psychiatrist-request/approve/{id}', [PsychiatristRequestController::class, 'approve'])->name('psychiatrist-request.approve');
    Route::post('psychiatrist-request/decline/{id}', [PsychiatristRequestController::class, 'decline'])->name('psychiatrist-request.decline');
    Route::resource('psychiatrist-request', PsychiatristRequestController::class);
    Route::resource('skip-reason', AuthSkipReasonController::class);
});

Route::name('nurse.')->namespace('Nurse')->prefix('nurse')->group(function () {
    Route::namespace('Auth')->middleware('guest:nurse')->group(function () {
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');

    });
    Route::namespace('Auth')->middleware('auth:nurse')->group(function () {

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/', [DashboardController::class, 'nurseDashboard'])->name('index');
        Route::get('/profile-edit', [LoginController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile-edit', [LoginController::class, 'updateProfile'])->name('profile.update');
        Route::post('/email-update', [LoginController::class, 'updateEmail'])->name('profile.update-email');
        Route::post('/password-update', [LoginController::class, 'updatePassword'])->name('profile.update-password');

        Route::get('/show-patients', [NurseController::class, 'getPatients'])->name('patients');
        Route::get('/patient-care/{patient_id}', [PatientsFileController::class, 'index'])->name('patient-care');

        Route::prefix('patient-file')->group(function () {
            Route::get('/create/{patient_id}', [PatientsFileController::class, 'create'])->name('patient-files.create');
            Route::post('/store/{patient_id}', [PatientsFileController::class, 'store'])->name('patient-files.store');
            Route::get('edit/{id}', [PatientsFileController::class, 'edit'])->name('patient-files.edit');
            Route::delete('destroy/{id}', [PatientsFileController::class, 'destroy'])->name('patient-files.destroy');
            Route::get('files/{id}', [PatientsFileController::class, 'getFiles'])->name('patient-files.list');

        });

    });
});
