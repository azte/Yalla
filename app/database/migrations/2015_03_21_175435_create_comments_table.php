<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id');
            $table->string('commenter');
            $table->string('email');
            $table->text('comment');
            $table->timestamps();
        });	//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
