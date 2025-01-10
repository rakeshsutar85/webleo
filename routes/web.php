<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\Wlpcontroller;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\DistributorsController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\SubcomponentController;
use App\Http\Controllers\Ajax;
use App\Http\Controllers\ElementTypeController;
use App\Http\Controllers\ModleNoController;
use App\Http\Controllers\DevicePartNoController;
use App\Http\Controllers\CustomfieldsController;
use App\Http\Controllers\MapDeviceController;
use App\Http\Controllers\TacNoController;

require __DIR__ . '/auth.php';
require __DIR__ . '/auth.php';
Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth', 'role:user'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Ajax route 
    Route::get('/superadmin/fetch/element-type/{element_id}', [Ajax::class, 'fetchElementTypeByElemeNt'])->name('superadmin.fetch.element.type');
    Route::get('/superadmin/fetch/model-no/{type_id}', [Ajax::class, 'fetchModelNoByType'])->name('superadmin.fetch.model-no');
    Route::get('/superadmin/fetch/part-no/{model_id}', [Ajax::class, 'fetchPartNoByModel'])->name('superadmin.fetch.part_no');
    Route::get('/fetch/customFields/element/{id}/{parent}', [Ajax::class, 'fetchCustomFields'])->name('superadmin.fetch.custom.fields');

    Route::get('/superadmin/fetch/barcode/{part_id}', [Ajax::class, 'fetchBarcodeByPartNo'])->name('superadmin.fetch.barcode');

});


Route::middleware(['auth', 'role:superadmin'])->group(function () {

    Route::get('/superadmin/dashboard', [SuperController::class, 'dashboard'])->name('superadmin.dashboard');
    Route::get('/superadmin/admins-list', [AdminController::class, 'index'])->name('superadmin.admin');
    Route::get("/superadmin/admins-edit/{id}", [AdminController::class, 'admin_edit'])->name("superadmin.admin.edit");
    Route::put('/superadmin/admins-edit/{id}', [AdminController::class, 'admin_edit_store'])->name('superadmin.admin.update');
    Route::delete('/superadmin/admins/{id}', [AdminController::class, 'admin_destroy'])->name('superadmin.admin.destroy');
    Route::get('/superadmin/onboard/admin', [AdminController::class, 'create'])->name('superadmin.create.admin');
    Route::post('/superadmin/onboard/admin', [AdminController::class, 'store'])->name('superadmin.store.admin');


    Route::get('/superadmin/create-element', [ElementController::class, 'index'])->name('superadmin.element.create');
    Route::post('/superadmin/create-element', [ElementController::class, 'store'])->name('superadmin.element.store');
    Route::post('/superadmin/component-element', [ComponentController::class, 'store'])->name('superadmin.component.store');
    Route::get('/superadmin/fetch-component/{id}', action: [ComponentController::class, 'fetchcomponentvalue'])->name('superadmin.subcomponent.fetchcomponentvalue');
    Route::post('/superadmin/store-subcomponent', action: [SubcomponentController::class, 'store'])->name(name: 'superadmin.subcomponent.store');


    Route::post('/superadmin/element-type/store', [ElementTypeController::class, 'store'])->name('superadmin.element.type.store');
    Route::post('/superadmin/model-no/store', [ModleNoController::class, 'store'])->name('superadmin.model_no.store');
    Route::post('/superadmin/part-no/store', [DevicePartNoController::class, 'store'])->name('superadmin.part_no.store');
    Route::post('/superadmin/tac-no/store', [TacNoController::class, 'store'])->name('superadmin.tacNo.store');
    Route::post('/superadmin/custom-fields/store', [CustomfieldsController::class, 'store'])->name('superadmin.customFields.store');

    Route::put('/superadmin/element/edit/{id}', [ElementController::class, 'edit'])->name('superadmin.element.edit');
    Route::delete('superadmin/element/{id}', [ElementController::class, 'destroy'])->name('superadmin.element.destroy');

    Route::put('/superadmin/component/edit/{id}', [ComponentController::class, 'edit'])->name('superadmin.component.edit');
    Route::delete('/superadmin/component/{id}', [ComponentController::class, 'destroy'])->name('superadmin.component.destroy');

    Route::put('/superadmin/subcomponent/edit/{id}', [SubcomponentController::class, 'edit'])->name('superadmin.subcomponent.edit');
    Route::delete('superadmin/subcomponent/{id}', [SubcomponentController::class, 'destroy'])->name('superadmin.subcomponent.destroy');

    Route::get('/superadmin/element/component/subcomponent-list/{component_id}', [SubcomponentController::class, 'list'])->name('superadmin.element.component.subcomponent');


    Route::get('/superadmin/element/component-list/{element_id}', [ComponentController::class, 'list'])->name('superadmin.element.component');
    Route::get('/superadmin/assign-element', [AdminController::class, 'assignElementView'])->name('superadmin.assign.element');
    Route::post('/superadmin/assign-element', [AdminController::class, 'storeAssignElement'])->name('superadmin.assign.element.store');


});


//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/onboard/wlp', [Wlpcontroller::class, 'create_wlp'])->name('admin.create.wlp');
    Route::post('/admin/onboard/wlp', [Wlpcontroller::class, 'store'])->name('admin.store.wlp');
    Route::get('/admin/wlp/list', [Wlpcontroller::class, 'index'])->name('admin.wlp');

    Route::get('admin/create-subscription', [SubscriptionController::class, 'create'])->name('admin.create.subscription');
    Route::post('admin/store-subscription', [SubscriptionController::class, 'store'])->name('admin.store.subscription');
    Route::get('admin/subscriptionlist', [SubscriptionController::class, 'index'])->name('admin.view.subscriptionlist');
    Route::get('admin/deletesubscription/{id}', [SubscriptionController::class, 'destroy'])->name('admin.delete.subscription');

    Route::get('admin/editsubscription/{id}', [SubscriptionController::class, 'show'])->name('admin.edit.subscription');
    Route::put('admin/update-subscription/{id}', [SubscriptionController::class, 'update'])->name('admin.update.subscription');
});

//Wlp routes
Route::middleware(['auth', 'role:wlp'])->group(function () {
    Route::get('/wlp/dashboard', [Wlpcontroller::class, 'dashboard'])->name('wlp.dashboard');
    Route::get('/wlp/onboard/manufacturer', [ManufacturerController::class, 'create'])->name('wlp.create.manufacturer');
    Route::post('/wlp/onboard/manufacturer', [ManufacturerController::class, 'store'])->name('wlp.store.manufacturer');
    Route::get('/wlp/manufacturer/list', [ManufacturerController::class, 'index'])->name('wlp.manufacturer.list');
});

//Manufacturer routes
Route::middleware(['auth', 'role:manufacturer'])->group(function () {
    Route::get('/manufacturer/dashboard', [ManufacturerController::class, 'dashboard'])->name('manufacturer.dashboard');
    Route::get('/manufacturer/create/distributors', [DistributorsController::class, 'create'])->name('manufacturer.create.distributors');
    Route::post('/manufacturer/create/distributors', [DistributorsController::class, 'store'])->name('manufacturer.store.distributors');
    Route::get('/manufacturer/distributors/list', [DistributorsController::class, 'index'])->name('manufacturer.distributors.list');
    Route::get('/manufacturer/manage/barcode', [ManufacturerController::class, 'manageBarcode'])->name('manufacturer.manage.barcode');
    Route::get('/manufacturer/barcode/list', action: [BarcodeController::class, 'index'])->name('manufacturer.barcode.list');
    Route::get('/manufacturer/allocate/barcode', action: [BarcodeController::class, 'allocate'])->name('manufacturer.barcode.allocate');

    Route::get('/manufacturer/fetch/components/{id}', [ManufacturerController::class, 'fetchComponents'])->name('manufacturer.fetch.components');
    Route::get('/manufacturer/fetch/options/{id}', [ManufacturerController::class, 'fetchOptions'])->name('manufacturer.fetch.options');
    Route::get('/manufacturer/fetch/sub-components/{id}', [ManufacturerController::class, 'fetch_SubComponents'])->name('manufacturer.fetch.sub_components');
    Route::get('/manufacturer/fetch/sub-component/options/{sub_id}', [ManufacturerController::class, 'fetch_SubComponents_opt'])->name('manufacturer.fetch.sub_components.opt');
    Route::post('/manufacturer/store/barcode', [BarcodeController::class, 'store'])->name('manufacturer.store.barcode');

    Route::post('/barcode/allocate', [BarcodeController::class, 'saveBarcodeAllocation'])->name('barcode.allocate');

    
    // ajax
    Route::get('/manufacturer/fetch/distributer/{state}', [Ajax::class, 'fetchdistributer'])->name('manufacturer.fetch.distributer');
    Route::get('/manufacturer/fetch/dealer/{distributer_id}', [Ajax::class, 'fetchdealer'])->name('manufacturer.fetch.dealer');

    Route::get('/manufacturer/fetch/deviceno', [Ajax::class, 'fetchDeviceNo'])->name('manufacturer.fetch.deviceno');

    Route::get('/manufacturer/fetch/technician', [Ajax::class, 'fetchTechnician'])->name('manufacturer.fetch.technician');

    Route::post('/manufacturer/store/map_device', [MapDeviceController::class, 'store'])->name('manufacturer.store.map.device');


    Route::get('/manufacturer/fetch/devicemodelno/{id}', [Ajax::class, 'fetchModelNoByElement']);

    Route::get('/manufacturer/fetch/devicepartno/{id}', [Ajax::class, 'fetchPartNoByModelNo']);



});

Route::middleware(['auth', 'role:distributer'])->group(function () {
    Route::get('/distributer/dashboard', [DistributorsController::class, 'dashboard'])->name('distributer.dashboard');
    Route::get('/distributer/create/dealer', [DealerController::class, 'create'])->name('distributer.create.dealer');
    Route::post('/distributer/store/dealer', [DealerController::class, 'store'])->name('distributer.store.dealer');


});

Route::middleware(['auth', 'role:dealer'])->group(function () {
    Route::get('/dealer/dashboard', [DealerController::class, 'dashboard'])->name('dealer.dashboard');
    Route::get('/dealer/create/technician', [TechnicianController::class, 'create'])->name('dealer.create.technician');
    Route::post('/dealer/store/technician', [TechnicianController::class, 'store'])->name('dealer.store.technician');

});


Route::middleware(['auth', 'role:technician'])->group(function () {
    Route::get('/technician/dashboard', [TechnicianController::class, 'dashboard'])->name('technician.dashboard');

});