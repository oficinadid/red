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

    if ($(document).scrollTop() > 336) {
        $('menu#secondary').addClass('fixed');
        $('#main-shadow').addClass('down');
    }
    else {
        $('menu#secondary').removeClass('fixed');
        $('#main-shadow').removeClass('down');
    }

});

$(window).resize(function() {

    if ($('#side').hasClass('moved') == true) {
        var sidedif = $('#side').width() - (($(window).width() - $('.wrap').width())/2) - 3;
        $('body').css('right', sidedif).css('overflow', 'hidden');
    }

});