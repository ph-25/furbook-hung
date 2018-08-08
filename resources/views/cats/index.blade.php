@extends('layouts.master')
@section('header')
	@if(isset($breed))
		<a href="{{url('/')}}" >Back to the overview</a>
	@endif
	<h2>
	  All @if (isset($breed)) {{$breed->name}} @endif Cats
	  <a href="{{url('cats/create')}}"class="btn btn-primary pull-right">
	  	Add a new cat
	  </a>
	</h2>
	  
@stop
@section('content')


 <table class="table table-border">
 	<thead>
 		<th>ID</th>
 		<th>Name</th>
 		<th>Birthday</th>
 		<th>Breed name</th>
 		<th colspan="2">Action</th>
 	</thead>
 	<tbody>
 		@foreach ($meo as $cat)
 		<tr>
 			<td>{{$cat->id}}</td>
 			<td>{{$cat->name}}</td>
 			<td>{{$cat->date_of_birth}}</td>
 			<td>{{$cat->breed->name}}</td>
 			<td><a class="btn btn-warning" href="{{ url('cats/'.$cat->id.'/edit') }}">Edit</a></td>
 			<td><a class="btn btn-danger" href="{{ url('cats/'.$cat->id.'/delete') }}">Delete</a></td>

 		</tr>
 		@endforeach
 	</tbody>
 </table>
@endsection