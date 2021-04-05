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





$offset_editorial = 0;
$offset_video = 0;

$(".paginacion.editorial ul span").click(function(){
    $(".paginacion.editorial span").removeClass("active");
    $(this).addClass("active");
    $offset_editorial = $(this).attr("offset");
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
  

    jQuery.ajax({
        type: "POST",
        url: rootUrl+"ajax/editorial.php",
        data :  {
            'offset': $offset_editorial,
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

$(".paginacion.editorial .next").click(function(){
    
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
    $offset_editorial = (parseInt($offset_editorial) + parseInt($max_post));
    $max_offset = $(this).attr("max-offset");

    if ($offset_editorial <= parseInt($max_offset)) {
         jQuery.ajax({
            type: "POST",
            url: rootUrl+"ajax/editorial.php",
            data :  {
                'offset': $offset_editorial,
                'destacado': $destacado,
                'max_post': $max_post,
                'url': rootUrl,
            },
            dataType: 'json',
            async: true
        
        }).done(function(response){
           //console.log(response);
           $(".row-editorial").html(response);
           $(".paginacion.editorial span").removeClass("active");
           $(".paginacion.editorial span[offset='"+$offset_editorial+"']").addClass("active");
          

        }).fail(function(response){
            console.log(response.responseText);
        })
    }
});


$(".paginacion.editorial .previous").click(function(){
    
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
    $offset_editorial = (parseInt($offset_editorial) - parseInt($max_post));
    $max_offset = $(this).attr("max-offset");

    if ($offset_editorial >= 0) {
         jQuery.ajax({
            type: "POST",
            url: rootUrl+"ajax/editorial.php",
            data :  {
                'offset': $offset_editorial,
                'destacado': $destacado,
                'max_post': $max_post,
                'url': rootUrl,
            },
            dataType: 'json',
            async: true
        
        }).done(function(response){
           //console.log(response);
           $(".row-editorial").html(response);
           $(".paginacion.editorial span").removeClass("active");
           $(".paginacion.editorial span[offset='"+$offset_editorial+"']").addClass("active");
          

        }).fail(function(response){
            console.log(response.responseText);
        })
    }else{
        $offset_editorial = 0;
    }
});




$(".paginacion.video ul span").click(function(){
    $(".paginacion.video span").removeClass("active");
    $(this).addClass("active");
    $offset_video = parseInt( $(this).attr("offset"));
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
  

    jQuery.ajax({
        type: "POST",
        url: rootUrl+"ajax/video.php",
        data :  {
            'offset': $offset_video,
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


$(".paginacion.video .next").click(function(){
    
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
    $offset_video = (parseInt($offset_video) + parseInt($max_post));
    $max_offset = $(this).attr("max-offset");

    if ($offset_video <= parseInt($max_offset)) {
         jQuery.ajax({
            type: "POST",
            url: rootUrl+"ajax/video.php",
            data :  {
                'offset': $offset_video,
                'destacado': $destacado,
                'max_post': $max_post,
                'url': rootUrl,
            },
            dataType: 'json',
            async: true
        
        }).done(function(response){
           
           $(".row-video").html(response);
           $(".paginacion.video span").removeClass("active");
           $(".paginacion.video span[offset='"+$offset_video+"']").addClass("active");
          

        }).fail(function(response){
            console.log(response.responseText);
        })
    }
});


$(".paginacion.video .previous").click(function(){
    
    $destacado = $(this).attr("destacado");
    $max_post = $(this).attr("max_posts");
    $offset_video = (parseInt($offset_video) - parseInt($max_post));
    $max_offset = $(this).attr("max-offset");

    if ($offset_video >= 0) {
         jQuery.ajax({
            type: "POST",
            url: rootUrl+"ajax/video.php",
            data :  {
                'offset': $offset_video,
                'destacado': $destacado,
                'max_post': $max_post,
                'url': rootUrl,
            },
            dataType: 'json',
            async: true
        
        }).done(function(response){
           //console.log(response);
           $(".row-video").html(response);
           $(".paginacion.video span").removeClass("active");
           $(".paginacion.video span[offset='"+$offset_editorial+"']").addClass("active");
          

        }).fail(function(response){
            console.log(response.responseText);
        })
    }else{
        $offset_editorial = 0;
    }
});








$('#form-contact').submit(function( event ){

    event.preventDefault();
    var $form = $(this);

    captcha = grecaptcha.getResponse();

    var $submitBtn = $form.find('button');
    $submitBtn.prop('disabled', true);

    var $alert = $form.find('.alert');
    var action = $form.attr('action');

    var data = $form.serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});


  
    //Completar la venta
    jQuery.ajax({
        type: "POST",
        url: action,
        data :  {
            'data': data,
            'recaptcha': captcha,
        },
        dataType: 'json',
        async: true
    
    }).done(function(response){
        console.log(response);
        
        if(response.status == "success"){
            $(".hide-on-submit").hide();
            $(".show-on-submit").show();
        }
        else if(response.status == "error"){
            
            $alert.text(response.msg).fadeIn().delay(3400).fadeOut();
            $submitBtn.prop('disabled', false);

        }else{
           $submitBtn.prop('disabled', false);

        }

    }).fail(function(response){
        console.log(response.responseText);
    })
    
});