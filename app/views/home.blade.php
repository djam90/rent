@extends('layouts.master')

@section('content')
	{{ Session::get('message') }}
    <p>Home</p>
@stop