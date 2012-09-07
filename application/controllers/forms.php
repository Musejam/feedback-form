<?php

class Forms_Controller extends Base_Controller{
	
	public $restful=true;
	
	public function get_index()
	{
		return View::make('forms.index')->with('title','Recommandation Form'); 
	}

	public function post_success()
	{
		$validation = form::validate(Input::all());
		
		if($validation->fails())
		{
			return Redirect::to_route('forms')->with_errors($validation)->with_input();
		}
		else
		{
			form::create(array(
				'ctype' => Input::get('radio'),
				'name' => Input::get('name'),
				'url' => Input::get('url'),
				'sgenre' => Input::get('genre'),
				'artist' => Input::get('artist'),
				'fname' => Input::get('file'),
				'country' => Input::get('country')
				));
		        
			return Redirect::to_route('forms')->with('message','Recommandation Successfully Added');
		}
	}
	
	public function get_show(){
		$per_page=5;
		
		$pg=form::paginate($per_page);
		
		return View::make('forms.show')->with('title','Previous Recommandations')->with('show',$pg);
	}
}