@extends('public.layouts.master')

@section('content')
   
<h1>Login</h1>

{{ Session::get('message') }}

{{ Form::open(array('url' => 'user/login', 'role' => 'form', 'class' => 'form-horizontal')) }}


<div class="form-group">
	{{ Form::label('email', 'E-Mail Address', array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-3">
	{{ Form::text('email', '', array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter Email')) }} 
	</div>
</div>

<div class="form-group">
	{{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-3">
	{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Enter Password')) }}
	</div>
</div>

{{ Form::submit('Login',array('class' => 'btn btn-primary btn-md')) }} 
<button type="button" class="btn btn-danger btn-md"> Forgotten Password?</button>

{{ Form::close() }}

@stop