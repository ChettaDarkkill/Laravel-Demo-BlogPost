<?php

use Illuminate\Database\Migrations\Migration;

class CreateArticle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function($table)
        {
            $table->increments('article_id');
            $table->string('title');
            $table->string('about');
            $table->string('details');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('article');
	}

}