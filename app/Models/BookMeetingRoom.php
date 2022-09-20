<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMeetingRoom extends Model
{
    use HasFactory;
    // protected $with = ['meeting_rooms'];
    protected $fillable = [
        'meeting_date_start',
        'meeting_date_end',
        'meeting_room_id',
    ];
    public function meeting_rooms()
    {
        return $this->belongsTo(MeetingRoom::class,'meeting_room_id', 'id');
    }
}
