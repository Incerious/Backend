<?php
use Illuminate\Http\Request;
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');


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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['api']], function(){
});

// member
Route::get('get-member', 'ApiController@getmember');
Route::get('get-member1/{id}', 'ApiController@getmember1');
Route::post('pst-member', 'ApiController@postmember');
Route::delete('delmember', 'ApiController@postmember');
// Peminjaman
Route::get('gtpeminjaman/{id}', 'ApiController@getpeminjaman');
Route::post('pstpeminjaman', 'ApiController@postpeminjaman');
// buku
Route::get('getbuku', 'ApiController@fuckbuku');
