<?php

use Illuminate\Database\Migrations\Migration;

class UserCommentArticle extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment', function($table)
        {
            $table->increments('comment_id');
            $table->integer('comment_article_id');
            $table->string('detail_comment');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop('comment');
	}

}