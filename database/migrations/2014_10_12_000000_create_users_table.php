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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('dob');
            $table->integer('gender')->comment('-1: Other, 0: Male, 1: Female');
            $table->integer('payment_method')->comment('0: Credit Card, 1: Paypal');
            $table->string('cvc', 3);
            $table->string('expired_date', 5)->comment('format: mm/YY');
            $table->boolean('term_accepted')->default(false);
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
};
