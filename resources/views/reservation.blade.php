@extends('template.layout')
@section('title','Reservation')
@section('content')
<div class="container mt-4">
	<h1 class="center hire-title">Reservations</h1>
	<h3 class="center" style="font-family: Poppins;">please fill out the reservation in advance so you don't have trouble!</h3>
	<div class="row">
		<div class="col">
			<img src="Images/reservation.jpg" style="min-height: 500px; background-size: cover; background-position: center; height: auto;">
		</div>
		<div class="col-md-8">
			<form action="{{url('/backend/reservation/store')}}" method="POST">
				{{csrf_field()}}
				<div class="row" style="margin-left: 30%;">
    				<div class="col-lg-12">
    					<label for="name">Name</label>
      					<input type="text" class="form-control" placeholder="Your name" id="name" name="name">
    				</div>
    				<div class="col-lg-12">
    					<label for="email">Email</label>
      					<input type="text" class="form-control" placeholder="Your email" id="email" name="email">
    				</div>
    				<div class="col-lg-12">
    					<label for="phone">Phone</label>
      					<input type="text" class="form-control" placeholder="Your phone" id="phone" name="phone">
    				</div>
    				<div class="col-lg-12">
    					<label for="date">Date</label>
      					<input type="date" class="form-control" placeholder="Your date" id="date" name="date">
    				</div>
    				<div class="col-lg-12">
    					<label for="time">Time</label>
      					<input type="time" class="form-control" placeholder="Your phone" id="time" name="time">
    				</div>
    				<div class="col-lg-12">
    					<label for="people">People</label>
      					<input type="number" class="form-control" placeholder="Your People" id="people" name="people">
    				</div>
    				<div class="col-lg-12">
    					<label for="message">message</label>
    					<textarea class="form-control" placeholder="Your message" id="message" name="message"></textarea>
    				</div>
    				<button style="margin-left: 12px;" type="submit" onclick="return confirm('Thank you for ordering a table at our restaurant, if you want to see the receipt, press the receipt report menu next to submit.!!')" class="btn btn-warning mt-4">Submit</button>
  				</div>
			</form>
		</div>
	</div>
</div>
@endsection