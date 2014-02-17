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
$("button.image_upload_button").dropzone({ url: "/upload/image" });