<?php 

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminUserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes pour les jeux vidéo
    Route::get('/games', [GameController::class, 'index'])->name('games.index');
    Route::get('/games/create', [GameController::class, 'create'])->name('games.create');
    Route::post('/games', [GameController::class, 'store'])->name('games.store');
    Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
    Route::get('/games/{game}/edit', [GameController::class, 'edit'])->name('games.edit');
    Route::put('/games/{game}', [GameController::class, 'update'])->name('games.update');
    Route::delete('/games/{game}', [GameController::class, 'destroy'])->name('games.destroy');
    Route::get('/games/{game}/delete', [GameController::class, 'delete'])->name('games.delete'); 
    Route::post('/games/deleteAll', [GameController::class, 'deleteAll'])->name('games.deleteAll');
});

Route::get('/assign-admin-role/{userId}', function ($userId) {
    $user = User::find($userId);
    if ($user) {
        $user->assignRole('admin');
        return 'Rôle admin assigné à l\'utilisateur avec ID ' . $userId;
    }
    return 'Utilisateur non trouvé';
});

Route::get('/assign-user-role/{userId}', function ($userId) {
    $user = User::find($userId);
    if ($user) {
        $user->assignRole('user');
        return 'Rôle user assigné à l\'utilisateur avec ID ' . $userId;
    }
    return 'Utilisateur non trouvé';
});

// Route temporaire pour afficher la liste des utilisateurs
Route::get('/users', function () {
    $users = User::all();
    return response()->json($users);
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});