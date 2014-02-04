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

function sidenav() {
    var sidedif = $('#side').width() - (($(window).width() - $('.wrap').width())/2);
    console.log(sidedif);
    $('a.menuside-trigger').click(function(){
        $('#side').toggleClass('moved');
        if ($('#side').hasClass('moved') == true) {
            $('body').css('right', sidedif);
        }
        else {
            $('body').css('right', 0);
        }
    });
}

$(document).ready(function() {

	fadelogo();
    sidenav();

	$('.post .autor .autores-trigger').click(function() {
		$(this).children('span.trigger').fadeToggle(150);
		$(this).children('span.untrigger').fadeToggle(150);
		$('ul.autores').fadeToggle(150);
	});

    $('menu .aux a.search').click(function() {
        $(this).toggleClass('on');
        $('#searchbox').fadeToggle(100);
        $('#searchbox input#field').select();
    })
	
});

$(window).bind('scroll', function(){

	fadelogo();

});

$( window ).resize(function() {

    sidenav();

});