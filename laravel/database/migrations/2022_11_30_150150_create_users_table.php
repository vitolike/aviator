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
            $table->string("name")->nullable();
            $table->string("mobile")->nullable();
            $table->string("email");
            $table->string("promocode")->nullable();
            $table->string("country")->nullable();
            $table->string("gender")->nullable();
            $table->string("currency")->nullable();
            $table->string("isadmin")->nullable();
            $table->string("password");
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
