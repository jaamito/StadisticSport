<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Teams;

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

header('Access-Control-Allow-Origin: https://es.whoscored.com');
header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers", "X-Requested-With, Content-Type, X-Token-Auth, Authorization");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/saveTeam/{idTeam}/{nameTeam}',function(request $request,$idTeam,$nameTeam){

  $team = new Teams();
  $team->idTeam = intval($idTeam);
  $team->nameTeam = $nameTeam;
  $team->save();

    return response()->json(['status'=>'ok']);
});

Route::post('/saveTeam',function(request $request){

    Teams::where('idTeam', '=', $request->idTeam)->delete();
    if($request->nameTeam != null){
      $team = new Teams();
      $team->idTeam   = $request->idTeam;
      $team->nameTeam = $request->nameTeam;
      $team->srcTeam  = $request->srcTeam;
      $team->ratingTeam  = $request->ratingTeam;
      $team->save();
    }


    return response()->json(['status'=>'ok']);
});
