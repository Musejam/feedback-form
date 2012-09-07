@layout('layouts.show')
@section('content')

<table class='table table-striped'>
<thead>
<tr>
	<th>Content</th>
	<th>Name</th>
	<th>Url</th>
	<th>Genre</th>
	<th>Artist</th>
	<th>Country</th>
</tr>
</thead>
@foreach($show->results as $frm)
<tbody>
<tr>
	<td>{{$frm->ctype}}</td>
	<td>{{$frm->name}}</td>
	<td>{{$frm->url}}</td>
	<td>{{$frm->sgenre}}</td>
	<td>{{$frm->artist}}</td>
	<td>{{$frm->country}}</td>
</tr>
</tbody>
@endforeach
</table>
<div class="links">
{{$show->links()}}
</div>
@endsection