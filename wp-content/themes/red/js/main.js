(function ( $ ) {
	function fadelogo() {

	    var fadestart = 200;
	    var fadeend = 380;
	    var fadeelement = $('.home menu a.logo');
	    var totop = $(document).scrollTop();

	    if (totop < fadestart) {
	    	opacity = 0;
	    }
	    else if (totop >= fadestart && totop < fadeend) {
	    	opacity = (totop - fadestart)/ (fadeend - fadestart);
	    }
	    else if (totop >= fadeend) {
	    	opacity = 1;
	    }

	    fadeelement.css('opacity',opacity);
	}

	function addthis() {

	    // if ($(document).scrollTop() < 200) {
	    //     $('.addthis_floating_style').addClass('fixed');
	    // }
	    // else {
	    //     $('.addthis_floating_style').removeClass('fixed');
	    // }

	    // fadeelement.css('opacity',opacity);
	}

	function sidenav() {
	    var sidedif = $('#side').width() - (($(window).width() - $('.wrap').width())/2);
	    $('a.menuside-trigger').click(function(){
	        $('#side').toggleClass('moved');
	        $(this).toggleClass('on');
	        if ($('#side').hasClass('moved') == true) {
	            $('body').css('right', sidedif).css('overflow', 'hidden');
	        }
	        else {
	            $('body').css('right', 0).css('overflow', 'auto');
	        }
	    });
	}

	$(document).ready(function() {

		fadelogo();
	    addthis();
	    sidenav();

		$('.post .autor .autores-trigger').click(function() {
			$(this).children('span.trigger').fadeToggle(150);
			$(this).children('span.untrigger').fadeToggle(150);
	        $('#cortina').fadeToggle(150);
	        $(this).parent('.autor').toggleClass('on');
			$(this).next('ul.autores').fadeToggle(150);
		});

	    $('menu .aux a.search').click(function() {
	        $(this).toggleClass('on');
	        $('#searchbox').fadeToggle(100);
	        $('#searchbox input#field').select();
	    });

	    $('a#mobilemenu-trigger').click(function() {
	        $('#menu-mobile').slideToggle(400);
	    });

	    $('.filtros').hide();
	    $('a.filtro').click(function() {
	        $(this).toggleClass('on');
	        $('.filtros').slideToggle(200);
	    });

	});

	$(window).bind('scroll', function(){

		fadelogo();
	    addthis();

	    if ($(document).scrollTop() > 336) {
	        $('menu#secondary').addClass('fixed');
	    }
	    else {
	        $('menu#secondary').removeClass('fixed');
	    }

	});

	$(window).resize(function() {

	    if ($('#side').hasClass('moved') == true) {
	        var sidedif = $('#side').width() - (($(window).width() - $('.wrap').width())/2) - 3;
	        $('body').css('right', sidedif).css('overflow', 'hidden');
	    }

	});
}( jQuery ));