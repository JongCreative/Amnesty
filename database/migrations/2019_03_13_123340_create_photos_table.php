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
            $table->text('descr');
            $table->string('src');
            $table->string('exposure');
            $table->boolean('flits');
            $table->string('camera_brand');
            $table->string('brand_model');
            $table->date('capture_time');
            $table->string ('focal');
            $table->string ('aperture');
            $table->unsignedBigInteger('series_id')->unsigned()->index();
            $table->unsignedBigInteger('user_id')->unsigned()->index();

            // $table->foreign('series_id')
            //         ->references('id')
            //         ->on('series');
                    
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
