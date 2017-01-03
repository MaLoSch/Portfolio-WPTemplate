function doJSStuffs() {
	// get greeting according to time
	getGreeting();
	// load a new quote from douglas adams
	loadQuote();
}

function getGreeting() {
	// get current time
	var date = new Date();
	var hours = date.getHours();
	var month = date.getMonth();
	
	// default greeting
	var greeting = "Hello!";
	
	// late
	if (hours >= 0 && hours < 5) {
		var greeting = "Still awake?";
	} else if (hours >= 5 && hours < 9) {
	// mornings
		var greeting = "Good morning!";
	} else if (hours >= 9 && hours < 15) {
	// during the day
		var greeting = "Hey!";
	} else if (hours >= 15 && hours < 19) {
	// afternoon
		var greeting = "Good afternoon!";
	} else if (hours > 19) {
	// nights
		var greeting = "Good evening!";
	}
	
	// update greeting
	document.getElementById("pushyGreeting").innerHTML = greeting;
	document.getElementById("sidebarGreeting").innerHTML = greeting;
}

function loadQuote() {
	var quotes = new Array(
		"We are stuck with technology when what we really want is just stuff that works.", 
		"Solutions nearly always come from the direction you least expect, which means there's no point trying to look in that direction because it won't be coming from there.",  
		"A learning experience is one of those things that say, 'You know that thing you just did? Don't do that.'",
		"Time is an illusion. Lunchtime doubly so.",
		"The world is a thing of utter inordinate complexity and richness and strangeness that is absolutely awesome. I mean the idea that such complexity can arise not only out of such simplicity, but probably absolutely out of nothing, is the most fabulous extraordinary idea. And once you get some kind of inkling of how that might have happened, it's just wonderful. And … the opportunity to spend 70 or 80 years of your life in such a universe is time well spent as far as I am concerned.",
		"A common mistake that people make when trying to design something completely foolproof is to underestimate the ingenuity of complete fools.",
		"'Gravity,' said Dirk with a slightly dismissed shrug, 'yes, there was that as well, I suppose. Though that, of course, was merely a discovery. It was there to be discovered.' … 'You see?' he said dropping his cigarette butt, 'They even keep it on at weekends. Someone was bound to notice sooner or later. But the catflap … ah, there is a very different matter. Invention, pure creative invention. It is a door within a door, you see.'",
		"Any man who can hitch the length and breadth of the galaxy, rough it, slum it, struggle against terrible odds, win through, and still know where his towel is, is clearly a man to be reckoned with.",
		"There is an art, it says, or rather, a knack to flying. The knack lies in learning how to throw yourself at the ground and miss. Clearly, it is this second part, the missing, which presents the difficulties.",
		"Rain type 17 was a dirty blatter battering against his windscreen so hard that it didn't make much odds whether he had his whipers on or off. He tested his theory by tunring them off briefly, but as it turned out the visibility did get quite a lot worse. It just failed to get better again when he turned them back on.",
		"The Hitchhiker's Guide to the Galaxy is a powerful organ. Indeed, it's influence is so prodigious that strict rules have had to be drawn up by its editorial staff to prevent misuse. So none of its field researchers are allowed to accept any kind of services, discounts or preferential treatmant of any kind in return for editorial favours unless: a) they have made a bona fida attempt to pay for a service in a normal way; b) their lives would be otherwise in danger; c) they really want to.",
		"This was the pub at which he had passed the fateful lunchtime during which whatever it was had happened that he was going to sort out later had happened, and... It still didn't make sense. He started again. This was the pub in which... This was a pub. Pubs served drinks and he couldn't half do with one. Satisfied that his jumbled thought processes had at least arrived at a conclusion, and a conclusion he was happy with, even if it wasn't the one he had set out to achieve, he strode towards the door.",
		"This appealed to Arthur's sense of logic. Since the Electricity Board cut him off without fail every time he paid his bill, it seemed only reasonable that they should leave him connected when he didn't. Sending them money obviously only drew attention to yourself.",
		"He lay still and quiet. He absorbed the enveloping darkness, slowly relaxed his limbs from end to end, eased and regulated his breathing, gradually cleared his mind of all thought, closed his eyes and was completely incapable of getting to sleep.",
		"The only thing he could think was that they were obviously going to die, and if he wanted anything other than the obvious to happen he was going to have to do something other than the obvious. Here he felt he was on familiar ground.",
		"He went across to the telephone machine and fiddled and fumed with all its buttons for a while, because it was the one which was particularly recommended by 'Which?' magazine and is almost impossible to use without going mad.",
		"This is an important announcement. This is flight 121 to Los Angeles. If your travel plans today do not include Los Angeles, now would be the perfect time to disembark.",
		"The sign said: Hold stick near center of its length. Moisten pointed end in mouth. Insert in tooth space, blunt end next to gum. Use gentle in-out motion. 'It seemed to me', said Wonko the Sane,'that any civilization that had so far lost its head as to need to include a set of detailled instructions for use in a packet of toothpicks, was no longer a civilization in which I could live and stay sane'.",
		"There is a theory that which states that if ever anyone discovers exactly what the Universe is for and why it is here, it will instantly be replaced by something even more bizarre and inexplicable. There is another theory which states that this has already happened.",
		"They concentrated. Still they concentrated. And still they concentrated.",
		"They were a double pair of Joo Janta 200 Super-Chromatic Peril Sensetive Sungalsses, which had been specifically designed to help people develop a relaxed attitude to danger. At the first hint of trouble they turn totally black and thus prevent you from seeing anything that might alarm you.",
		"'Marvin', he said, 'just get this elevator to go up will you? We've got to get to Zarniwoop.''Why?' asked Marvin doubtfully. 'I don't know,' said Zaphod,'but when I find him, he'd better have a very good reason for me to see him.'",
		"'Let me indtroduce myself,' the man said,'My name is Roosta, and this is my towel.''Hello Roosta,' said Zaphod.'Hello, towel,' he added after Roosta held out to him a rather nasty old flowery towel. Not knowing what to do with it, he shook it by the corner.",
		"Arthur Dent was grappling with his consciousness the same way one grapples with a lost bar of soap in the bathroom.",
		"The Hitchhiker's Guide to the Galaxy offers this definition to the word 'infinite'. Infinite: Bigger than the biggest thing ever and then some. Much bigger than that in fact, really amazingly immense, a totally stunnig size, real 'wow, that's big', time. Infinity is just so big that by comparison, bigness itself looks really titchy. Gigantic multiplied by colossal multiplied by staggeringly huge is the sort of concept we're trying to get across here.",
		"'It's the wild color scheme that freaks me,' said Zaphod minutes into the flight, 'Every time you try to operate one of these weird black controls that are labelled in black on a black background, a little black light lights up to let you know you've done it.'",
		"'You know what I'm thinking?' he said. 'I think so,' said Ford. 'Tell me what you're thinking I'm thinking.' 'I think you're thinking it's time to get off this ship.' 'I think you're right,'said Zaphod. 'I think you're right,' said Ford. 'How?' said Arthur. 'Quiet,' said Ford and Zaphod, 'we're thinking.'",
		"To summarize the summary of the summary: people are a problem."
	);
	
	while(randno == prev) {
	    var randno = Math.floor(Math.random()*(quotes.length))
	}
		
	var prev = randno;
    $('#loadedQuote').text('"'+quotes[randno]+'"');
}

// when site is loaded > do stuff
window.onload = doJSStuffs;

// function when 'reload' button is clicked on 404 page
$('.reload').click(function(e) {  
    loadQuote();
});

// scroll to top
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});