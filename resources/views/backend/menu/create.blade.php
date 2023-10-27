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
                                        <form action="{{url('backend/menu/store')}}" class="form-control" method="POST" enctype="multipart/form-data">
                                        	{{csrf_field()}}
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="img_menu" name="img_menu">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Price</label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Isi Price Anda">
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1">Ingredients</label>
                                                <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Isi Ingredients Anda">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Isi name Anda">
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