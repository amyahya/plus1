/* +1 javascript */

/* zoom and display thumbnails on metabox skin options */
/* adapted from http://www.sohtanaka.com/web-design/fancy-thumbnail-hover-effect-w-jquery/ */

jQuery(document).ready(function($){
 
//Larger thumbnail preview 
 
$("dd.skin_options label").hover(function() {
	$(this).css({'z-index' : '20'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-110px', 
			marginLeft: '-110px', 
			top: '50%', 
			left: '50%', 
			width: '176px', 
			height: '176px',
			padding: '12px' 
		}, 200);
	$(this).find('span').addClass("shover").stop()
		.animate({
			width:'200px',
			left:'-60px',
			bottom:'-52px',
			border: '1px solid #aaa'
		},200);
	} , function() {
	$(this).css({'z-index' : '0'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '12px', 
			left: '12px', 
			width: '64px', 
			height: '64px', 
			padding: '6px'
		}, 400);
	$(this).find('span').removeClass("shover").stop()
		 	.animate({
			left:'0',
			bottom:'6px',
			border:'0px solid transparent',
			width:'100px'
		},400);
});
/*
$("dd.skin_options label").hover(function(){
	$(this).find('span').addClass("shover").stop()
		.animate({
			width:'200px',
			left:'-60px',
			bottom:'-52px',
			border: '1px solid #aaa'
		},200);
	}, function(){
	$(this).find('span').removeClass("shover").stop()
		 	.animate({
			left:'0',
			bottom:'6px',
			border:'0px solid transparent',
			width:'100px'
		},400);
	});
*/ 
//Swap Image on Click
	$("dd.skin_options label a").click(function() {
		
		var mainImage = $(this).attr("href"); //Find Image Name
		$("#selectedskin img").attr({ src: mainImage });
		$(this).find('input:radio').attr('checked', true).change(); // Manually trigger the change event
		return false;		
	});
 
});

