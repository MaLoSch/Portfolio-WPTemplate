function disableScrolling() {
	// add overflow:hidden; to the body in the html file
	$('body').css("overflow","hidden");
}

// call disableScrolling() asap (not waiting for the document to be ready)
disableScrolling();
