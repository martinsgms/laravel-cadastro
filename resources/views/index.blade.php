@extends('templates.template')

@section('content')

	<div class="box">
		<center>
		<p>Candidato: Gabriel Martins dos Santos</p>
		<h1>List of users</h1>

		@if(count($usuarios) > 0)
			<a href="{{route('create')}}"><h4>Add new user</h4></a>
		@endif

			<div class="table-responsive">
				<table class="table" style="text-align: center">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Birth</th>
				      <th scope="col">Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@forelse($usuarios as $usuario)
				  		<tr>
				  		  <th scope="row">{{$usuario->id}}</th>
				  		  <td>{{$usuario->name}}</td>
				  		  <td>{{$usuario->email}}</td>
				  		  <td>{{$usuario->birth}}</td>
				  		  <td>
				  		  	<a data-toggle="modal" data-target="#modaledit" onclick="loadEdit('{{$usuario->id}}','{{$usuario->name}}','{{$usuario->birth}}','{{$usuario->email}}','{{$usuario->password}}')" class="ico">
				  		  		<i class="material-icons">edit</i>
				  		  	</a>
				  		  	<a data-toggle="modal" data-target="#modaldelete" onclick="loadDelete('{{$usuario->id}}')" class="ico">
  				  		  		<i class="material-icons">delete</i>
			  		  		</a>
				  		  </td>
				  		</tr>
				  	@empty
				  			  </tbody>
				  			</table>
				  		</div>
				  		
					  		<h3>Nada para mostrar.<br>Faça um registro <a href="{{route('create')}}">aqui</a></h3>		
				  		
				  	@endforelse
				  </tbody>
				</table>
			</div>
		</center>
	</div>

	<!-- Modal Edit -->
	<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form class="form" method="post" action="/" id="editForm">
	        	{!! csrf_field() !!}
	        	{{ method_field('PUT') }}

	        	<!-- id visível p/ fins de debug -->
	        	<input type="text" id="id_edit" readonly>
	        	  <div class="form-row">
	        	  	<div class="form-group col-md-8">
	        			<label for="name">Name</label>
	        			<input type="text" class="form-control" id="name_edit" name="name_edit" placeholder="Your name" value="{{old('name')}}">
	        	  	</div>
	        	  	<div class="form-group col-md-4">
	        	  		<label for="birth">Birth</label>
	        	  		<input type="text" class="form-control" id="birth_edit" name="birth_edit" placeholder="dd/mm/yyy" value="{{old('birth')}}">
	        	  	</div>
	        	  </div>
	        	  <div class="form-row">
	        	    <div class="form-group col-md-8">
	        	      <label for="email">Email</label>
	        	      <input type="email" class="form-control" id="email_edit" name="email_edit" placeholder="Email@example.com" value="{{old('email')}}">
	        	    </div>
	        	    <div class="form-group col-md-4">
	        	      <label for="password">Password</label>
	        	      <input type="password" class="form-control" id="password_edit" name="password_edit" placeholder="Password" aria-describedby="passwordHelpInline" ">
	        	      <small id="passwordHelpInline" class="text-muted">
	        	      		At least 8 characters.
	        	      </small>
	        	    </div>
	        	  </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" id="editbtn">Save changes</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Delete -->
	<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<p>Are you sure?</p>
	      	<form method="delete">
	      		<!-- id visível p/ fins de debug -->
	      		<input type="text" id="id_delete" name="id_delete" readonly>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	        <button type="submit" class="btn btn-primary">Yes</button>
	    	</form>
	      </div>
	    </div>
	  </div>
	</div>

	<script>
		
	</script>
@endsection

