<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Authentication Routes (Laravel Breeze)
require __DIR__.'/auth.php';

// Dashboard Routes for Different Roles
Route::middleware(['auth'])->group(function () {
    // General Dashboard Route (redirects based on role)
    Route::get('/dashboard', function () {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('trainer')) {
            return redirect()->route('trainer.dashboard');
        } elseif ($user->hasRole('facility')) {
            return redirect()->route('facility.dashboard');
        } elseif ($user->hasRole('vendor')) {
            return redirect()->route('vendor.dashboard');
        } else {
            return redirect()->route('trainee.dashboard');
        }
    })->name('dashboard');

    // Trainee Dashboard
    Route::prefix('trainee')->middleware(['role:trainee'])->group(function () {
        Route::get('/dashboard', function () {
            return view('content.dashboard.dashboards-analytics');
        })->name('trainee.dashboard');
        Route::get('/bookings', function () {
            return view('content.apps.app-calendar');
        })->name('trainee.bookings');
        Route::get('/schedule', function () {
            return view('content.apps.app-calendar');
        })->name('trainee.schedule');
        Route::get('/profile', function () {
            return view('content.pages.pages-profile-user');
        })->name('trainee.profile');
        Route::get('/messages', function () {
            return view('content.apps.app-chat');
        })->name('trainee.messages');
        Route::get('/community', function () {
            return view('content.apps.app-chat');
        })->name('trainee.community');
    });

    // Trainer Dashboard
    Route::prefix('trainer')->middleware(['role:trainer'])->group(function () {
        Route::get('/dashboard', function () {
            return view('content.dashboard.dashboards-crm');
        })->name('trainer.dashboard');
        Route::get('/schedule', function () {
            return view('content.apps.app-calendar');
        })->name('trainer.schedule');
        Route::get('/clients', function () {
            return view('content.apps.app-user-list');
        })->name('trainer.clients');
        Route::get('/earnings', function () {
            return view('content.apps.app-ecommerce-dashboard');
        })->name('trainer.earnings');
        Route::get('/profile', function () {
            return view('content.pages.pages-profile-user');
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
