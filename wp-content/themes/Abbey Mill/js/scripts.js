// JavaScript Document
$(document).ready(function () {  

 $('.tabs a').click(function() {
		$this = $(this);		
		// hide panels
		$('.panel').hide();
		$('.tabs a.active').removeClass('active');		    
		// add active state to new tab
		$this.addClass('active').blur();	
		// retrieve href from link (is id of panel to display)
		var panel = $this.attr('href');
		// show panel
		$(panel).fadeIn(250);
		
		return(false);
	}); //end click
	$('.tabs li:first a').click(); //open first tab
	
    //navigation menu script
	
    $("ul.dropdown li").hover(function(){
    
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
    
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    
    });
		//end navigation menu script
		
		$('.iframe').fancybox({
		width : '100%',
		height : '100%',
		transitionIn: 'elastic',
		transitionOut: 'elastic',
		titlePosition: 'outside',
		cyclic: true
	});
	
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

});//end ready