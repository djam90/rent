@extends('layouts.master')

@section('content')
    <p>Add User Page</p>

{{ Form::open(array('url' => 'user/add')) }}

{{ Form::label('email', 'E-Mail Address') }}
{{ Form::text('email') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}


{{ Form::submit('Submit') }}

{{ Form::close() }}

@stop