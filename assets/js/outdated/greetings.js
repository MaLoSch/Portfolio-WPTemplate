function getGreeting() {
	var date = new Date();
	var hours = date.getHours();
	var greeting = "";
			 
	if (hours >= 0 && hours < 10) {
		var greeting = "Good morning!";
	} else if (hours >= 10 && hours < 15) {
		var greeting = "Hi!";
	} else if (hours >= 15 && hours < 18) {
		var greeting = "Good afternoon!";
	} else if (hours >= 18) {
		var greeting = "Good evening!";
	}

	//$('#greetings').text(greeting);
	document.getElementById("pushyGreeting").innerHTML = greeting;
	document.getElementById("sidebarGreeting").innerHTML = greeting;
}

window.onload = getGreeting;