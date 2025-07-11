<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Authentication Routes (Laravel Breeze)
require __DIR__.'/auth.php';

// Dashboard Routes for Different Roles
Route::middleware(['auth'])->group(function () {
    // Trainee Dashboard
    Route::prefix('trainee')->middleware(['role:trainee'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboards.trainee.dashboard');
        })->name('trainee.dashboard');
        Route::get('/bookings', function () {
            return view('dashboards.trainee.bookings');
        })->name('trainee.bookings');
        Route::get('/schedule', function () {
            return view('dashboards.trainee.schedule');
        })->name('trainee.schedule');
        Route::get('/profile', function () {
            return view('dashboards.trainee.profile');
        })->name('trainee.profile');
        Route::get('/messages', function () {
            return view('dashboards.trainee.messages');
        })->name('trainee.messages');
        Route::get('/community', function () {
            return view('dashboards.trainee.community');
        })->name('trainee.community');
    });

    // Trainer Dashboard
    Route::prefix('trainer')->middleware(['role:trainer'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboards.trainer.dashboard');
        })->name('trainer.dashboard');
        Route::get('/schedule', function () {
            return view('dashboards.trainer.schedule');
        })->name('trainer.schedule');
        Route::get('/clients', function () {
            return view('dashboards.trainer.clients');
        })->name('trainer.clients');
        Route::get('/earnings', function () {
            return view('dashboards.trainer.earnings');
        })->name('trainer.earnings');
        Route::get('/profile', function () {
            return view('dashboards.trainer.profile');
        })->name('trainer.profile');
    });

    // Facility Dashboard
    Route::prefix('facility')->middleware(['role:facility'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboards.facility.dashboard');
        })->name('facility.dashboard');
        Route::get('/schedule', function () {
            return view('dashboards.facility.schedule');
        })->name('facility.schedule');
        Route::get('/gallery', function () {
            return view('dashboards.facility.gallery');
        })->name('facility.gallery');
        Route::get('/reviews', function () {
            return view('dashboards.facility.reviews');
        })->name('facility.reviews');
        Route::get('/profile', function () {
            return view('dashboards.facility.profile');
        })->name('facility.profile');
    });

    // Vendor Dashboard
    Route::prefix('vendor')->middleware(['role:vendor'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboards.vendor.dashboard');
        })->name('vendor.dashboard');
        Route::get('/shop-manager', function () {
            return view('dashboards.vendor.shop-manager');
        })->name('vendor.shop-manager');
        Route::get('/profile', function () {
            return view('dashboards.vendor.profile');
        })->name('vendor.profile');
    });

    // Admin Dashboard
    Route::prefix('admin')->middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboards.admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/users', function () {
            return view('dashboards.admin.users');
        })->name('admin.users');
        Route::get('/content', function () {
            return view('dashboards.admin.content');
        })->name('admin.content');
        Route::get('/payments', function () {
            return view('dashboards.admin.payments');
        })->name('admin.payments');
        Route::get('/reports', function () {
            return view('dashboards.admin.reports');
        })->name('admin.reports');
    });
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->middleware('redirect.based.on.role')->name('home');

Route::get('/facilities', function () {
    return view('public.facilities');
})->name('facilities');

Route::get('/trainers', function () {
    return view('public.trainers');
})->name('trainers');

Route::get('/shop', function () {
    return view('public.shop');
})->name('shop');

Route::get('/events', function () {
    return view('public.events');
})->name('events');
