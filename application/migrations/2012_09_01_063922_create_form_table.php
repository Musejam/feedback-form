<?php

class Create_Form_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('form',function($table){
		 	$table->increments('id');
		 	$table->string('content_type')->nullable();
		 	$table->string('name')->nullable();
		 	$table->text('url')->nullable();
		 	$table->string('genre')->nullable();
		 	$table->string('artist')->nullable();
		 	$table->string('filename')->nullable();
		 	$table->string('country')->nullable();
		 	$table->timestamps();
		 });
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('form');
	}

}