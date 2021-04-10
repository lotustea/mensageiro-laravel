<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('client')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('users', 'App\Http\Controllers\Api\UserController');

Route::middleware('auth:api')->get('users', function (Request $request){
    return User::where('id', auth()->user()->id);
});

Route::get('envio-email-job', function(){
    \App\Jobs\MailJob::dispatch()->delay(now()->addSeconds('15'));
});

Route::get('envio-email-notification', function(){
    \Illuminate\Support\Facades\Notification::route('mail', 'chillout1manager@gmail.com')
        ->notify(new \App\Notifications\MailNotification());
});
