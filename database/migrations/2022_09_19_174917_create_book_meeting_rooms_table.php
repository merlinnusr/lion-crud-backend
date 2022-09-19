<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_meeting_rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meeting_room_id');
            $table->dateTime('meeting_date_start');
            $table->dateTime('meeting_date_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_meeting_rooms');
    }
};
