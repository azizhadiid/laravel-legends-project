<?php

use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// Route yang dilindungin supaya tidak sembarang akses
Route::middleware('auth')->group(function () {
    // Jika User Sukses login
    Route::get('/logout', [AuthController::class, 'logout']);
    // Route Home dan khusus user penyewa
    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


    // Route Khusus Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/profile', [AdminController::class, 'show'])->name('admin.profile.show');
    Route::post('/admin/profile', [AdminController::class, 'update'])->name('admin.profile.update');
});


// Route untuk ke Login dan Register dan Forgot Password and logout yang hanya bisa diakses jika belum login
Route::middleware('guest')->group(function () {
    // Route Untuk Login user dan admin
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'store']);

    Route::get('/register', function () {
        return view('register');
    });

    Route::post('/register/create', [UserController::class, 'create']);

    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    });

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::ResetLinkSent
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');

    Route::post('/reset-password', function (Request $request) {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PasswordReset
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    })->name('password.update');
});

// End Routes

// Mencoba Mengirim Email (Just Learn)
Route::get('/send-welcome-mail', function () {
    Mail::to('aaa@gmail.com')->send(new WelcomeMail());
});
