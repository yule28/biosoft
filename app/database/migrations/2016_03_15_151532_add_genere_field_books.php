<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenereFieldBooks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function($table){
		    $table->string('gender');
            $table->timestamps();
            $table->unique('title');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books', function($table){
		    $table->dropColumn(array('gender', 'created_at', 'updated_at'));
            $table->dropUnique('books_title_unique');
		});
	}

}
