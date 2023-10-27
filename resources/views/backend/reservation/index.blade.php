@extends('backend.template.main')
@section('content') 
   <div class="container">
    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Tampilan Reservations</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">People</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($reservation as $data)
                                            <tr>
                                                    <th scope="row">{{$data->id}}</th>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->phone}}</td>
                                                    <td>{{$data->date}}</td>
                                                    <td>{{$data->time}}</td>
                                                    <td>{{$data->people}}</td>
                                                    <td>{{$data->message}}</td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{url('/backend/reservation/edit/'.$data->id)}}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="{{url('/backend/reservation/destroy/'.$data->id)}}" class="text-danger"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection