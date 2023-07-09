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
        Schema::create('offer_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("offer_id");
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
            $table->text("cid");
            $table->string("type");
            $table->string("square");
            $table->string("complex");
            $table->string("house");
            $table->text("description");
            $table->json("images");
            $table->boolean("like")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_items');
    }
};
