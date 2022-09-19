<?php

namespace Database\Seeders;

use App\Models\BookMeetingRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookMeetingRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookMeetingRoom::factory(1)->create();

    }
}
