<h2 class="pull-left">Images  <button class="btn btn-primary" data-toggle="modal" data-target="#addImageModal">Add Image</button></h2>  

<div class="clearfix"></div>

<div>
	@foreach($property->images as $image)
		<div class="media" style="border-bottom:1px solid black; padding-bottom: 10px;">
			<a class="pull-left" href="#">
				<img class="media-object" src="{{asset('img/properties/'.$image->path) }}" height="100px" width="100px">
			</a>
			<div class="media-body">
				<h4 class="media-heading edit_image_title col-md-4" id="edit_image_title" data-type="text" data-pk="{{ $image->id }}" data-name="title" data-url="{{ URL::route('update_image_title') }}">{{ $image->title }}</h4>
				<div class="clearfix"></div>
				<button class="btn btn-danger">Delete</button>
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
				<h4 class="modal-title" id="myModalLabel">Add Image</h4>
			</div>
			<div class="modal-body">
			
			<button type="button" class="btn btn-default image_upload_button">Upload Image</button>



			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>