(function($){

var gf_placeholder = function() {

	$('.gform_wrapper .gf-add-placeholder')
		.find('input, textarea').filter(function(i){
			var $field = $(this);

			if (this.nodeName == 'INPUT') {
				var type = this.type;
				return !(type == 'hidden' || type == 'file' || type == 'radio' || type == 'checkbox');
			}

			return true;
		})
		.each(function(){
			var $field = $(this);

			var id = this.id;
			var desc_id = id.replace('input', 'field');
			var $labels = $('label[for=' + id + ']').hide();
			var $desc = $('li#'+ desc_id +' .gfield_description').hide();
			var label = $labels.last().text();
			var desc = $desc.last().text();

			if (desc.length > 0 && desc[ desc.length-1 ] == '*') {
				desc = desc.substring(0, desc.length-1) + ' *';
			}

			$field[0].setAttribute('placeholder', desc);
		});

	var support = (!('placeholder' in document.createElement('input')));
	if ( support && jquery_placeholder_url )
		$.ajax({
			cache: true,
			dataType: 'script',
			url: jquery_placeholder_url,
			success: function() {
				$('input[placeholder], textarea[placeholder]').placeholder({
					blankSubmit: true
				});
			},
			type: 'get'
		});

    $('.gform_wrapper .gplaceholder').find('select').filter(function(i){
        var $theSelect = $(this);

       $theSelect.each(function(){
           var elementID = this.id;
           var inIdFormat = "#" + elementID;
           var theLabel = $('label[for=' + elementID + ']').text();
           console.log('The id for this field is '+ elementID + ' the label for this field is ' + theLabel);
           $(inIdFormat).prepend("<option class='placeholder' selected disabled value=" + "'" + theLabel + "'" + ">" + theLabel + "</option>" );
            $('label[for=' + elementID + ']').hide();

       })
    });







};

$(document).ready(function(){
	gf_placeholder();
	$(document).bind('gform_page_loaded', gf_placeholder);
});

})(jQuery);