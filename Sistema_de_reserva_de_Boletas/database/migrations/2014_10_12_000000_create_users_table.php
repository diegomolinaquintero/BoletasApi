<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        App\Models\User::create(['name' => 'Juan','email' => 'correo@prueba0.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user123')))]);
        App\Models\User::create(['name' => 'Pedro','email' => 'correo@prueba1.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user456')))]);
        App\Models\User::create(['name' => 'Jasinto','email' => 'correo@prueba2.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user123')))]);
        App\Models\User::create(['name' => 'Jose','email' => 'correo@prueba3.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user789')))]);
        App\Models\User::create(['name' => 'Miguel','email' => 'correo@prueba4.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user098')))]);
        App\Models\User::create(['name' => 'Pablo','email' => 'correo@prueba5.com','password' => bcrypt(preg_replace('/\s+/', '', strtolower('user765')))]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
