<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->integer('puesto');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        App\Models\Boletas::create(['puesto' => 20,'user_id' => 1]);
        App\Models\Boletas::create(['puesto' => 30,'user_id' => 2]);
        App\Models\Boletas::create(['puesto' => 40,'user_id' => 3]);
        App\Models\Boletas::create(['puesto' => 50,'user_id' => 4]);
        App\Models\Boletas::create(['puesto' => 60,'user_id' => 5]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletas');
    }
}
