<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Authentication Routes (Laravel Breeze)
require __DIR__.'/auth.php';

// Custom Authentication Routes
Route::get('/auth/login-cover', [App\Http\Controllers\authentications\LoginCover::class, 'index'])->name('auth.login-cover');
Route::get('/auth/login-basic', [App\Http\Controllers\authentications\LoginBasic::class, 'index'])->name('auth.login-basic');
Route::get('/auth/register-cover', [App\Http\Controllers\authentications\RegisterCover::class, 'index'])->name('auth.register-cover');
Route::get('/auth/register-basic', [App\Http\Controllers\authentications\RegisterBasic::class, 'index'])->name('auth.register-basic');
Route::get('/auth/register-multisteps', [App\Http\Controllers\authentications\RegisterMultiSteps::class, 'index'])->name('auth.register-multisteps');
Route::get('/auth/forgot-password-cover', [App\Http\Controllers\authentications\ForgotPasswordCover::class, 'index'])->name('auth.forgot-password-cover');
Route::get('/auth/forgot-password-basic', [App\Http\Controllers\authentications\ForgotPasswordBasic::class, 'index'])->name('auth.forgot-password-basic');
Route::get('/auth/reset-password-cover', [App\Http\Controllers\authentications\ResetPasswordCover::class, 'index'])->name('auth.reset-password-cover');
Route::get('/auth/reset-password-basic', [App\Http\Controllers\authentications\ResetPasswordBasic::class, 'index'])->name('auth.reset-password-basic');
Route::get('/auth/two-steps-cover', [App\Http\Controllers\authentications\TwoStepsCover::class, 'index'])->name('auth.two-steps-cover');
Route::get('/auth/two-steps-basic', [App\Http\Controllers\authentications\TwoStepsBasic::class, 'index'])->name('auth.two-steps-basic');
Route::get('/auth/verify-email-cover', [App\Http\Controllers\authentications\VerifyEmailCover::class, 'index'])->name('auth.verify-email-cover');
Route::get('/auth/verify-email-basic', [App\Http\Controllers\authentications\VerifyEmailBasic::class, 'index'])->name('auth.verify-email-basic');

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
            return view('content.dashboard.dashboards-analytics');
        })->name('facility.dashboard');
        Route::get('/schedule', function () {
            return view('content.apps.app-calendar');
        })->name('facility.schedule');
        Route::get('/gallery', function () {
            return view('content.apps.app-ecommerce-product-list');
        })->name('facility.gallery');
        Route::get('/reviews', function () {
            return view('content.apps.app-ecommerce-manage-reviews');
        })->name('facility.reviews');
        Route::get('/profile', function () {
            return view('content.pages.pages-profile-user');
        })->name('facility.profile');
    });

    // Vendor Dashboard
    Route::prefix('vendor')->middleware(['role:vendor'])->group(function () {
        Route::get('/dashboard', function () {
            return view('content.apps.app-ecommerce-dashboard');
        })->name('vendor.dashboard');
        Route::get('/shop-manager', function () {
            return view('content.apps.app-ecommerce-product-list');
        })->name('vendor.shop-manager');
        Route::get('/profile', function () {
            return view('content.pages.pages-profile-user');
        })->name('vendor.profile');
    });

    // Admin Dashboard
    Route::prefix('admin')->middleware(['role:admin'])->group(function () {
        Route::get('/dashboard', function () {
            return view('content.dashboard.dashboards-analytics');
        })->name('admin.dashboard');
        Route::get('/users', function () {
            return view('content.apps.app-user-list');
        })->name('admin.users');
        Route::get('/content', function () {
            return view('content.apps.app-ecommerce-category-list');
        })->name('admin.content');
        Route::get('/payments', function () {
            return view('content.apps.app-invoice-list');
        })->name('admin.payments');
        Route::get('/reports', function () {
            return view('content.apps.app-ecommerce-dashboard');
        })->name('admin.reports');
    });
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->middleware('redirect.based.on.role')->name('home');

Route::get('/facilities', function () {
    return view('content.apps.app-ecommerce-product-list');
})->name('facilities');

Route::get('/trainers', function () {
    return view('content.apps.app-user-list');
})->name('trainers');

Route::get('/shop', function () {
    return view('content.apps.app-ecommerce-product-list');
})->name('shop');

Route::get('/events', function () {
    return view('content.apps.app-calendar');
})->name('events');

// Search Routes
Route::get('/search', [App\Http\Controllers\SearchController::class, 'results'])->name('search.results');

// Popular tags API for smart search bar
Route::get('/api/popular-tags', [App\Http\Controllers\front_pages\Landing::class, 'getPopularTags'])->name('api.popular-tags');
