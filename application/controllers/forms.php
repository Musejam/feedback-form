<?php

class Forms_Controller extends Base_Controller
{
	public $restful=true;
	public function get_index()
		{
			return View::make('forms.index')
						 ->with('title','Recommandation Form'); 
		}
	public function post_success()
		{
			$validation=form::validate(Input::all());
			if($validation->fails())
			{
				return Redirect::to_route('forms')
			                     ->with_errors($validation)
			                     ->with_input();
			}
			else
			{
				$input = Input::all();
        		$extension = File::extension($input['file']['name']);
       			$directory = path('public').'uploads/';
        		$filename = sha1(time()).".{$extension}";
 				$upload_success = Input::upload('file', $directory, $filename);

				form::create(array(
					  'content_type'=>Input::get('radio'),
			          'name'=>Input::get('name'),
			          'url'=>Input::get('url'),
			          'genre'=>Input::get('genre'),
			          'artist'=>Input::get('artist'),
			          'file_name'=>Input::get('file'),
			          'country'=>Input::get('country')
					));
		        
		    	return Redirect::to_route('forms')
		                         ->with('message','*Recommandation Successfully Added');
			}
		}
	public function get_show()
		{
			$per_page=5;
			$pg=form::paginate($per_page);
			return View::make('forms.show')
						 ->with('title','Previous Recommandations')
						 ->with('show',$pg);
		}
}
?>