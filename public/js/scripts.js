$("#sortable").sortable();

// Function to take the image id from the data-id attribute and add it to the form
$(document).on("click", "#editModalButton", function () {
     var imageID = $(this).data('id');
     
     $(".modal_image_title_edit_box").val( imageID );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

//turn to inline mode


$(document).ready(function() {
	$.fn.editable.defaults.mode = 'inline';
    $('.edit_image_title').editable();
});



// jQuery
//$("#my-awesome-dropzone").dropzone({ url: "/upload/image" });


	//$('#addImageModal').on('hidden.bs.modal', function (e) {

$(document).on('hidden.bs.modal', '#addImageModal', function (e) {
	$('#images').load(window.location.href + ' #images:eq(0) > *', function() {
  		$("#my-awesome-dropzone").dropzone({ url: "/upload/image" }); // re-init dropzone
  		$.fn.editable.defaults.mode = 'inline'; // set to inline
    	$('.edit_image_title').editable(); // re-init editable
    	alert(1);
	});
});

// Delete image
$(document).ready(function(){
    $(".deleteImageButton").click(function (e) {
        if (confirm('Are you sure to delete this image?')) {
        	var imageID = $(e.target).attr('data-pk');
        	var imageContainerDiv = $(e.target).parents('.imageListIndividualContainer');
            $.post( "/deleteImage", { id: imageID } ).done(function() {
    			imageContainerDiv.hide( "slow");
  			});

            //$(this).parents('.imageListIndividualContainer').hide("slow");
        }
    });
});