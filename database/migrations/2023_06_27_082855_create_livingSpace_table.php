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
        Schema::create('living_spaces', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->float('square');
            $table->float('height');
            $table->integer('year');
            $table->integer('floor');
            $table->integer('price');


            $table->unsignedBigInteger('finishing_id')->nullable();
            $table->index('finishing_id', 'living_space_finishing_idx');
            $table->foreign('finishing_id', 'living_space_finishing_fk')->on('finishings')->references('id');

            $table->unsignedBigInteger('room_id')->nullable();
            $table->index('room_id', 'living_space_room_idx');
            $table->foreign('room_id', 'living_space_room_fk')->on('rooms')->references('id');

            $table->unsignedBigInteger('type_id')->nullable();
            $table->index('type_id', 'living_space_type_idx');
            $table->foreign('type_id', 'living_space_type_fk')->on('types')->references('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->index('user_id', 'living_space_user_idx');
            $table->foreign('user_id', 'living_space_user_fk')->on('users')->references('id');

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
        Schema::dropIfExists('livingSpaces');
    }
};
