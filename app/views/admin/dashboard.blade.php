@extends('admin.layouts.master')

@section('content')

	<div class="container-fluid">
    	<?php
		if (Session::has('message')) : ?>
		<div class="row">
			<div class="alert alert-success alert-dismissable">
		  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('message') }}
			</div>
		</div>
		<?php endif; ?>


        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">Total Number of Properties</div>
					<div class="panel-body">
					{{ $data['total_properties'] }} Properties <a href="{{ route('admin_addProperty') }}">Add More?</a>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-danger">
					<div class="panel-heading">Total Page Hits</div>
					<div class="panel-body">
					{{ $data['total_properties'] }} Page Hits
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">Most Popular Property</div>
					<div class="panel-body">
					dsfjlkdfjkldsjklfd
					</div>
				</div>
			</div>
		</div><!-- /.row -->

		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Some Heading Here</div>
					<div class="panel-body">some text here</div>
				</div>
			</div>
			
			<div class="col-md-5">
				<div class="panel panel-default">
					<div class="panel-body">
						<h1>A smaller section here of 5 cols.</h1>  
						<h2>Some more stuff here</h2>
						<h3>Smaller text</h3>
						<h4>Another heading</h4>
						<ul>
							<li><a href="">dfssfd</a></li>
							<li><a href="">fsdfd</a></li>
							<li><a href="">fsddf</a></li>
							<li><a href="">sdffdsfd</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

</div>
@stop