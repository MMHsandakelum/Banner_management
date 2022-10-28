<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id("id");
            $table->string("company_id");
            $table->string("website");
            $table->string("email");
            $table->string("title");
            $table->string("description");
            $table->enum("banner_type", ["Header", "side", "footer"]);
            $table->string("category");
            $table->string("amount");
            $table->date("starting_date");
            $table->date("expire_date");
            $table->string("img_path");
            $table->enum("status",["active", "deactive"]);
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
        Schema::dropIfExists('banners');
    }
}