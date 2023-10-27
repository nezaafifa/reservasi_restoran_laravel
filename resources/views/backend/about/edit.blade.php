@extends('backend.template.main')
@section('content')
<div class="container">
	<div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Edit About</h4>
                                        <form action="{{url('/backend/about/update/'.$about->id)}}" class="form-control" method="POST">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name" value="{{$about->name}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{$about->description}}">
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