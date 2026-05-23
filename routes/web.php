<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/debug-auth', function() {
    return [
        'db' => DB::connection()->getDatabaseName(),
        'user_exists' => \App\Models\User::where('email', 'admin@digosoft.id')->exists(),
        'all_users' => \App\Models\User::pluck('email'),
        'app_url' => config('app.url'),
    ];
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('welcome');
})->name('features');

Route::get('/tutorial', function () {
    return view('welcome');
})->name('tutorial');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('blog/check-slug', [AdminBlogController::class, 'checkSlug'])->name('blog.checkSlug');
        Route::resource('blog', AdminBlogController::class);
    });
});

require __DIR__.'/auth.php';
