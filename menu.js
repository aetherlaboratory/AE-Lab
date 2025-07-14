
$(document).ready(function() {



$('.menu-btn').on('click', function() {
	if ($('.mobile-menu').hasClass('d-none')) {
		$('.mobile-menu').removeClass('d-none').addClass('d-block');
	} else if ($('.mobile-menu').hasClass('d-block')) {
		$('.mobile-menu').removeClass('d-block').addClass('d-none');
	}
});

$('.close-btn').on('click', function() {
	if ($('.mobile-menu').hasClass('d-none')) {
		$('.mobile-menu').removeClass('d-none').addClass('d-block');
	} else if ($('.mobile-menu').hasClass('d-block')) {
		$('.mobile-menu').removeClass('d-block').addClass('d-none');
	}
});


  $('.search-btn').on('click', function() {
	if ($('.searchform').hasClass('d-none')) {
		$('.searchform').removeClass('d-none').addClass('d-block');
	} else if ($('.searchform').hasClass('d-block')) {
		$('.searchform').removeClass('d-block').addClass('d-none');
	}
});


});