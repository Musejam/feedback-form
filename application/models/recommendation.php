<?php
	class Recommendation extends Eloquent	
	{

		public static $table='form';
		public static $rules=array(
							'name'=>'required|min:2',
							'url'=>'required|min:2',
							'genre'=>'required|min:2',
							'artist'=>'required|min:2',
							);
		public static function validate($data)
		{
				return Validator::make($data, static::$rules);
		}
	}
