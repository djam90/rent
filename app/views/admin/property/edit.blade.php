@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

<div class="row">
	<h1>Update Property Details  <a href="{{ route('property.index') }}"><button type="button" class="btn btn-danger btn-lg">Back To Properties</button></a></h1>
</div>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#main" data-toggle="tab">Main</a></li>
	<li><a href="#images" data-toggle="tab">Images</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
	<div class="tab-pane active" id="main">
		<h2>Main Details</h2>


<?php if ($errors->any()): ?>
	<div class="alert alert-danger">
		The following errors occurred:
		<?php foreach($errors->all('<li>:message</li>') as $message): ?>
			<?=$message?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>    



	{{ Form::model($property, array('route' => array('property.update', $property->id), 'method' => 'PUT' ,'class' => 'form-horizontal')) }}

	<!-- Property Title -->
	<div class="form-group">
		{{ Form::label('title', 'Property Title',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			{{ Form::text('title',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Property Description -->
	<div class="form-group">
		{{ Form::label('description', 'Property Description',array('class' => 'col-md-3 control-label')) }} 
		<div class="col-md-3">
			{{ Form::text('description',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Number of Rooms -->
	<div class="form-group">
		{{ Form::label('no_of_rooms', 'Number of Rooms',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			{{ Form::text('no_of_rooms',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Monthly Rent -->
	<div class="form-group">
		{{ Form::label('monthly_rent', 'Monthly Rent',array('class' => 'col-md-3 control-label')) }}
		<div class="col-md-3">
			<div class="input-group">
				<span class="input-group-addon">£</span>
				{{ Form::text('monthly_rent',NULL, array('class' => 'form-control')) }}
			</div>
		</div>
	</div>


<h2>Address Details</h2>

	<!-- Address 1 -->
	<div class="form-group">
		{{ Form::label('address_1', 'Address 1',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('address_1',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Address 2 -->
	<div class="form-group">
		{{ Form::label('address_1', 'Address 2',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('address_2',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Town -->
	<div class="form-group">
		{{ Form::label('town', 'Town',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('town',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- City -->
	<div class="form-group">
		{{ Form::label('city', 'City',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('city',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<!-- Post Code 1 -->
	<div class="form-group">
		{{ Form::label('postcode', 'Post Code',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-2">
			{{ Form::text('postcode_1',NULL, array('class' => 'form-control')) }}
		</div>
		<div class="col-md-2">
			{{ Form::text('postcode_2',NULL, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="row">
		{{ Form::submit('Save',array("class" => "btn btn-primary btn-lg")) }}
	</div>

	{{ Form::close() }}
	</div>


	<div class="tab-pane" id="images">
		<h2 class="pull-left">Images  <button class="btn btn-primary" data-toggle="modal" data-target="#addImageModal">Add Image</button></h2>  

	<div class="clearfix"></div>

	<div class="imageListContainerDiv">
		@foreach($property->images as $image)
			<div class="media imageListIndividualContainer" style="border-bottom:1px solid black; padding-bottom: 10px;">
				<a class="pull-left" href="#">
					<img class="media-object" src="{{asset('uploads/'.$image->path) }}" height="100px" width="100px">
				</a>
				<div class="media-body">
					<h4 class="media-heading edit_image_title col-md-4" id="edit_image_title" data-type="text" data-pk="{{ $image->id }}" data-name="title" data-url="{{ URL::route('update_image_title') }}">{{ $image->title }}</h4>
					<div class="clearfix"></div>
					<button class="btn btn-danger deleteImageButton" data-pk="{{ $image->id }}">Delete</button>
				</div>
			</div>
		@endforeach
	</div>

	<!-- Modal!!!!!! -->
	<!-- Modal -->
	<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="addImageModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Add Images</h4>
				</div>
				<div class="modal-body">
				
	<form action="/upload/image"
	      class="dropzone"
	      id="my-awesome-dropzone">
	<input type="hidden" name="property_id" value="{{ $property->id }}">
	  </form>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Finished</button>
				</div>
			</div>
		</div>
	</div>
	</div>




</div>

</div><!-- .container-fluid -->

@stop