<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('gender');
            $table->string('birth_date');
            $table->string('client_number');
            $table->string('phone_number');
<<<<<<< HEAD
            $table->double('total_balance'); // 5000 -> 4500

            // Para las direciones de entrega
            $table->string('street');
            $table->string('suburb');
            $table->string('postal_code');
            $table->string('state');
            $table->string('city');

            //  -> abo -> abono
            $table->longText('credits');

            $table->string('rfc', 50);
=======

            $table->double('total_balance');
>>>>>>> 9366250c97e2ca5e25b27dd4723777deaf693485

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
