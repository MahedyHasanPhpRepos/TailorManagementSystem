<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\EmployeeController;
use App\Http\Controllers\Auth\VendorController;
use App\Http\Controllers\ClothOrder\OrderAcceptingController;
use App\Http\Controllers\EmployeeManagement\AddEmployeeController;
use App\Http\Controllers\EmployeeManagement\ListEmployeeController;
use App\Http\Controllers\EmployeeManagement\SalaryEmployeeController;
use App\Http\Controllers\IncomeCost\AccountManagementController;
use App\Http\Controllers\IncomeCost\DurationSummaryController;
use App\Http\Controllers\IncomeCost\QSectorController;
use App\Http\Controllers\MessageSending\SendingMessageController;
use App\Http\Controllers\MessageSending\SendingMessageListController;
use App\Http\Controllers\Permissions\Employee\EmployeePermissionController;
use App\Http\Controllers\Permissions\Vendor\VendorPermissionController;
use App\Http\Controllers\RegeneratePost;
use App\Http\Controllers\Report\OrderReportController;
use App\Http\Controllers\Settings\DressPartController;
use App\Http\Controllers\Settings\DressWagesController;
use App\Http\Controllers\Settings\EmployeeDesignationController;
use App\Http\Controllers\Settings\IncomeCostSectorController;
use App\Http\Controllers\Settings\LanguageSettingsController;
use App\Http\Controllers\Settings\SmsTemplateController;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/api', function () {

    $response = Http::get('https://jsonplaceholder.typicode.com/posts');

    if ($response->successful()) {
        $posts = $response->json(); // Get JSON as an array
        // Display the posts
    } else {
        // Handle errors
    }

    dd($posts);

    return $posts;
});





Route::get('/super_admin', function () {
    return view('superAdmin.dashboard');
})->name('super_admin_dashboard')->middleware('admin');

Route::get('/vendor', function () {
    return view('vendor.dashboard');
})->name('vendor_dashboard')->middleware('vendor');

Route::get('/employee', function () {

    $employee_id = Auth::guard('employee')->user()->id;
    $permission_list = Permission::where('employee_id', $employee_id)->get();
    return view('employee.dashboard', compact('permission_list'));
})->name('employee_dashboard')->middleware('employee');

Route::get('/docs', function () {
    return view('docs');
})->name('docs');

Route::group(['prefix' => 'auth'], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('login', [AdminController::class, 'login'])->name('auth.admin.login.view');
        Route::post('login/store', [AdminController::class, 'login_store'])->name('auth.admin.login.store');

        Route::get('logout', [AdminController::class, 'admin_logout'])->name('auth.admin.logout');

        Route::get('register', [AdminController::class, 'register'])->name('auth.admin.register.view');
        Route::post('register/store', [AdminController::class, 'register_store'])->name('auth.admin.register.store');

        Route::get('manager/list', [AdminController::class, 'manager_list'])->name('auth.manager.list.view');
        Route::get('manager/active', [AdminController::class, 'manager_activate'])->name('auth.manager.active');


        Route::get('register/vendor', [AdminController::class, 'vendor_register_from_admin'])->name('auth.admin.register.vendor.view');
        Route::get('/vendor/active/list', [AdminController::class, 'active_vendor_list_from_admin'])->name('auth.admin.active.vendor.list.view');
        Route::get('/vendor/pending/list', [AdminController::class, 'pending_vendor_list_from_admin'])->name('auth.admin.pending.vendor.list.view');

        Route::get('/vendor/active/{id}', [AdminController::class, 'admin_activate_vendor'])->name('auth.admin.activate.vendor');
        Route::get('/vendor/deactive/{id}', [AdminController::class, 'admin_deactivate_vendor'])->name('auth.admin.deactive.vendor');
        Route::get('/vendor/delete/{id}', [AdminController::class, 'admin_delete_vendor'])->name('auth.admin.delete.vendor');

        Route::get('recovery/password', [AdminController::class, 'recovery_password'])->name('auth.admin.recovery.password');
        Route::post('recovery/password/store', [AdminController::class, 'recovery_password_store'])->name('auth.admin.recovery.password.store');
    });

    Route::group(['prefix' => 'vendor'], function () {
        Route::get('login', [VendorController::class, 'login'])->name('auth.vendor.login.view');
        Route::post('login/store', [VendorController::class, 'login_store'])->name('auth.vendor.login.store');

        Route::get('logout', [VendorController::class, 'vendor_logout'])->name('auth.vendor.logout');

        Route::get('register', [VendorController::class, 'register'])->name('auth.vendor.register.view');
        Route::post('register/store', [VendorController::class, 'register_store'])->name('auth.vendor.register.store');

        Route::get('recovery/password', [VendorController::class, 'recovery_password'])->name('auth.vendor.recovery.password');
        Route::post('recovery/password/store', [VendorController::class, 'recovery_password_store'])->name('auth.vendor.recovery.password.store');
    });

    Route::group(['prefix' => 'employee'], function () {
        Route::get('login', [EmployeeController::class, 'login'])->name('auth.employee.login.view');
        Route::post('login/store', [EmployeeController::class, 'login_store'])->name('auth.employee.login.store');

        Route::get('logout', [EmployeeController::class, 'employee_logout'])->name('auth.employee.logout');

        Route::get('register', [EmployeeController::class, 'register'])->name('auth.employee.register.view');
        Route::post('register/store', [EmployeeController::class, 'register_store'])->name('auth.employee.register.store');

        Route::get('recovery/password', [EmployeeController::class, 'recovery_password'])->name('auth.employee.recovery.password');
        Route::post('recovery/password/store', [EmployeeController::class, 'recovery_password_store'])->name('auth.employee.recovery.password.store');
    });
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin_or_vendor'], function () {
    Route::group(['prefix' => 'cloth'], function () {
        Route::get('order/accepting', [OrderAcceptingController::class, 'order_accepting'])->name('admin.order.accepting.view');
        Route::get('order/accepted/list', [OrderAcceptingController::class, 'order_accepted_list'])->name('admin.order.accepting.list');
    });

    Route::group(['prefix' => 'employee_management'], function () {
        Route::get('add/employee', [AddEmployeeController::class, 'add_employee'])->name('admin.add.employee.view');
        Route::get('list/employee', [ListEmployeeController::class, 'list_employee'])->name('admin.list.employee.view');
        Route::get('salary/employee', [SalaryEmployeeController::class, 'salary_management_employee'])->name('admin.salary.employee.view');
    });

    Route::group(['prefix' => 'sending_message'], function () {
        Route::get('user', [SendingMessageController::class, 'sending_message_user'])->name('admin.sending.message.user.view');
        Route::get('/user/list', [SendingMessageListController::class, 'sending_message_list'])->name('admin.sending.message.list.view');
    });

    Route::group(['prefix' => 'income_cost'], function () {
        Route::get('account/management', [AccountManagementController::class, 'account_management'])->name('admin.income.cost.account.management.view');
        Route::get('duration/summary', [DurationSummaryController::class, 'duration_summary'])->name('admin.duration.summary.view');
        Route::get('q/duration/summary', [QSectorController::class, 'q_duration_summary'])->name('admin.q_duration.summary.view');
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('order', [OrderReportController::class, 'order_report'])->name('admin.order.report.view');
    });



    Route::group(['prefix' => 'settings'], function () {
        Route::get('dress/wages', [DressWagesController::class, 'dress_wages'])->name('admin.dress.wages.view');
        Route::get('dress/part', [DressPartController::class, 'dress_part'])->name('admin.dress.part.view');
        Route::get('income/cost', [IncomeCostSectorController::class, 'income_cost'])->name('admin.income.cost.view');
        Route::get('employee/designation', [EmployeeDesignationController::class, 'employee_designation'])->name('admin.employee.designation.view');
        Route::get('sms/template', [SmsTemplateController::class, 'sms_template'])->name('admin.sms.template.view');
        Route::get('language', [LanguageSettingsController::class, 'language_setting'])->name('admin.language.setting.view');
    });
});



Route::group(['prefix' => 'permissions'], function () {
    Route::group(['prefix' => 'vendor'], function () {
        Route::get('list', [VendorPermissionController::class, 'vendor_list'])->name('permission.vendor.list.view');
        Route::get('single/{id}', [VendorPermissionController::class, 'vendor_single'])->name('permission.vendor.single');
        Route::post('permissions/submit', [VendorPermissionController::class, 'vendor_submit_permissions'])->name('vendor.submit.permissions');
    });
    Route::group(['prefix' => 'employee'], function () {
        Route::get('list', [EmployeePermissionController::class, 'employee_list'])->name('permission.employee.list.view');
        Route::get('single/{id}', [EmployeePermissionController::class, 'employee_single'])->name('permission.employee.single')->middleware('admin_or_vendor');
        Route::post('permissions/submit', [EmployeePermissionController::class, 'employee_submit_permissions'])->name('employee.submit.permissions');
    });
});
