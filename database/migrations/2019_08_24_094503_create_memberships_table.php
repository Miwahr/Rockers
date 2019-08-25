<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_bin';
            $table->unsignedBigInteger('rocker_id');
            $table->foreign('rocker_id')
                  ->references('id')
                  ->on('rockers')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('band_id');
            $table->foreign('band_id')
                  ->references('id')
                  ->on('bands')
                  ->onDelete('cascade');
            $table->date('start');
            $table->date('finish')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
