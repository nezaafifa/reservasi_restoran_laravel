@extends('template.layout')
@section('title','Chef')
@section('content')
<div class="container mt-4">
	<h1 class="center hire-title">Chef Profesional</h1>
	<div class="row mt-4">
		@foreach ($chef as $data)
		<div class="col-md-4">
			<div class="card" style="width: 20rem;">
				<img src="{{asset('storage/'.$data->img_chef)}}" class="card-img-top">
				<div class="card-body">
					<h5 class="center hire-title">{{$data->name}}</h5>
					<span style="color: rgba(33, 37, 41, 0.4);">{{$data->profesi}}</span>
					<p>{{$data->description}}</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection