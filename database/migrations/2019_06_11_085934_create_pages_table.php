<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
  
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('des');
            $table->string( 'meta_keywords');
            $table->text('meta_des');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
