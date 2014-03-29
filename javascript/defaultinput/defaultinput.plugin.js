/* 
 * Plugin DefaultInput ( 2009-07-18 )
 * Last modified: 2009-07-27
 * By Han Lin Yap ( http://www.zencodez.net ) 			
 * (CC) 2009 Han Lin Yap. Some Rights Reserved. 		
 * http://creativecommons.org/licenses/by/3.0  			
 * This is licensed under a Creative Commons License. 	

 * element.defaultInput();
 * Params 	o (string) input value
			c (bool) change color
 */
jQuery.fn.defaultInput = function(o,c) {
	var o = o || this.val(); // input value
	var c = c || false; // change color
	this.each(function() {
		if ($(this).val() == '') {
			if (c) {
				$(this).css('color','#E0E0E0');
			}
			$(this).val(o);
		}
		$(this).focus(function() {
			if (o == $(this).val()) {
				if (c) {
					$(this).css('color','#000');
				}
				$(this).val('');
			}
		});
		$(this).blur(function() {
			if ('' == $(this).val()) {
				if (c) {
					$(this).css('color','#E0E0E0');
				}
				$(this).val(o);
			}
		});
	});
	
	// allow chaining
	return this;
}