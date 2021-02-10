var rootUrl = $('meta[name="root-url"]').attr('content');

$(function(){


	$(".burger").click(function(){
		$("nav").toggleClass("open");

	});

	$("nav").css("display","flex");

	

	if (location.hash != "") {
		$(window).scrollTop(0);
		$('html, body').animate({

	        scrollTop: $(location.hash).offset().top - $("header").innerHeight()
	    }, 800, function(){
	    });	
	}
});





document.querySelectorAll('a').forEach(anchor => {
	anchor.addEventListener('click', function (e) {
		var hash = this.hash;

        if ($(hash).length > 0) {
        	e.preventDefault();

	        $("nav").removeClass("open");
	        	       
	        $('html, body').animate({

		        scrollTop: $(hash).offset().top - $("header").innerHeight()
		    }, 800, function(){
		    });	
        }
        
	});	
});	










if( $('.forma').length > 0 ){
    $('.forma').one('isVisible', animate_shape);

    $(window).on('scroll', function(){
        $('.forma').each(function(){
            
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }

        });
    });
    $(document).ready(function(){
        $('.forma').each(function(){
            
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }

        });
    });
}

if( $('.fadeUp').length > 0 ){
    $('.fadeUp').one('isVisible', fadeUp);

    $(window).on('scroll', function(){
        $('.fadeUp').each(function(){
            
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }

        });
    });
    $(document).ready(function(){
        $('.fadeUp').each(function(){
            
            if( isInViewPort( $(this) ) ){
                $(this).trigger('isVisible');
            }

        });
    });
}


function animate_shape( ){
	 $(this).addClass("active")
}

function fadeUp(){
	$(this).addClass("animated");
}


function isInViewPort ( element ) {

    if( $(element).length == 0 ) return false;
    var elementTop = $(element).offset().top;
    var elementBottom = elementTop + $(element).outerHeight();
    var viewportTop = $(window).scrollTop() ;
    var viewportBottom = viewportTop + $(window).height() - 100 ;
    return elementBottom > viewportTop && elementTop < viewportBottom;
    
};







$(".paginacion.editorial span").click(function(){
    $(".paginacion.editorial span").removeClass("active");
    $(this).addClass("active");
    $offset = $(this).attr("offset");
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
  

    jQuery.ajax({
        type: "POST",
        url: rootUrl+"ajax/editorial.php",
        data :  {
            'offset': $offset,
            'destacado': $destacado,
            'max_post': $max_post,
            'url': rootUrl,
        },
        dataType: 'json',
        async: true
    
    }).done(function(response){
       //console.log(response);
       $(".row-editorial").html(response);
      

    }).fail(function(response){
        console.log(response.responseText);
    })
});






$(".paginacion.video span").click(function(){
    $(".paginacion.video span").removeClass("active");
    $(this).addClass("active");
    $offset = $(this).attr("offset");
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
  

    jQuery.ajax({
        type: "POST",
        url: rootUrl+"ajax/video.php",
        data :  {
            'offset': $offset,
            'destacado': $destacado,
            'max_post': $max_post,
            'url': rootUrl,
        },
        dataType: 'json',
        async: true
    
    }).done(function(response){
       //console.log(response);
       $(".row-video").html(response);
      

    }).fail(function(response){
        console.log(response.responseText);
    })
});