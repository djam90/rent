$("#sortable").sortable();

// Function to take the image id from the data-id attribute and add it to the form
$(document).on("click", "#editModalButton", function () {
     var imageID = $(this).data('id');
     
     $(".modal_image_title_edit_box").val( imageID );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});




$(document).ready(function(){
	First determine the current tab
	Have a click event
	$('a[data-toggle="tab"]').click(function (e) {
		$('#edit_nav_tabs').children().each(function(){
			console.log( $(this).children()) ;
		}); // end children.each
	}); // end click function
}); // end document ready