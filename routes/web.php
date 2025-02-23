<?php

use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuanganUserController;
use App\Http\Controllers\SewaRuanganController;
use App\Http\Controllers\AdminSewaRuanganController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

// Route yang dilindungin supaya tidak sembarang akses
Route::middleware('auth')->group(function () {
  // Untuk Logout
  Route::get('/logout', [AuthController::class, 'logout']);
  // Route Home dan khusus user penyewa
  Route::get('/home', [HomeController::class, 'index']);
  // Route Untuk Update Profile User
  Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
  Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
  // Route Melakukan penyewaan
  Route::get('/sewa', [SewaRuanganController::class, 'index'])->name('sewa.index');
  Route::get('/sewa/{id}', [SewaRuanganController::class, 'create'])->name('sewa.create');
  Route::post('/sewa/{id}', [SewaRuanganController::class, 'store'])->name('sewa.store');
  Route::get('/history', [SewaRuanganController::class, 'history'])->name('sewa.history');
  // Route untuk pergi ke ruangan
  Route::get('/ruangan', [RuanganUserController::class, 'index'])->name('ruangan.user.index');
  Route::get('/ruangan/detail/{id}', [RuanganUserController::class, 'show'])->name('ruangan.user.detail');


  // Route Khusus Admin
  Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.index');
  // Route Untuk Update Profile Admin
  Route::get('/admin/profile', [AdminController::class, 'show'])->name('admin.profile.show');
  Route::post('/admin/profile', [AdminController::class, 'update'])->name('admin.profile.update');
  // Route Upload Data Ruangan
  Route::get('/admin/ruangan', [RuanganController::class, 'index'])->name('ruangan.index'); // Menampilkan semua ruangan
  Route::get('/admin/ruangan/create', [RuanganController::class, 'create'])->name('ruangan.create');
  Route::post('/admin/ruangan/upload', [RuanganController::class, 'store'])->name('ruangan.store'); // Menyimpan ruangan
  Route::get('/admin/ruangan/edit/{id}', [RuanganController::class, 'edit'])->name('ruangan.edit'); // Form edit ruangan
  Route::post('/admin/ruangan/update/{id}', [RuanganController::class, 'update'])->name('ruangan.update'); // Update ruangan
  Route::delete('/admin/ruangan/delete/{id}', [RuanganController::class, 'destroy'])->name('ruangan.destroy'); // Hapus ruangan
  // Route Untuk Verifikasi penyewa ruangan
  Route::get('/admin/sewa', [AdminSewaRuanganController::class, 'index'])->name('admin.sewa.index');
  Route::post('/admin/sewa/{id}/verifikasi', [AdminSewaRuanganController::class, 'verifikasi'])->name('admin.sewa.verifikasi');
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
