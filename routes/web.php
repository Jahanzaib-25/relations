<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\senemailController;
use App\Http\Controllers\sendMailJobController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/send-mail',[senemailController::class,'sendMail']);
route::get('mail-send',[sendMailJobController::class,'index']);