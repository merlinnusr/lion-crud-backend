<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMeetingRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'meeting_date_start',
        'meeting_date_end',
        'meeting_room_id',
    ];
}
