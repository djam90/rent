@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-sm-6">
		<h1>Add Property</h1>
	</div>	
</div>



{{ Session::get('message') }}

{{ Form::open(array('url' => 'property/add', 'class' => 'form-horizontal')) }}

<!-- Property Title -->
<div class="form-group">
	{{ Form::label('title', 'Property Title',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		{{ Form::text('title','', array('required' => true,'class' => 'form-control')) }}
	</div>
</div>

<!-- Property Description -->
<div class="form-group">
	{{ Form::label('description', 'Property Description',array('class' => 'col-sm-2 control-label')) }} 
	<div class="col-sm-4">
		{{ Form::text('description','', array('required' => true,'class' => 'form-control')) }}
	</div>
</div>

<!-- Number of Rooms -->
<div class="form-group">
	{{ Form::label('no_of_rooms', 'Number of Rooms',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		{{ Form::text('no_of_rooms','', array('required' => true,'class' => 'form-control')) }}
	</div>
</div>

<!-- Monthly Rent -->
<div class="form-group">
	{{ Form::label('monthly_rent', 'Monthly Rent',array('class' => 'col-sm-2 control-label')) }}
	<div class="col-sm-4">
		<div class="input-group">
			<span class="input-group-addon">£</span>
			{{ Form::text('monthly_rent','', array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>
</div>

		{{ Form::submit('Submit',array('class' => 'btn btn-primary btn-lg')) }}
		<button type="button" class="btn btn-danger btn-lg"> Reset</button>

{{ Form::close() }}

@stop