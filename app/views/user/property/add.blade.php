@extends('layouts.master')

@section('content')


		<h1>Add Property</h1>


{{ Session::get('message') }}

{{ Form::open(array('url' => 'property/add', 'data-abide' => true)) }}


		{{ Form::label('title', 'Property Title') }}
		{{ Form::text('title','', array('required' => true)) }}

		{{ Form::label('description', 'Property Description') }} 
		{{ Form::text('description','', array('required' => true)) }}

		{{ Form::label('no_of_rooms', 'Number of Rooms') }}
		{{ Form::text('no_of_rooms','', array('required' => true, 'pattern' => 'number')) }}




		{{ Form::label('monthly_rent', 'Monthly Rent') }}

		<span class="prefix">£</span>

				{{ Form::text('monthly_rent','', array('required' => true, 'pattern' => 'number')) }}

		{{ Form::submit('Submit',array('class' => 'button')) }}

{{ Form::close() }}

@stop