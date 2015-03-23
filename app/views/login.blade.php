@extends('layout')
@section('login')
 

 {{Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'navbar-form'])}}
  
       @if(Session::has('login_error'))

            <span class="label label-danger">Credenciales no válidas</span>

        @endif
<div class="row">

    <div class="col-lg-2 top-buffer">
        <div class="form-group">

             {{Form::text('name',null, ['class' => 'form-control', 'placeholder' => 'Usuario'])}}
        </div>
    </div>
    <div class="col-lg-2 top-buffer">

    <div class="form-group">
            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password'])}}
        </div>
    </div>
    <div class="col-lg-12 top-buffer">

        <button type="submit" class="btn btn-success">Ingresar</button>
    </div>
</div>
{{Form::close()}}
@stop