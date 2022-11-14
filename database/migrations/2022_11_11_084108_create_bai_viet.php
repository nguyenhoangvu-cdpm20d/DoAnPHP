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
        Schema::create('Bai_Viet', function (Blueprint $table) {
            $table->id();
            $table->String('Title')->nullable();
            $table->longText('noidung')->nullable();
            $table->String('TenTK')->nullable();
            $table->String('image')->nullable();
            $table->date('ngaydang')->nullable();
            $table->integer('loaidovat_id')->nullable();
            $table->integer('loaibaiviet_id')->nullable();
            $table->integer('luotxem')->nullable();
            $table->String('binhluan')->nullable();
            $table->bigInteger('trang_thai')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
