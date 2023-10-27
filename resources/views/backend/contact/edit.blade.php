@extends('backend.template.main')
@section('content')
<div class="container">
	<div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Transaksi</h4>
                                        <form action="{{url('/backend/contact/update/'.$transaksi->id)}}" class="form-control" method="POST">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Isi name Anda" value="{{$transaksi->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Isi email Anda" value="{{$transaksi->email}}">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Price</label>
                                                <select class="form-control" id="id_jenis" name="id_jenis">
                                                <option>--pilih--</option>
                                                @foreach ($menu as $data)
                                                <option @if ($data->id_menu==$barang->id_menu) selected="" @endif value="{{$data->id_menu}}">{{$data->price}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" placeholder="Isi date Anda" value="{{$transaksi->date}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Time</label>
                                                <input type="time" class="form-control" id="time" name="time" placeholder="Isi time Anda" value="{{$transaksi->time}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
@endsection