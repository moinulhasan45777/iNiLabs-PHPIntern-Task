<?php 
use Illuminate\Support\Facades\Route;
use App\Models\todos;
use Illuminate\Http\Request;
use App\Http\Controllers\TodosController;

Route::apiResource('todos', TodosController::class);

Route::get('/todos', function () {
    return todos::all();
});

?>