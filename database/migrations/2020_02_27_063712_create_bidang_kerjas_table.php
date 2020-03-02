<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_kerja', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('abbr');//Abbreviation
            $table->longtext('description');
            $table->string('logo_img');
            $table->string('chief_name');
            $table->string('chief_img_path');
            $table->string('vice_name');
            $table->string('vice_img_path');
            $table->string('staff_name')->default("-");
            $table->string('staff_img_path')->default("-");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidang_kerja');
    }
}
