<?php

class Recommendations_Controller extends Base_Controller
{
	public $restful=true;
	public function get_index()
	{
		return View::make('recommendations.index')->with('title','Recommandation Form'); 
	}
	public function post_success()
	{
		$validation=recommendation::validate(Input::all());
		
		if($validation->fails())
		{
			return Redirect::to_route('recommendations')->with_errors($validation)->with_input();
		}
		else
		{
			$input = Input::all();
        	$extension = File::extension($input['file']['name']);
       		$directory = path('public').'uploads/';
        	$filename = sha1(time()).".{$extension}";
        	if($extension)
        	{
 			$upload_success = Input::upload('file', $directory, $filename);

			recommendation::create(array(
					  'content_type'=>Input::get('radio'),
			          'name'=>Input::get('name'),
			          'url'=>Input::get('url'),
			          'genre'=>Input::get('genre'),
			          'artist'=>Input::get('artist'),
			          'filename'=>$filename,
			          'country'=>Input::get('country')
			));
		     
		    return Redirect::to_route('recommendations')->with('message','*Recommandation Successfully Added');
			}
			else
			{
				recommendation::create(array(
					  'content_type'=>Input::get('radio'),
			          'name'=>Input::get('name'),
			          'url'=>Input::get('url'),
			          'genre'=>Input::get('genre'),
			          'artist'=>Input::get('artist'),
			          'country'=>Input::get('country')
			    ));
				return Redirect::to_route('recommendations')->with('message','*Recommandation Successfully Added');
			}
		}
	}
	public function get_show()
	{
		$per_page=5;
		$pg=recommendation::paginate($per_page);
		return View::make('recommendations.show')->with('title','Previous Recommandations')->with('show',$pg);
	}
}