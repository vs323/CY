
/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();

/* resize background images */
function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        // overflowing difference
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        // remaining height to have fullscreen image only on parallax
        var remainingH = 0;
        if(path.hasClass("parallax")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        // set img values depending on cont
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        // fix when too large
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}

	function BackgroundClick(){
	
	  $('').click(function(){
	  console.log("header");
	  
	  });
	
	}
$(window).resize(backgroundResize);
$(window).focus(backgroundResize);
backgroundResize();


$(document).ready(function(){
	
	

	$('#menu_icon').click(function(){
		$('.menu_overlay').toggleClass('menu_overlay_push');
		$("#MobileMenuOverlay").hide();
		if($(".menu_overlay_push").is(":visible")==true)
		{
			$("#MobileMenuOverlay").show();
			$(".overlay").click(function(){
				$("#MobileMenuOverlay").hide();
				$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
			});
		}
		else
		{
		$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
		}
		
	});
	
		
	function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("."+id).offset().top},
        'slow');
	}

	$("#testimoniallink").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll($(this).attr("id"));    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
});


	var windowsWidth = $(window).width();
	console.log(windowsWidth);
	if(windowsWidth > 700) {
	$(".gl_items").colorbox({rel:'group1'});
	$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
	});
	}
	
	$(window).resize(function(){
	var windowsWidth = $(window).width();
	if(windowsWidth > 700) {
	$(".gl_items").colorbox({rel:'group1'});
	$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
	});
	}
	
	})
	
	
	
	
	
	
	function initialize() {
	var myLatLng = new google.maps.LatLng(-35.2235276,149.1419802);
	var mapProp = {
    center:myLatLng,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
	};	
	
	var map = new google.maps.Map(document.getElementById("map"), mapProp);
	var marker = new google.maps.Marker({
	map: map,
	position: myLatLng
	});
	}
	google.maps.event.addDomListener(window, 'load', initialize);

});
