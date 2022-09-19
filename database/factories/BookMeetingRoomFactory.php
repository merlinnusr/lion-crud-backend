<?php

namespace Database\Factories;

use App\Models\MeetingRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookMeetingRoom>
 */
class BookMeetingRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'meeting_date' => now(),
            'meeting_room_id' => MeetingRoom::first()->id
        ];
    }
}
