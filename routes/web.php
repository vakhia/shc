<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify' => true]);

Route::group(['middleware'=>'locale'],function(){
    Route::group(['namespace' => 'Main'], function () {
        Route::group(['namespace' => 'Locale','prefix'=>'/locale'], function () {
            Route::get('/{locale}', 'UpdateController')->name('main.locale.update');
        });
        Route::group(['namespace' => 'Home'], function () {
            Route::get('/', 'IndexController')->name('main.home.index');
        });
        Route::group(['namespace' => 'About'], function () {
            Route::get('/about', 'IndexController')->name('main.about.index');
        });
        Route::group(['namespace' => 'Appointment'], function () {
            Route::get('/appointment', 'CreateController')->name('main.appointment.create');
            Route::post('/', 'StoreController')->name('main.appointment.store');
        });
        Route::group(['namespace' => 'Department'], function () {
            Route::get('/departments', 'IndexController')->name('main.department.index');
            Route::get('/departments/{department}', 'ShowController')->name('main.department.show');
        });
        Route::group(['namespace' => 'Service'], function () {
            Route::get('/services', 'IndexController')->name('main.service.index');
        });
        Route::group(['namespace' => 'Hospital', 'prefix' => '/hospitals'], function () {
            Route::get('/', 'IndexController')->name('main.hospital.index');
            Route::get('/{hospital}', 'ShowController')->name('main.hospital.show');
        });
        Route::group(['namespace' => 'News'], function () {
            Route::get('/news', 'IndexController')->name('main.news.index');
        });
        Route::group(['namespace' => 'Staff'], function () {
            Route::get('/staff', 'IndexController')->name('main.staff.index');
        });
    });

    Route::group(['namespace' => 'Admin', 'prefix' => '/admin', 'middleware' => ['auth', 'admin', 'verified']], function () {
        Route::group(['namespace' => 'Home'], function () {
            Route::get('/', 'IndexController')->name('admin.home.index');
        });
        Route::group(['namespace' => 'Department', 'prefix' => '/departments'], function () {
            Route::get('/', 'IndexController')->name('admin.department.index');
            Route::get('/create', 'CreateController')->name('admin.department.create');
            Route::get('/{department}', 'ShowController')->name('admin.department.show');
            Route::get('/{department}/edit/', 'EditController')->name('admin.department.edit');
            Route::patch('/{department}', 'UpdateController')->name('admin.department.update');
            Route::post('/', 'StoreController')->name('admin.department.store');
            Route::delete('/{department}', 'DeleteController')->name('admin.department.delete');
        });
        Route::group(['namespace' => 'Staff', 'prefix' => '/staff'], function () {
            Route::get('/', 'IndexController')->name('admin.staff.index');
            Route::get('/create', 'CreateController')->name('admin.staff.create');
            Route::post('/', 'StoreController')->name('admin.staff.store');
            Route::delete('/{staff}', 'DeleteController')->name('admin.staff.delete');
            Route::patch('/{staff}', 'UpdateController')->name('admin.staff.update');
            Route::get('/{staff}/edit/', 'EditController')->name('admin.staff.edit');
            Route::get('/{staff}', 'ShowController')->name('admin.staff.show');
        });
        Route::group(['namespace' => 'Hospital', 'prefix' => '/hospitals'], function () {
            Route::get('/', 'IndexController')->name('admin.hospital.index');
            Route::get('/create', 'CreateController')->name('admin.hospital.create');
            Route::post('/', 'StoreController')->name('admin.hospital.store');
            Route::delete('/{hospital}', 'DeleteController')->name('admin.hospital.delete');
            Route::patch('/{hospital}', 'UpdateController')->name('admin.hospital.update');
            Route::get('/{hospital}/edit/', 'EditController')->name('admin.hospital.edit');
            Route::get('/{hospital}', 'ShowController')->name('admin.hospital.show');
        });

        Route::group(['namespace' => 'User', 'prefix' => '/users'], function () {
            Route::get('/', 'IndexController')->name('admin.user.index');
            Route::get('/create', 'CreateController')->name('admin.user.create');
            Route::post('/', 'StoreController')->name('admin.user.store');
            Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
            Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
            Route::get('/{user}/edit/', 'EditController')->name('admin.user.edit');
            Route::get('/{user}', 'ShowController')->name('admin.user.show');
        });

        Route::group(['namespace' => 'Medicine', 'prefix' => '/medicines'], function () {
            Route::get('/', 'IndexController')->name('admin.medicine.index');
            Route::get('/create', 'CreateController')->name('admin.medicine.create');
            Route::get('/{medicine}', 'ShowController')->name('admin.medicine.show');
            Route::get('/{medicine}/edit/', 'EditController')->name('admin.medicine.edit');
            Route::patch('/{medicine}', 'UpdateController')->name('admin.medicine.update');
            Route::post('/', 'StoreController')->name('admin.medicine.store');
            Route::delete('/{medicine}', 'DeleteController')->name('admin.medicine.delete');
        });
    });

    Route::group(['namespace' => 'Profile', 'prefix' => '/profile', 'middleware' => ['auth', 'verified']], function () {
        Route::group(['namespace' => 'Home', 'prefix' => '/'], function () {
            Route::get('/', 'IndexController')->name('profile.home.index');
        });
        Route::group(['namespace'=>'Information','prefix'=>'/information','middleware'=>'user'],function(){
            Route::get('/{user}/edit','EditController')->name('profile.information.edit');
            Route::patch('/{user}', 'UpdateController')->name('profile.information.update');
        });
        Route::group(['namespace' => 'Treatment', 'prefix' => '/treatments'], function () {
            Route::get('/', 'IndexController')->name('profile.treatment.index');
            Route::group(['middleware' => ['doctor']], function () {
                Route::get('/create/{examination}', 'CreateController')->name('profile.treatment.create');
                Route::post('/', 'StoreController')->name('profile.treatment.store');
                Route::get('/{treatment}/edit', 'EditController')->name('profile.treatment.edit');
                Route::patch('/{treatment}', 'UpdateController')->name('profile.treatment.update');
            });
            Route::group(['middleware' => ['treatment']], function () {
                Route::get('/{treatment}', 'ShowController')->name('profile.treatment.show');
                Route::group(['middleware' => ['doctor']], function () {
                    Route::delete('/{treatment}', 'DeleteController')->name('profile.treatment.delete');
                });
            });
        });
        Route::group(['namespace' => 'Appointment', 'prefix' => '/appointments'], function () {
            Route::get('/', 'IndexController')->name('profile.appointment.index');
            Route::group(['middleware' => ['appointment']], function () {
                Route::get('/{appointment}', 'ShowController')->name('profile.appointment.show');
                Route::patch('/{appointment}', 'UpdateController')->name('profile.appointment.update');
                Route::group(['middleware' => ['doctor']], function () {
                    Route::delete('/{appointment}', 'DeleteController')->name('profile.appointment.delete');
                    Route::get('/{appointment}/edit/', 'EditController')->name('profile.appointment.edit');
                });
            });
        });
        Route::group(['namespace' => 'MedicalExamination', 'prefix' => '/examinations'], function () {
            Route::get('/', 'IndexController')->name('profile.examination.index');
            Route::group(['middleware' => ['doctor']], function () {
                Route::get('/create/{appointment}', 'CreateController')->name('profile.examination.create');
                Route::post('/', 'StoreController')->name('profile.examination.store');
            });
            Route::group(['middleware' => ['examination']], function () {
                Route::get('/{examination}', 'ShowController')->name('profile.examination.show');
                Route::group(['middleware' => ['doctor']], function () {
                    Route::get('/{examination}/edit/', 'EditController')->name('profile.examination.edit');
                    Route::patch('/{examination}', 'UpdateController')->name('profile.examination.update');
                    Route::delete('/{examination}', 'DeleteController')->name('profile.examination.delete');
                });
            });
        });
    });
});

