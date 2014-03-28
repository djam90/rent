@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

<div class="row">
	<h1>Add Property <a href="{{ route('property.index') }}"><button type="button" class="btn btn-danger btn-lg">Back To Properties</button></a></h1>
</div>

<!-- Validation Errors -->
<?php if ($errors->any()): ?>
	<div class="alert alert-danger">
		The following errors occurred:
		<?php foreach($errors->all('<li>:message</li>') as $message): ?>
			<?=$message?>
		<?php endforeach; ?>
	</div>
<?php endif; ?>    

<h2>Main Details</h2>

{{ Form::open( array('route' => 'property.store','class' => 'form-horizontal') ) }}

<!-- Property Title -->
<div class="form-group">
	{{ Form::label('title', 'Property Title',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		{{ Form::text('title','', array('class' => 'form-control', 'placeholder' => 'Enter a title for your property')) }}
	</div>
</div>

<!-- Property Description -->
<div class="form-group">
	{{ Form::label('description', 'Property Description',array('class' => 'col-sm-2 control-label')) }} 
	<div class="col-sm-4">
		{{ Form::text('description','', array('class' => 'form-control','placeholder' => 'Enter a description for your property')) }}
	</div>
</div>

<!-- Number of Rooms -->
<div class="form-group">
	{{ Form::label('no_of_rooms', 'Number of Rooms',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		{{ Form::text('no_of_rooms','', array('class' => 'form-control','placeholder' => 'Enter the number of rooms')) }}
	</div>
</div>

<!-- Monthly Rent -->
<div class="form-group">
	{{ Form::label('monthly_rent', 'Monthly Rent',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		<div class="input-group">
			<span class="input-group-addon">£</span>
			{{ Form::text('monthly_rent','', array('class' => 'form-control','placeholder' => 'Monthly rent')) }}
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

	<button class="btn btn-primary find_address">Find Address</button>


	{{ Form::submit('Submit',array('class' => 'btn btn-primary btn-lg')) }}
	<button type="button" class="btn btn-danger btn-lg"> Reset</button>



{{ Form::close() }}
</div><!-- .container -->
@stop