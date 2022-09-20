<?php

use App\Http\Controllers\BookMeetingRoomController;
use App\Http\Controllers\MeetingRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/meeting_room/book', [BookMeetingRoomController::class, 'all']);
Route::post('/meeting_room/book', [BookMeetingRoomController::class, 'book']);
Route::put('/meeting_room/book/{bookMeetingRoom}', [BookMeetingRoomController::class, 'change']);
Route::delete('/meeting_room/book/{bookMeetingRoom}', [BookMeetingRoomController::class, 'delete']);

Route::apiResource('meeting_room', MeetingRoomController::class);