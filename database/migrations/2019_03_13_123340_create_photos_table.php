<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('descr')->nullable();
            $table->string('src');
            $table->string('exposure')->nullable();
            $table->boolean('flits')->nullable();
            $table->string('camera_brand')->nullable();
            $table->string('brand_model')->nullable();
            $table->date('capture_time')->nullable();
            $table->string ('focal')->nullable();
            $table->string ('aperture')->nullable();
            $table->bigInteger('user_id')->unsigned()->index()->default(0);
                    
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
                    
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
        Schema::dropIfExists('photos');
    }
}
