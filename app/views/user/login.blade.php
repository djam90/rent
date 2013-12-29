@extends('layouts.master')

@section('content')
    <h1>Login</h1>

{{ Session::get('message') }}

{{ Form::open(array('url' => 'user/login')) }}

{{ Form::label('email', 'E-Mail Address') }}
{{ Form::text('email') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}


{{ Form::submit('Login') }}

{{ Form::close() }}

@stop