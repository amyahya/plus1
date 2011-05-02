/* +1 javascript */

/* zoom and display thumbnails on metabox skin options */
/* adapted from http://www.sohtanaka.com/web-design/fancy-thumbnail-hover-effect-w-jquery/ */

jQuery(document).ready(function($){
 
//Larger thumbnail preview 
 
$("dd.skin_options label").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-110px', 
			marginLeft: '-110px', 
			top: '50%', 
			left: '50%', 
			width: '174px', 
			height: '174px',
			padding: '20px' 
		}, 200);
	
	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '0', 
			left: '0', 
			width: '100px', 
			height: '100px', 
			padding: '5px'
		}, 400);
});
 
//Swap Image on Click
	$("dd.skin_options label a").click(function() {
		
		var mainImage = $(this).attr("href"); //Find Image Name
		$("#selectedskin img").attr({ src: mainImage });
		return false;		
	});
 
});

