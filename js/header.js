function resizeHeader() {
	let window_width = $(window).width();
	let window_height = $(window).height();

	let nav_height = $("#navigation").outerHeight();

	if (window_width <= 1000) {
		let header_height = window_height - nav_height;
		$("#header").css("height", header_height+"px");
	}

	else {
		$("#header").css("height", window_height+"px");	
	}
}

function centerHeaderContent() {
	let header_height = $("#header").height();

	// Calculate center positions
	let content_height = $("#header-content").height();
	let middle_pos = (header_height - content_height) / 2;
	let sub_pos = middle_pos+(content_height/2);

	// Center the header content
	$("#header-content").css("top", middle_pos+"px");
	$("#header-sub").css("top", sub_pos+"px");
}

$(document).ready(function() {
	resizeHeader();
	centerHeaderContent();
});

$(window).resize(function() {
	resizeHeader();
	centerHeaderContent();
});

$("#header-button").click(function(){
	$('html').animate({scrollTop: $('#content').offset().top}, 750);
	$('body').animate({scrollTop: $('#content').offset().top}, 750);
});