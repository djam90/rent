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

{{ Form::close() }}