$(document).ready(function() {
			
	$('#portfolio-thumbs a').click(function(evt) {
		//don't follow link
		 evt.preventDefault();
		 //get path to new image
	   var imgPath = $(this).attr('href');
		 //get reference to old image
		 var oldImage = $('#photo img');
		 			
			 //create HTML for new image
			 var newImage = $('<img src="' + imgPath +'">');
			 //make new image invisible
			 newImage.hide();
			 //add to the #photo div
			 $('#photo').prepend(newImage);
			 //fade in new image
			 newImage.fadeIn(1000);
			 
			 //fade out old image and remove from DOM
			 oldImage.fadeOut(1000,function(){
		     $(this).remove();
				});	 
		 
	}); // end click
		
		$('#portfolio-thumbs a:first').click();
}); // end ready