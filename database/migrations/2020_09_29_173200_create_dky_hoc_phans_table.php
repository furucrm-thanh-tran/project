<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDkyHocPhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dky_hoc_phans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('idLopHP')
                ->constrained('lop_hoc_phans')
                ->onDelete('cascade');

            $table->foreignId('idSV')
                ->constrained('sinh_viens')
                ->onDelete('cascade');
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
        Schema::dropIfExists('dky_hoc_phans');
    }
}
