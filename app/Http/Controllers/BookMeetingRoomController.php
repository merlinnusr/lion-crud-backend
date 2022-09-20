<?php

namespace App\Http\Controllers;

use App\Models\BookMeetingRoom;
use App\Http\Requests\StoreBookMeetingRoomRequest;
use App\Http\Requests\UpdateBookMeetingRoomRequest;
use App\Services\BookMeetingRoomService;

class BookMeetingRoomController extends Controller
{
    public function all()
    {
        return ok('',BookMeetingRoom::with('meeting_rooms')->get());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookMeetingRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function book(StoreBookMeetingRoomRequest $request)
    {
        $data = $request->validated();


        $diffDates = (new BookMeetingRoomService)->diffDates(
            $data["meeting_date_start"],
            $data["meeting_date_end"]
        ); 

        if ($diffDates >= '2') {
            return server_error(
                'No puedes reservar una sala de juntas por mas de 2 horas',
                []
            );
        }
        $bookedMetingRoom = (new BookMeetingRoomService)->validateDates($data);
        if (!$bookedMetingRoom->isEmpty()) {
            return server_error(
                'Ya hay sala de juntas reservadas en ese horario',
                ['booked_meting_room' => $bookedMetingRoom]
            );
        }
        $bookMeetingRoomCreated  = BookMeetingRoom::create($data);
        if (empty($bookMeetingRoomCreated)) {
            return server_error(
                'No se puede crear el la reservacion',
                []
            );
        }

        return ok('La reservacion de creo con exito', $bookMeetingRoomCreated);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookMeetingRoomRequest  $request
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function change(
        UpdateBookMeetingRoomRequest $request, 
        BookMeetingRoom $bookMeetingRoom)
    {
        $data = $request->validated();
        $diffDates = (new BookMeetingRoomService)->diffDates(
            $data["meeting_date_start"],
            $data["meeting_date_end"]
        ); 
        if ($diffDates >= '2') {
            return server_error(
                'No puedes reservar una sala de juntas por mas de 2 horas',
                []
            );
        }
        $bookedMetingRoom = (new BookMeetingRoomService)->validateDates($data);
        if (!$bookedMetingRoom->isEmpty()) {
            return server_error(
                'Ya hay sala de juntas reservadas en ese horario',
                ['booked_meting_room' => $bookedMetingRoom]
            );
        }
        $updateBookMeetingRoom = tap($bookMeetingRoom)->update($data);
        return ok('La reserservacion se actualizo', BookMeetingRoom::with('meeting_rooms')->find($bookMeetingRoom->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookMeetingRoom  $bookMeetingRoom
     * @return \Illuminate\Http\Response
     */
    public function delete(BookMeetingRoom $bookMeetingRoom)
    {
        return ok('Borrado correctamente',$bookMeetingRoom->delete());
    }
}
