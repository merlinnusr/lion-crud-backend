<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookMeetingRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'meeting_date',
        'meeting_room_id',
    ];
}
