<?php
// use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use Lib\Route;

Route::get('/',[HomeController::class, 'index']);
Route::get('/prueba',[HomeController::class, 'prueba']);

Route::get('/send',[LoginController::class, 'send']);
//Auth Login
Route::get('/login', [LoginController::class, 'sesion']);
Route::post('/login', [LoginController::class,'validar']);
Route::get('/cliente', [LoginController::class,'vistaCliente']);
Route::post('/logout', [LoginController::class,'logout']);
Route::post('/contacts', [LoginController::class,'store']);

Route::get('/mensajes', [LoginController::class,'vistaAdmin']);
Route::get('/mensajes/:id',[LoginController::class,'show']);
Route::post('/mensajes/:id/delete', [LoginController::class,'destroy']);




//-----start the routing-----------------------
Route::dispatch();
