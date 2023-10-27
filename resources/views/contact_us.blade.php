@extends('template.layout')
@section('title','Contact Us')
@section('content')
<div class="container mt-4">
	<h1 class="center hire-title">Contact Us</h1>
	<h3 class="center" style="font-family: Poppins;">Contact Us our admin if anyone asks</h3>
	<div class="row mt-5">
		<div class="col-lg-4">
			<div class="address">
				<h4>Location:</h4>
				<p>Jln. kelet Keling Jepara Rt.04 Rw.01</p>
			</div>
			<div class="open-hours">
				<h4>Open Hours:</h4>
				<p>
					Monday - Saturday:<br>
					11.00 AM -23.00 PM
				</p>
			</div> 
			<div class="email">
				<h4>Email:</h4>
				<p>foreignresto@gmail.com</p>
			</div>
			<div class="phone">
				<h4>Phone:</h4>
				<p>089504843524</p>
			</div>
		</div>
		<div class="col-lg-8">
			<form action="{{url('/backend/contact/store')}}" method="POST">
				{{csrf_field()}}
				<div class="col-lg-12">
    				<label for="name">Name</label>
      				<input type="text" class="form-control" placeholder="Your name" id="name" name="name">
    			</div>
    			<div class="col-lg-12">
    				<label for="email">Email</label>
      				<input type="text" class="form-control" placeholder="Your email" id="email" name="email">
    			</div>
    			<div class="col-lg-12">
    				<label for="subject">Subject</label>
      				<input type="text" class="form-control" placeholder="Your subject" id="subject" name="subject">
    			</div>
    			<div class="col-lg-12">
    					<label for="message">message</label>
    					<textarea class="form-control" placeholder="Your message" id="message" name="message"></textarea>
    				</div>
    			<button style="margin-left: 12px;" type="submit" class="btn btn-green mt-4">Send Message</button>
			</form>
		</div>
	</div>
</div>
@endsection