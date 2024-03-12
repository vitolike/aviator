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
        Schema::create('withdarwals', function (Blueprint $table) {
            $table->id();
            $table->string("account_no");
            $table->string("account_holder_name");
            $table->string("name");
            $table->string("ifsc_code");
            $table->string("upi_id");
            $table->string("mobile_no");
            $table->string("email");
            $table->string("address");
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
        Schema::dropIfExists('withdarwals');
    }
};
