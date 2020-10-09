<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home1');
});
Route::view('/docreg','docreg');
Route::post('/docreg','docreg@store');
Route::view('/userreg','usereg');
Route::post('/userreg','usereg@store');
Route::view('/userlog','userlogin');
Route::view('/doclog','doclogin');
Route::view('/userdash','userdash');
Route::view('/docdash','docdash');
//Route::get('/userdash','docreg@display');


//user login
Route::post('user_login', 'usereg@login');
Route::post('doc_login', 'docreg@login');

//user logout

Route::get('user/logout', function () {
    Session::forget('user');
    Session::forget('idu');
    return redirect('/userlog');
});

//doctor logout

Route::get('doc/logout', function () {
    Session::forget('doc');
    Session::forget('idd');
    return redirect('/doclog');
});


//user search
Route::post('search', 'usereg@search');


//view more doctor
Route::get('view/{id}', 'usereg@more');

//Appointment
Route::get('view/appoint/{id}', 'docreg@appoint');

//view Patients

Route::view('patient', 'patients');
Route::get('patient', 'docreg@patient');

//user profile

Route::get('/profile/{id}','usereg@profile');

//doctor profile

Route::get('/myprofile/{id}','docreg@display');

//doctor dash display
Route::get('/docdash','docreg@display1');

//complete appointment
Route::get('comp/{id}','docreg@comp');

//home
Route::view('/home','index');
Route::view('/home1','home1');


//change user image

Route::get('/userchange/{id}','usereg@change');
Route::post('/update1/{id}','usereg@upphoto');

//change doctor image
Route::get('/docchange/{id}','docreg@change');
Route::post('/update2/{id}','docreg@upphoto');

