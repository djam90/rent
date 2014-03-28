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


$('.deletePropertyButton').click(function() {
    if(confirm("Click OK to continue?"))
    {
        id = $(this).data('id');
        row = $(this).parents("div.property_list_row");
        console.log(row);
        $.ajax({
          type: "DELETE",
          url: "/property/"+id,
        })
          .done(function( msg ) {
            row.fadeOut();
            alert( "Data Removed: " + msg );
          });
    }
});

$(".find_address").click(function(e){
    e.preventDefault();
    alert("clicked");
    
});


















$(document).ready(function () {
  
  // wire up button click
  
  $('#go').click(function () {
  
    printAddress( 53.190299 , -1.308977);

  });

});
 

$(document).ready(function () {
  // wire up button click
  $('#go').click(function () {
    printAddress( 53.190299 , -1.308977);
  });
});

 
// use Google Maps API to reverse geocode our location
function printAddress(latitude, longitude, isMaxMind) {
  // set up the Geocoder object
  var geocoder = new google.maps.Geocoder();
 
  // turn coordinates into an object
  var yourLocation = new google.maps.LatLng(latitude, longitude);
 
  // find out info about our location
  geocoder.geocode({ "latLng": yourLocation }, function (results, status) {
    if(status == google.maps.GeocoderStatus.OK) {
      if(results[0]) {
        console.log(results);
        $("#results").fadeOut(function() {
          $(this).html("<p><b>Abracadabra!</b> My guess is:</p><p><em>" + results[0].formatted_address + "</em></p>").fadeIn();
        })
      } else {
        error("Google did not return any results.");
      }
    } else {
      error("Reverse Geocoding failed due to: " + status);
    }
  });
 
  
}
 
function error(msg) {
  alert(msg);
}


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Reverse Geocoding with HTML5 &amp; Google Demo | Ben Marshall</title>
</head>
<body>
<input type="button" class="button" id="go" value="Click Me and I'll Guess Your Address!">
<div id="results"></div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!-- <script src="http://j.maxmind.com/app/geoip.js"></script><!-- For our fallback -->
 -->


 <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

 <script src="script.js"></script>


</body>
</html>

<?php



?>