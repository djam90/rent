@extends('public.layouts.master')

@section('content')
    <h1>Add User Page</h1>

{{ Form::open(array('url' => 'user/add')) }}

{{ Form::label('email', 'E-Mail Address') }}
{{ Form::text('email') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}


{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop