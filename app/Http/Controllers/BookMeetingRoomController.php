<?php

namespace App\Http\Controllers;

use App\Models\BookMeetingRoom;
use App\Http\Requests\StoreBookMeetingRoomRequest;
use App\Http\Requests\UpdateBookMeetingRoomRequest;

class BookMeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookMeetingRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookMeetingRoomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function show(BookMeetingRoom $bookMeetingRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(BookMeetingRoom $bookMeetingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookMeetingRoomRequest  $request
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookMeetingRoomRequest $request, BookMeetingRoom $bookMeetingRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookMeetingRoom $bookMeetingRoom)
    {
        //
    }
}
