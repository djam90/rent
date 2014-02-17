<h2>Address Details</h2>

{{ Form::open(array('route' => 'admin_postEditProperty', 'class' => 'form-horizontal')) }}

	<!-- Address 1 -->
	<div class="form-group">
		{{ Form::label('address_1', 'Address 1',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('address_1',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Address 2 -->
	<div class="form-group">
		{{ Form::label('address_1', 'Address 2',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('address_2',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Town -->
	<div class="form-group">
		{{ Form::label('town', 'Town',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('town',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>

	<!-- City -->
	<div class="form-group">
		{{ Form::label('city', 'City',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-5">
			{{ Form::text('city',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>

	<!-- Post Code 1 -->
	<div class="form-group">
		{{ Form::label('postcode', 'Post Code',array('class' => 'col-md-2 control-label')) }}
		<div class="col-md-2">
			{{ Form::text('postcode',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
		<div class="col-md-2">
			{{ Form::text('postcode',NULL, array('required' => true, 'class' => 'form-control')) }}
		</div>
	</div>

{{ Form::submit('Save', array('class' => 'btn btn-primary col-md-2'))}}

{{ Form::close() }}