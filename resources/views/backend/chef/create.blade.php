@extends('backend.template.main')
@section('content')
<div class="container">
	<div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- basic form start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Create Menu</h4>
                                        <form action="{{url('/backend/chef/store')}}" class="form-control" method="POST" enctype="multipart/form-data">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <label for="img">Image</label>
                                                <input class="form-control" type="file" id="img_chef" name="img_chef" placeholder="Isi img Anda">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Isi name Anda">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">profesi</label>
                                                <input type="text" class="form-control" id="profesi" name="profesi" placeholder="Isi profesi Anda">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">description</label>
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Isi description Anda">
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