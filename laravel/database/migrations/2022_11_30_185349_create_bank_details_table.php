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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            $table->string("userid");
            $table->string("bankname")->nullable();
            $table->string("accountno")->nullable();
            $table->string("ifsccode")->nullable();
            $table->string("branchname")->nullable();
            $table->string("upi_id")->nullable();
            $table->string("mobile_no")->nullable();
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
        Schema::dropIfExists('bank_details');
    }
};
