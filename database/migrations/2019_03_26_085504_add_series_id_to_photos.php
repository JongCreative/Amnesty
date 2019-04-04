<?php

use Illuminate\Database\Migrations\Migration;

class AddSeriesIdToPhotos extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	// public function up() {
	// 	Schema::table('photos', function (Blueprint $table) {
	// 		$table->BigInteger('series_id')->unsigned()->nullable();
	// 		$table->foreign('series_id')
	// 			->references('id')
	// 			->on('series');
	// 	});
	// }

	// /**
	//  * Reverse the migrations.
	//  *
	//  * @return void
	//  */
	// public function down() {
	// 	Schema::table('photos', function (Blueprint $table) {
	// 		$table->dropColumn('series_id');
	// 	});
	// }
}
