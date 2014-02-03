function fadelogo() {

    var fadestart = 200;
    var fadeend = 380;
    var fadeelement = $('menu#main a.logo');
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

function sidemenu() {


}

$(document).ready(function() {

	fadelogo();
    sidemenu();

    $('a.menuside-trigger').bigSlide({
        menu: ('#side'),
        side: 'right',
        menuWidth: 430
    });

	$('.post .autor .autores-trigger').click(function() {
		$(this).children('span.trigger').fadeToggle(150);
		$(this).children('span.untrigger').fadeToggle(150);
		$('ul.autores').fadeToggle(150);
	});

    $('menu#main .aux a.search').click(function() {
        $(this).toggleClass('on');
        $('#searchbox').fadeToggle(100);
        $('#searchbox input#field').select();
    })
	
});

$(window).bind('scroll', function(){

	fadelogo();
    sidemenu();

});