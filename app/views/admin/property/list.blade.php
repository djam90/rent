@extends('admin.layouts.master')

@section('content')

<!-- Main Content -->
<div class="container">
	<h1 class="page-header">My Properties	
		<a href="{{ route('admin_addProperty') }}"><button type="button" class="btn btn-primary">Add Property</button></a>
	</h1>

	{{ Session::get('message') }}

	@foreach($properties as $property)
		Title: {{ $property->title }} <br />
		Description: {{ $property->description }} <br />
		No. of rooms: {{ $property->no_of_rooms }} <br />
		Monthly Rent: {{ $property->monthly_rent }} <br />
		Date Added: {{ $property->created_at }} <br /> <br />

	<a href="{{ route('admin_properties', $property->id) }}">View</a>
	---
	<a href="{{ route('admin_editProperty', $property->id) }}">Edit</a>
	---
	{{ link_to('property/delete/'.$property->id,'Delete') }}

	<hr />

	@endforeach
</div>

@stop