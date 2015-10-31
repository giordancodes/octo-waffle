$(function(){
	//your jQuery here

// datepicker
	$( '#bookDate' ).datepicker();

	$( '.hamburger' ).on( 'click', function(e){
		e.preventDefault();
		$( '#hiddenNav' ).removeClass('visible').addClass('invisible');
		
	});

});