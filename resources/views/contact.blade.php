@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact Us</h1>
    <p>Questions about <i>The Cry of Jazz</i>? Are you interested in <a href="">screening</a> the film at an event or festival? Contact us via the form below and we will respond as soon as we can.</p>

	@if(session('message'))
		<div class='alert alert-success'>
			{{ session('message') }}
		</div>
	@endif

	<div class="col-12 col-md-6">
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }} 
			<div class="form-group">
				<label for="Name">Name</label>
				<input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<textarea type="text" class="form-control luna-message" id="message" placeholder="Type your message here" name="message" style="height: 200px;" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default" value="Send" style="width: 100%;">Send your message</button>
			</div>
		</form>
	</div>

@endsection

@section('scripts')
    @parent
    <!-- <script type="text/javascript" src="/js/app.js"></script> -->
@endsection
