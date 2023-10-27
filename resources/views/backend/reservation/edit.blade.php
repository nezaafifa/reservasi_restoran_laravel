@extends('backend.template.main')
@section('content')
<div class="container">
	<div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit Reservations</h4>
                                        <form action="{{url('/backend/reservation/update/'.$reservation->id)}}" class="form-control" method="POST">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Isi name Anda" value="{{$reservation->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Isi Email Anda" value="{{$reservation->email}}">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Isi phone Anda" value="{{$reservation->phone}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" placeholder="Isi date Anda" value="{{$reservation->date}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Time</label>
                                                <input type="time" class="form-control" id="time" name="time" placeholder="Isi time Anda" value="{{$reservation->time}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">People</label>
                                                <input type="text" class="form-control" id="people" name="people" placeholder="Isi people Anda" value="{{$reservation->people}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Message</label>
                                                <input type="text" class="form-control" id="message" name="message" placeholder="Isi message Anda" value="{{$reservation->message}}">
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