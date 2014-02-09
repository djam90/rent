@extends('admin.layouts.master')

@section('content')


<!-- Main Content -->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


	<h1 class="page-header">Settings</h1>
	<h2>Change Email</h2>
	<h2>Change Password</h2>
	<h2>Receive Newsletter? {{ Form::select('newsletter', array('y' => 'Yes', 'n' => 'No')); }}</h2>

@stop