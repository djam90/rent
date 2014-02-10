@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

<div class="row">
	<h1>Update Property Details</h1>
</div>

<div class="row">
<!-- Nav tabs -->
	<ul class="nav nav-tabs">
		<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
		<li><a href="#images" data-toggle="tab">Images</a></li>
		<li><a href="#messages" data-toggle="tab">Messages</a></li>
		<li><a href="#settings" data-toggle="tab">Settings</a></li>
	</ul>
</div>

<!-- Tab panes -->
<!-- *************** HOME TAB ************** -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
  	<h2>Main Details</h2>
	{{ Form::model($property, array('route' => array('admin_postEditProperty', $property->id), 'class' => 'form-horizontal')) }}

	<!-- Property Title -->
	<div class="form-group">
		{{ Form::label('title', 'Property Title',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			{{ Form::text('title',NULL, array('required' => true,'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Property Description -->
	<div class="form-group">
		{{ Form::label('description', 'Property Description',array('class' => 'col-md-3 control-label')) }} 
		<div class="col-md-3">
			{{ Form::text('description',NULL, array('required' => true,'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Number of Rooms -->
	<div class="form-group">
		{{ Form::label('no_of_rooms', 'Number of Rooms',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			{{ Form::text('no_of_rooms',NULL, array('required' => true,'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Monthly Rent -->
	<div class="form-group">
		{{ Form::label('monthly_rent', 'Monthly Rent',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			<div class="input-group">
				<span class="input-group-addon">£</span>
				{{ Form::text('monthly_rent',NULL, array('required' => true, 'class' => 'form-control')) }}
			</div>
		</div>
	</div>

	{{ Form::submit('Update',array('class' => 'btn btn-primary btn-lg')) }}
	<a href="{{ route('admin_properties') }}"><button type="button" class="btn btn-danger btn-lg">Back To Properties</button></a>

	{{ Form::close() }}
</div><!-- End home tab -->



<div class="tab-pane fade" id="images">
	<h2 class="pull-left">Images  <button class="btn btn-primary">Add Image</button></h2>  

	<div class="clearfix"></div>

	<div id="sortable">
	@foreach($property->images as $image)
	<div class="media" style="border-bottom:1px solid black; padding-bottom: 10px;">
  		<a class="pull-left" href="#">
			<img class="media-object" src="{{asset('img/properties/'.$image->path) }}" height="100px" width="100px">
  		</a>
  		<div class="media-body">
    		<h4 class="media-heading">{{ $image->title }}</h4>
    		<p class="pull-left col-md-4">{{ $image->path }}</p><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button>
  		</div>

	</div>
	@endforeach
	</div>


</div><!-- End images tab -->




<div class="tab-pane fade" id="messages">
	
</div>




<div class="tab-pane fade" id="settings">...</div>
</div><!-- End All Tab Content -->


</div><!-- .container-fluid -->
@stop