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
            $table->id(); //integer sin signo incremental
            $table->string('name'); // varchar(256), para mas caract usar text
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();//timestamp es para guardar fechas(sirve para verificar el correo)
            $table->string('password');
            $table->string('avatar');
            $table->rememberToken();
            $table->timestamps(); //created_at updated_at
        });
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
