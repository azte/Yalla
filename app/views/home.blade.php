@extends('layout')
@section('Posts')

<?php
  $articles = Article::orderBy('id','DESC')->paginate(4);
?>


@if (Auth::check())

<div class="logSection">Hola {{Auth::user()->name}}</div>
	<div class="logSection"><a href='logout'>Cerrar sesión</a></div>
<div class="logSection">
	<a class="btn btn-danger top-buffer" href="{{route('articles.create')}}">Publicar</a>
</div>          

@else

<div class="logSection">
	<a class="btn btn-default" href='login'>Login</a>
	<a class="btn btn-default" href="{{route('users.create')}}">Registrarse</a>
</div>
@endif


	

	<h3>Últimos Artículos</h3>


	@foreach($articles as $article)

<div class="row top-buffer">
	<div class="col-lg-11">
		<h4><a href="{{ route('articles.show', $article->id) }}">{{$article->title}}</a></h4>
		<p>Autor: {{$article->author}} Fecha: {{$article->created_at}}</p>
		<p>{{nl2br($article->text)}}</p>

	</div>	
</div>
@endforeach


<div class="row">
	<div class="col-lg-12">
		{{$articles->links() }}
	</div>
</div>




	


@stop

