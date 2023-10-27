@extends('template.layout')
@section('title','Menu')
@section('content')
<div class="container mt-4">
	<div class="center hire-title">
		<h2>Check our tasty <span>Menu</span></h2>
	</div>
	<div class="row mt-4">
        @foreach ($menu as $data)
		<div class="col-md-6 mb-4">
            <div class="card">
            	<div class="card-body">
            		<div class="row">
            			<div class="col">
            				<img src="{{asset('storage/'.$data->img_menu)}}" alt class="rounded-circle" style="height: 100px; width: 100px;">
            			</div>
            			<div class="col">
            				<h3 style="overflow: hidden; display: flex; justify-content: space-between; position: relative; font-family: Poppins;">{{$data->name}}</h3>
            			<span style="color: #f0ad4e; " >{{$data->price}}</span>
            			<div class="menu-ingredients" style="font-style: italic; font-size: 14px; font-family: Comic Neue, sans-serif; color: #948c81;">
             		 	{{$data->ingredients}}
            			</div>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
        @endforeach
	</div>
</div>
@endsection