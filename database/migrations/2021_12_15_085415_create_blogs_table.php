<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            //$tqable->unsigned@igInteger('user id');
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnDelete();
            $table->string('tittle');
            $table->longtext('contents');
            $table->string('image')->nullable();
            $table->integer('views')->default(0);
            $table->string('description');
            $table->timestamps();

            //$table->foreign('user_id')->on('users)->references('id')->onDe;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
