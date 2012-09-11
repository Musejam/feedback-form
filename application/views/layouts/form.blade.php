<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
		{{HTML::script('js/jquery.js')}}
		{{HTML::script('js/form.js')}}
		{{HTML::style('css/style.css')}}
</head>
<body>
	@if(Session::has('message'))
		<p style="color:green;margin-left:500px">{{Session::get('message')}}</p>
	@endif
	@yield('content')
</body>
</html>