@extends('template.layout')
@section('title','About')
@section('content')
@foreach($about as $data)
<div class="container mt-4">
	<div class="row">
		<div class="col-lg-5" style="background-image: url('Images/about.jpg'); height: auto;">
			<a href=""></a>
		</div>
		<div class="col-lg-7">
			<h1 class="center hire-title mt-4">{{$data->name}}</h1>
			<p>{{$data->description}}</p>
		</div>
	</div>
</div>
@endsection
@endforeach