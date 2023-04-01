<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TareaController;
Route::get('/', function () {
    return redirect('/paciente/welcome');
});


Route::middleware(['auth'])->group(function () {
    Route::get('paciente/{tarea}/ver', [TareaController::class, 'show'])->name('paciente.show');
    Route::get('paciente/registrar', [TareaController::class, 'create'])->name('paciente.create');
    Route::post('paciente/guardar', [TareaController::class, 'store'])->name('paciente.store');
    Route::get('paciente/listar', [TareaController::class, 'index'])->name('paciente.index');
    Route::get('paciente/{tarea}/editar', [TareaController::class, 'edit'])->name('paciente.edit');
    Route::put('paciente/{tarea}/actualizar', [TareaController::class, 'update'])->name('paciente.update');
    Route::delete('paciente/{tarea}/eliminar', [TareaController::class, 'destroy'])->name('paciente.destroy');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('paciente.index');
    })->name('dashboard');
});

Route::get('paciente/welcome', function () {
    return view('paciente.welcome');
});
Route::get('/perfil/editar', function () {
    return Inertia::render('Profile/Edit');
})->name('profile.edit');

Route::post('/logout', function () {
    auth()->logout();
    return view('paciente.welcome');
})->name('logout');




