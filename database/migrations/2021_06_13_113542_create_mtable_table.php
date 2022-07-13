<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtableTable extends Migration
{
 
    public function up()
    {
        Schema::create('mtable', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('mtable');
    }
}
