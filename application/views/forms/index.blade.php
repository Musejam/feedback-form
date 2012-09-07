@layout('layouts.form')
	@section('content')
	@if($errors->has())
	<ul>
		{{ $errors->first('name','<li>:message</li>') }}
		{{ $errors->first('url','<li>:message</li>') }}
		{{ $errors->first('genre','<li>:message</li>') }}
		{{ $errors->first('artist','<li>:message</li>') }}
	</ul>
	@endif
	 {{Form::open('forms/success','POST')}}

	<div id="main_container">
	<div id="header">
	<div id="logo" class="radio"></div>

	</div>
	  <div id="Select">Select Content Type:-
	    {{Form::radio('radio','song',array('checked'=>'checked'))}}
	    {{Form::label('song','Song')}}
	    {{Form::radio('radio','video')}}
	    {{Form::label('video','Video')}} 
	    {{Form::radio('radio','event')}}
	    {{Form::label('event','Event')}}
	    
	  </div>
	  <div id="row1_cont">
	    <div id="name_container">Name :</div>
	    <div id="name_txt_container">
	      
	      {{Form::text('name', Input::old('name'))}}
	    </div>
	  </div>
	  <div id="row2_cont">
	    <div id="url_container">Enter Song Url :</div>
	    <div id="url_txt_container">
	      {{Form::text('url', Input::old('url'))}}
	    </div>
	    OR
           {{Form::file('file')}}
	  </div>
	  <div id="row3_cont">
	  <div id="genre_name_cont">Enter Song Genre :</div>
	  <div id="event_tags">
	  {{Form::text('genre', Input::old('genre'))}}</div>
	  
	  </div>
	  <div id="row4_cont">
	 <div id="artist_name_cont"> Enter Artist :</div>
	  <div id="artists_cont">
	  {{Form::text('artist', Input::old('artist'))}}</div>
	  </div>
	  <div id="row5_cont">
	   <div id="countryradio_cont">
	  
	    {{Form::radio('country','indian',array('checked'=>'checked'))}}
	    {{Form::label('country','Indian')}}
	    {{Form::radio('country','international')}}
	    {{Form::label('country','International')}} 
	    {{Form::radio('country','both')}}
	    {{Form::label('country','Both')}}
	    
	  </div>
	  </div>
	  <div id="row6_cont">  {{Form::submit('Add Recommandation',array('class'=>'btn'))}}</div>
	  <div id="row7_cont"> {{HTML::link_to_route('show',"Previous Recommandations")}} </div>
	</div>
	  {{Form::close()}}
	  



	@endsection
