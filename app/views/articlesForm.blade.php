@extends('layout')
@section('articlesForm')

	<H2>Publicar Artículo</H2>
		{{Form::model($article, array('route' => 'articles.store', 'method' => 'POST'), array('role' => 'form'))}}
		  
	@include ('errors', array('errors' => $errors))
		
	<div class="row">
		<div class="form-group col-md-4">
		    {{ Form::label('title', 'Titulo') }}
		    {{ Form::text('title',null, array('placeholder' => 'Titulo', 'class' => 'form-control')) }}        
		</div>

		<div class="form-group col-md-3">
	     	{{ Form::label('cat', 'Categoria') }}
	     	{{ Form::select('cat', 

	      		array(
	      			'Música' => 'Música',
	      			'Internet' => 'Internet',
	      			'Ocio' => 'Ocio',
	      				   



	      				   ), 
	      				   null, array('class' => 'form-control'))}}
	</div>


</div>
<div class="row">
	<div class="form-group col-lg-12 col-md-6">
		{{ Form::label('text', 'Contenido') }}
		{{ Form::textarea('text', null, array('placeholder' => 'Texto', 'class' => 'form-control')) }}        
	</div>
		    
</div>
	{{ Form::button('Publicar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
			  
	{{ Form::close() }}
</div>
@stop