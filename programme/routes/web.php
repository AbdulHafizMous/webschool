<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;


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
    return view('home');
});
  
Route::get('admhome', function () {
    return view('admhome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('login', function () {
    return view('login');
});




Route::get('saisie_nt', function () {
    return view('saisie/saisie_nt');
});
Route::get('tab_saisie', [myController::class, 'tsaisie']);
Route::get('tab_saisiesave/{an}/{sess}/{c}/{s}/{g}/{id_type}/{code_matiere}/{nom_type}/{nom_matiere}', [myController::class, 'tsaisiesave']);


Route::get('modif_nt', function () {
    return view('modifier/modif_nt');
});
Route::get('tab_modif', [myController::class, 'tmodif']);
Route::get('tab_modifsave/{an}/{sess}/{c}/{s}/{g}/{id_type}/{code_matiere}', [myController::class, 'tmodifsave']);


Route::get('cond', function () {
    return view('conduite/cond');
});
Route::get('tab_cond', [myController::class, 'tcond']);
Route::get('tab_condsave/{an}/{sess}/{c}/{s}/{g}', [myController::class, 'tcondsave']);


Route::get('moyenne', function () {
    return view('moyenne/moyenne');
});
Route::get('tab_moy', [myController::class, 'tmoy']);


Route::get('stat', function () {
    return view('statistique/stat');
});
Route::get('statnts', function () {
    return view('statistique/statnts');
});
Route::get('tab_statnts', [myController::class, 'tstatnts']);




Route::get('validan', function () {
    return view('valider/van');
});
Route::get('van_save', [myController::class, 'van_save']);


Route::get('validsess', function () {
    return view('valider/vsess');
});
Route::get('vsess_save/{sess}', [myController::class, 'vsess_save']);

Route::get('bull', function () {
    return view('bulletin/bull');
});
Route::get('tab_bull', [myController::class, 'tbull']);
Route::get('bullfile/{sess}/{mat}', [myController::class, 'bfile']);


Route::get('pdf_bull/{sess}/{mat}', [myController::class, 'pdf_bull']);
Route::get('pdf_stat', [myController::class, 'pdf_stat']);


Route::get('myurl', [myController::class, 'index']);
Route::get('testo', function () {
    return view('bulletin/bull_a_md');
});