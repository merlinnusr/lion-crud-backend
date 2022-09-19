<?php

namespace App\Http\Controllers;

use App\Models\BookMeetingRoom;
use App\Http\Requests\StoreBookMeetingRoomRequest;
use App\Http\Requests\UpdateBookMeetingRoomRequest;

class BookMeetingRoomController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookMeetingRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function book(StoreBookMeetingRoomRequest $request)
    {
        $data = $request->validated();
        BookMeetingRoom::whereDate('meeting_date', '>=',$data['meeting_date']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookMeetingRoomRequest  $request
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function change(UpdateBookMeetingRoomRequest $request, BookMeetingRoom $bookMeetingRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function delete(BookMeetingRoom $bookMeetingRoom)
    {
        //
    }
}
