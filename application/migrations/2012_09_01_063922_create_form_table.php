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
		 	$table->string('ctype')->nullable();
		 	$table->string('name')->nullable();
		 	$table->text('url')->nullable();
		 	$table->string('sgenre')->nullable();
		 	$table->string('artist')->nullable();
		 	$table->string('fname')->nullable();
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