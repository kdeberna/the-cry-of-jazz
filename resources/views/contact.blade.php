@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
	<div class="row">
		<div class="col-md-6 col-xs-12">
    		<p>Questions about <i>The Cry of Jazz</i>? Are you interested in screening the film at an event or festival? Contact us via the form below and we will respond as soon as we can.</p>
		</div>
		<div class="col-md-6 col-xs-12">
			@if(session('message'))
				<div class='alert alert-success'>
					{{ session('message') }}
				</div>
			@endif
			<form method="post" action="/contact">
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
	</div>
@endsection

@section('scripts')
    @parent
@endsection
