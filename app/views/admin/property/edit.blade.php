@extends('admin.layouts.master')

@section('content')

<div class="container-fluid">

<div class="row">
	<h1>Update Property Details  <a href="{{ route('admin_properties') }}"><button type="button" class="btn btn-danger btn-lg">Back To Properties</button></a></h1>
</div>

<div class="row">
<!-- Nav tabs -->
	<ul class="nav nav-tabs" id="edit_nav_tabs">
		<li class="active"><a href="#main" data-toggle="tab">Main Details</a></li>
		<li><a href="#address" data-toggle="tab">Address Details</a></li>
		<li><a href="#images" data-toggle="tab">Images</a></li>
		<li><a href="#messages" data-toggle="tab">Messages</a></li>
		<li><a href="#settings" data-toggle="tab">Settings</a></li>
	</ul>
</div>

<!-- /////////////////////    Tab panes    /////////////////////////////-->

<div class="tab-content">


<!-- *************** HOME TAB ************** -->
<div class="tab-pane active" id="main">
	@include('admin.property.tabsEdit.main')
</div><!-- End home tab -->


<!-- *************** ADDRESS TAB ************** -->
<div class="tab-pane" id="address">
	@include('admin.property.tabsEdit.address')
</div><!-- End Address Tab -->



<div class="tab-pane" id="images">
	@include('admin.property.tabsEdit.images')
</div><!-- End images tab -->




<div class="tab-pane fade" id="messages">
	
</div>

<div class="tab-pane fade" id="settings">...</div>
</div><!-- End All Tab Content -->

</div><!-- .container-fluid -->

@stop