$(function () {
	/*Scroll to top when arrow up clicked BEGIN*/
	$(window).scroll(function () {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#gototop').fadeIn();
		} else {
			$('#gototop').fadeOut();
		}
	});
	$(document).ready(function () {
		$("#gototop").click(function (event) {
			event.preventDefault();
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	});
	/*Scroll to top when arrow up clicked END*/

	// for add year
	$('.year').each(function () {
		$(this).text(new Date().getFullYear());
	});
});