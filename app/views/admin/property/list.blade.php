@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">
<!-- Main Content -->

	<div class="row">
		<h1 class="page-header">My Properties	
			<a href="{{ route('property.create') }}">
				<button type="button" class="btn btn-primary">Add Property</button>
			</a>
		</h1>
	</div>

	{{ Session::get('message') }}

	@foreach($properties as $property)
	<div class="media">
		<a class="pull-left" href="#">
			<img class="media-object" src="/uploads/{{ $property->images->toArray()[0]['path'] or 'default.jpg' }}" alt="..." height="170px" width="170px">
		</a>
		<div class="media-body">
			<h4 class="media-heading">{{ $property->title }}</h4>
			Description: {{ $property->description }} <br />
			No. of rooms: {{ $property->no_of_rooms }} <br />
			Monthly Rent: {{ $property->monthly_rent }} <br />
			Date Added: {{ $property->created_at }} <br /> <br />

			<a href="{{ route('admin_properties', $property->id) }}">View</a>
			---
			<a href="{{ route('admin_editProperty', $property->id) }}">Edit</a>
			---
			{{ link_to('property/delete/'.$property->id,'Delete') }}
		</div>
	</div>

<hr />	

	@endforeach
</div>

@stop