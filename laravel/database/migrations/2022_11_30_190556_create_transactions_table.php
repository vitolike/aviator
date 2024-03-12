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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string("userid");
            $table->string("platform")->nullable();
            $table->string("transactionno")->nullable();
            $table->string("type")->nullable();
            $table->string("amount");
            $table->string("amount_1")->nullable();
            $table->string("category")->nullable();
            $table->string("remark")->nullable();
            $table->string("status");
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
        Schema::dropIfExists('transactions');
    }
};
