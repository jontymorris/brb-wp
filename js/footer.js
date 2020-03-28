function positionFooterContent() {
	let footer_height = $("#footer").outerHeight();
	$("body").css("margin-bottom", footer_height+"px");
}

$(document).ready(function() {
	positionFooterContent();
});

$(window).resize(function() {
	positionFooterContent();
});
