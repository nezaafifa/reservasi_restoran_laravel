@extends('backend.template.main')
@section('content') 
   <div class="container">
    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Tampilan Chef</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Img Chef</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Profesi</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($chef as $data)
                                            <tr>
                                                    <th scope="row">{{$data->id}}</th>
                                                    <td>
                                                         <img src="{{asset('storage/'.$data->img_chef)}}" width="200">
                                                    </td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->profesi}}</td>
                                                    <td>{{$data->description}}</td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="{{url('/backend/chef/edit/'.$data->id)}}" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="{{url('/backend/chef/destroy/'.$data->id)}}" class="text-danger"><i class="ti-trash"></i></a></li>
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