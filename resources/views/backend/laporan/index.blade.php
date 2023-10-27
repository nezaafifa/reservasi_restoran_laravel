@extends('backend.template.main')
@section('content')
<div class="container-fluid pt-4 px-4">
	<div class="row g-4">
		<div class="col-lg-12">
                        <div class="card bg-white rounded h-100 p-4">
                            <div class="card-title">
                                <h4>Receipt Report Search</h4>
                                <div class="col-md-6">
                                    <a href="{{url('/backend/laporan/cetak?name='.Request::get('name'))}}" target="_blank" class="btn btn-warning">Cetak</a> <br> <br>
                                    <form class="navbar-form navbar-right" role="search" action="{{url('/backend/laporan')}}">
                                        <div class="input-group">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="search by name">
                                            <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>People</th>
                                                <th>Message</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $query)
                                           <tr>
                                            <th>{{$loop->iteration}}</th>
                                            <th>{{$query->id}}</th>
                                            <th>{{$query->name}}</th>
                                            <th>{{$query->email}}</th>
                                            <th>{{$query->phone}}</th>
                                            <th>{{$query->date}}</th>
                                            <th>{{$query->time}}</th>
                                            <th>{{$query->people}}</th>
                                            <th>{{$query->message}}</th>
                                           </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        </div>
                        <!-- /# card -->
	</div>
</div>
@endsection