@extends('public.layouts.master')

@section('content')
	
	<div class="container">

    <h1>Search Results</h1>
	{{ Session::get('message') }}

	<div class="row">
		<div class="col-md-3 search_left_bar">
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
			Left Nav<br />
		</div>

		<div class="col-md-6 search_results_container">
			<?php foreach($data as $property) :?>
			<div class="search_results_property_container">
				{{ $property->title }} - 
				{{ $property->description }} <br />
				{{ $property->no_of_rooms }} rooms <br />
				£{{ $property->monthly_rent }} per month<br />
				<?php foreach($property->images as $image) : ?>
				<img src="/img/properties/<?=$image->path;?>" alt="" height="200px" width="200px">
				<?php endforeach; ?>
				 
			</div>
			
			<?php endforeach;?>
		</div><!-- .col-md-6 search_results_container -->



	</div><!-- .row -->

    </div><!-- .container -->

   

@stop