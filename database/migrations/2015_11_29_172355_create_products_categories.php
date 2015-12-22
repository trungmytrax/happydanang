<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsCategories extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products_categories', function (Blueprint $table) {
			if (!Schema::hasTable('products_categories')) {
				$table->increments('id');
				$table->string('character', 200);
				$table->string('thumbnail', 200);
			}
		});
		Schema::create('products_detail', function (Blueprint $table) {
			if (!Schema::hasTable('products_detail')) {
				$table->increments('id');
				$table->integer('id_products_categories');
				$table->string('title', 200);
				$table->string('description', 500);
				$table->string('price', 500);
			}
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		//
	}
}
