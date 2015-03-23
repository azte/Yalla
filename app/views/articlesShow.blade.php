<?php
 $comment = new Comment;
 $comments = Comment::where('article_id', '=', $idArticle->id)->get();
?>

@extends('layout')
@section('showArticle')

<div class="row">
	<div class="col-lg-12">
	    <h2>{{$idArticle->title}}</h2>
	    <div>Autor: {{$idArticle->author}} Fecha: {{$idArticle->created_at}}</div>
	    <div class="top-buffer"><p>{{nl2br($idArticle->text)}}</p></div>
	    
	 
	    
				
	</div>

</div>

<div class="comments">
<h3>Comentarios</h3>

@foreach ($comments as $comment)
<div class="commentsbg">

	<ul>
    	<li>{{$comment->email}} Dijo:</li>
    </ul>
    	<p>{{$comment->comment}}</p>
    	<p>Fecha: {{$comment->created_at}}</p>
</div>
@endforeach

</div>

<div>



{{Form::open(array('route' => array('comments.store', 'method' => 'POST')))}}
{{ Form::hidden('article_id',$idArticle->id) }}

		  @include ('errors', array('errors' => $errors))
		
		 
		 <div class="row">
		  	<div class="form-group col-md-4">
		  	{{ Form::label('email', 'Email') }}

		    {{ Form::email('email', null, array('placeholder' => 'email','class' => 'form-control')) }}        
		    </div>
		    
		</div> 	
		<div class="row">
		  	<div class="form-group col-md-4">
		      {{ Form::label('comment', 'Comentar') }}
		      {{ Form::textarea('comment', null, array('placeholder' => 'Comentario', 'class' => 'form-control')) }}        
		    </div>
		    
		</div>
{{ Form::button('Comentar', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
{{ Form::close() }}

</div>

@stop