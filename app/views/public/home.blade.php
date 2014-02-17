@extends('public.layouts.master')

@section('content')
	<div class="container">
	
	<?php
	if (Session::has('message')) : ?>
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-success alert-dismissable">
		  		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('message') }}
			</div>
		</div>
	</div>
	<?php endif; ?>

<div class="jumbotron">
	<div class="page-header">
		<h1>2Let <small>A search engine for private renters who want to avoid estate agents and fees</small></h1>
	</div>
</div>

    <h1>Search for a property</h1>

    <form role="form" action="/search" method="GET">
    	<div class="row">
			<div class="col-md-4">
	    		<input type="text" class="form-control" id="search" placeholder="Enter your location">
	  		</div><!-- .col-md-* -->

			<div class="">
	  			<button type="submit" class="btn btn-default">Search</button>
			</div><!-- .col-md-* -->
		</div><!-- .row -->

		<div class="row">
			<h2>More Options</h2>

			<div class="form-group">
				<div class="col-md-4">			
					<div class="input-group">
						<span class="input-group-addon">Min Monthly Price</span>
						<select class="form-control">
							<option>£100</option>
							<option>£150</option>
							<option>£200</option>
							<option>£250</option>
							<option>£300</option>
							<option>£350</option>
							<option>£400</option>
							<option>£450</option>
							<option>£500</option>
							<option>£550</option>
							<option>£600</option>
							<option>£650</option>
							<option>£700+</option>
						</select>
					</div><!-- .input-group -->
				</div>
			</div><!-- .form-group -->

			<div class="form-group">
				<div class="col-md-4">
					<div class="input-group">
						<span class="input-group-addon">Max Monthly Price</span>
						<select class="form-control">
							<option>£100</option>
							<option>£150</option>
							<option>£200</option>
							<option>£250</option>
							<option>£300</option>
							<option>£350</option>
							<option>£400</option>
							<option>£450</option>
							<option>£500</option>
							<option>£550</option>
							<option>£600</option>
							<option>£650</option>
							<option>£700+</option>
						</select>
					</div><!-- .input-group -->
				</div>
			</div><!-- .form-group -->
			</div><!-- .row -->

			<div class="row">
				<div class="form-group">
					<div class="col-md-4">
						<div class="input-group">
							<span class="input-group-addon">Property Type</span>
							<select class="form-control">
								<option>House</option>
								<option>Bungalow</option>
								<option>Flat</option>
								<option>Commercial</option>
								<option>Land</option>
							</select>
						</div><!-- .input-group -->
					</div>
				</div><!-- .form-group -->

				<div class="form-group">
					<div class="col-md-4">
						<div class="input-group">
							<span class="input-group-addon">Bedrooms</span>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9+</option>
							</select>
						</div><!-- .input-group -->
					</div>
				</div><!-- .form-group -->	
			</div><!-- .row -->
		</div><!-- .container -->

    </form>

@stop