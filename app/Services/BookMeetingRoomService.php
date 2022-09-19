<?php

namespace App\Services;

use App\Models\BookMeetingRoom;

class BookMeetingRoomService
{
    public function validateDates($data)
    {
        return BookMeetingRoom::where(
            fn ($q) => $q->whereBetween('meeting_date_start', [$data["meeting_date_start"],      $data["meeting_date_end"]])
                ->orWhereBetween('meeting_date_end', [$data["meeting_date_start"],      $data["meeting_date_end"]])
                ->orWhere(
                    fn ($q) => $q->where('meeting_date_start', '<',      $data["meeting_date_start"])
                        ->where('meeting_date_end', '>',      $data["meeting_date_end"])
                )
        )->get();
    }

    public function diffDates($date, $date2)
    {
        $startDateToObject = new \DateTime($date);
        $endDateToObject = new \DateTime($date2);
        $diffDate = $startDateToObject->diff($endDateToObject);
        return $diffDate->format("%h");
    }
}
