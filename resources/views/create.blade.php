@extends('templates.template')

@section('content')

	<div class="box">
		<h1>New User</h1>

		@if(isset($errors) && count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{$error}}</p>
				@endforeach
			</div>
		@endif

		<form class="form" method="post" action="{{route('store')}}">
			{!! csrf_field() !!}
		  <div class="form-row">
		  	<div class="form-group col-md-8">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="{{old('name')}}">
		  	</div>
		  	<div class="form-group col-md-4">
		  		<label for="birth">Birth</label>
		  		<input type="text" class="form-control" id="birth" name="birth" placeholder="dd/mm/yyy" value="{{old('birth')}}">
		  	</div>
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="email">Email</label>
		      <input type="email" class="form-control" id="email" name="email" placeholder="Email@example.com" value="{{old('email')}}">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="password">Password</label>
		      <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="passwordHelpInline" ">
		      <small id="passwordHelpInline" class="text-muted">
		      		At least 8 characters.
		      </small>
		    </div>
		  </div>
	
		  <button type="submit" class="btn btn-primary">Sign in</button>
		  <a href="{{route('index')}}" class="btn btn-light" role="button" aria-disabled="true">Cancel</a>
		</form>
	</div>
@endsection

@section('script')
	
@endsection