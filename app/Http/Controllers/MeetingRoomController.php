<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeetingRoomRequest;
use App\Http\Requests\UpdateMeetingRoomRequest;
use App\Models\BookMeetingRoom;
use App\Models\MeetingRoom;

class MeetingRoomController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['meeting_rooms' => MeetingRoom::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookMeetingRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeetingRoomRequest $request)
    {
        $data = $request->validated();
        return response()->json(
            ['meeting_room' => MeetingRoom::create($data)
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(BookMeetingRoom $bookMeetingRoom)
    {
        return response()->json([
            'meeting_room' => $bookMeetingRoom
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookMeetingRoomRequest  $request
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetingRoomRequest $request, BookMeetingRoom $bookMeetingRoom)
    {
        $data = $request->validated();
        $updatedBookMeetingRoom = tap($bookMeetingRoom)->update($data);
        return response()->json(
            ['meeting_room' => $updatedBookMeetingRoom]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookMeetingRoom $bookMeetingRoom)
    {
        return response()->json(
            ['meeting_room' => $bookMeetingRoom->delete()]
        );
    }
}

