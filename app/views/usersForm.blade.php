
<?php

    
$form_data = array('route' => 'users.store', 'method' => 'POST');
   

?>

@extends ('layout')

@section ('formUsers') <!-- Este contenido se modifico -->




	
	

	<h1>Registrarse</h1>


	{{ Form::model($user, $form_data, array('role' => 'form')) }}
	  @include ('errors', array('errors' => $errors))


	  <div class="row">
	  	
	  	<div class="form-group col-md-4">
	    	{{ Form::label('name', 'Nombre de Usuario') }}
	    	{{ Form::text('name', null, array('placeholder' => 'Usuario', 'class' => 'form-control')) }}        
	    </div>

	   <div class="form-group col-md-4">
	    	{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, array('placeholder' => 'email','class' => 'form-control')) }}        
		</div>
	   
	   </div>	
	  	<div class="row">
		    <div class="form-group col-md-4">
		      	{{ Form::label('password', 'Contraseña') }}
		      	{{ Form::password('password', array('class' => 'form-control')) }}
		    </div>
	    <div class="form-group col-md-4">
	      	{{ Form::label('password_confirmation', 'Confirmar contraseña') }}
	      	{{ Form::password('password_confirmation', array('class' => 'form-control')) }}
	    </div>
	  </div>
	  		{{ Form::button('Registrarse', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
	  
	{{ Form::close() }}
@stop