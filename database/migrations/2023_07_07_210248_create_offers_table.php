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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("b24_contact_id");
            $table->unsignedBigInteger("b24_deal_id");
            $table->unsignedBigInteger("b24_manager_id");
            $table->string("manager");
            $table->string("position");
            $table->string("phone");
            $table->string("avatar");
            $table->string("status");
            $table->date("date_end");
            $table->date("createAt");
            $table->string('url_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
