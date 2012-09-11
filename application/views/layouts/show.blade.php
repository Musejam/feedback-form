<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>
{{HTML::script('js/bootstrap.js')}}
{{HTML::style('css/bootstrap.css')}}

</head>
<body>
	<div id="logo" class="img-circle"></div>
@yield('content')
		
</body>
</html>