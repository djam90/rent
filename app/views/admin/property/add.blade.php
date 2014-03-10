@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

<div class="row">
	<h1>Add Property</h1>
</div>

{{ Session::get('message') }}

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
		{{ Form::text('title','', array('required' => true,'class' => 'form-control', 'placeholder' => 'Enter a title for your property')) }}
	</div>
</div>

<!-- Property Description -->
<div class="form-group">
	{{ Form::label('description', 'Property Description',array('class' => 'col-sm-2 control-label')) }} 
	<div class="col-sm-4">
		{{ Form::text('description','', array('required' => true,'class' => 'form-control','placeholder' => 'Enter a description for your property')) }}
	</div>
</div>

<!-- Number of Rooms -->
<div class="form-group">
	{{ Form::label('no_of_rooms', 'Number of Rooms',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		{{ Form::text('no_of_rooms','', array('required' => true,'class' => 'form-control','placeholder' => 'Enter the number of rooms')) }}
	</div>
</div>

<!-- Monthly Rent -->
<div class="form-group">
	{{ Form::label('monthly_rent', 'Monthly Rent',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		<div class="input-group">
			<span class="input-group-addon">£</span>
			{{ Form::text('monthly_rent','', array('required' => true, 'class' => 'form-control','placeholder' => 'Monthly rent')) }}
		</div>
	</div>
</div>

		{{ Form::submit('Submit',array('class' => 'btn btn-primary btn-lg')) }}
		<button type="button" class="btn btn-danger btn-lg"> Reset</button>




	<h2>Address Details</h2>

	<h2>Add Images</h2>


{{ Form::close() }}
</div><!-- .container -->
@stop