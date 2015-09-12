
/* fix vertical when not overflow
call fullscreenFix() if .fullscreen content changes */
/*function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();*/

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

$(window).resize(backgroundResize);
$(window).focus(backgroundResize);



$(document).ready(function(){
	backgroundResize();
	
    
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
	
	//----------------------------------------------------------Scroll Link
	
	function goToByScrollHome(id){
    // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("."+id).offset().top},
        'slow');
	}	
	
	function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("."+id).offset().top-59},
        'slow');
	}

	$(".menu_overlay > ul > li > a").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll($(this).attr("id"));    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
	$("#MobileMenuOverlay").hide();
});

	$(".nav_bar > ul > li > a").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll($(this).attr("id"));    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
	$("#MobileMenuOverlay").hide();
});

	$("#GetQuote").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll("contact_us");    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
	$("#MobileMenuOverlay").hide();
	});

	$("#GetQuoteMobile").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll("contact_us");    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
	$("#MobileMenuOverlay").hide();
	});
	
	
	$("#ViewGallery").click(function(e) { 
	console.log("hi");
      // Prevent a page reload when a link is pressed
    e.preventDefault(); 
      // Call the scroll function
    goToByScroll("gallery");    
	$(".menu_overlay, .menu_overlay_push").removeClass("menu_overlay_push");
	$("#MobileMenuOverlay").hide();
	});
	
	
	//--------------------------------------------------Modal Gallery View.
	/*
	var windowsWidth = $(window).width();
	console.log(windowsWidth);
	if(windowsWidth > 700) {
	$(".project_1").colorbox({rel:'group1'});
	$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;

	});

    $(".project_2").colorbox({rel:'group2'});
    $("#click").click(function(){ 
    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
      
    });
	}
	
	$(window).resize(function(http://localhost/cy-master/images/demo/gl/green-building-600x300.jpg){
	var windowsWidth = $(window).width();
	if(windowsWidth > 700) {
	$(".project_1").colorbox({rel:'group1'});
	$("#click").click(function(){ 
	$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
	});

    $(".project_2").colorbox({rel:'group2'});
    $("#click").click(function(){ 
    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
            return false;
    });
	}
	
	})
	*/
	
	
	$('#project_1').magnificPopup({
  delegate: 'div', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
    enabled:true
  }
  // other options
});

$('#project_2').magnificPopup({
  delegate: 'div', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
    enabled:true,
	navigateByImgClick: true,
  },
  image: {
    titleSrc: 'alt'
  }
  // other options
});
	
	//-----------------------------------------mobile screen slider.
	
	$(".slider_container").hide();
            var options = {
                 //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 1,
				$ArrowKeyNavigation: true,	
				
				 $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,
									//[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
			var jssor_slider2 = new $JssorSlider$("slider2_container", options);
			function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
				{
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
					jssor_slider2.$ScaleWidth(Math.min(parentWidth, 600));
				}	
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
	
	var windowsWidth = $(window).width();
	if(windowsWidth < 700){
	$(".slider_container").show();
	$(".gl_container").hide();
	}
	
	$(window).resize(function(){
	var windowsWidth = $(window).width();
	if(windowsWidth < 700) {
	
	$(".slider_container").show();
	$(".gl_container").hide();
	
	}
	
	if(windowsWidth > 700){
	
	$(".slider_container").hide();
	$(".gl_container").show();
	
	
	}
	})
	
	
	
	
function initialize() {
 // Create an array of styles.
  var styles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b1b1b3"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#3c3d41"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#525459"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f14e4e"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#1c262d"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [
            {
                "color": "#f14e4e"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "color": "#3c3d41"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "color": "#3c3d41"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#eeeeee"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "color": "#3c3d41"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#f14e4e"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#3c3d41"
            }
        ]
    }
];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(-35.2199659, 149.1444995),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style' ]
    }
  };
  var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
  var image = 'images/demo/markbig.png';
  var center = new google.maps.LatLng(-35.2199659, 149.1444995);
  var marker = new google.maps.Marker({
  position: center,
  icon: image
  });
  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

});
