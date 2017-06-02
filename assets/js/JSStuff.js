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
		"The world is a thing of utter inordinate complexity and richness and strangeness that is absolutely awesome. I mean the idea that such complexity can arise not only out of such simplicity, but probably absolutely out of nothing, is the most fabulous extraordinary idea. And once you get some kind of inkling of how that might have happened, it's just wonderful. And … the opportunity to spend 70 or 80 years of your life in such a universe is time well spent as far as I am concerned.",
		"A common mistake that people make when trying to design something completely foolproof is to underestimate the ingenuity of complete fools.",
		"'Gravity,' said Dirk with a slightly dismissed shrug, 'yes, there was that as well, I suppose. Though that, of course, was merely a discovery. It was there to be discovered.' … 'You see?' he said dropping his cigarette butt, 'They even keep it on at weekends. Someone was bound to notice sooner or later. But the catflap … ah, there is a very different matter. Invention, pure creative invention. It is a door within a door, you see.'",
		"Any man who can hitch the length and breadth of the galaxy, rough it, slum it, struggle against terrible odds, win through, and still know where his towel is, is clearly a man to be reckoned with.",
		"There is an art, it says, or rather, a knack to flying. The knack lies in learning how to throw yourself at the ground and miss. Clearly, it is this second part, the missing, which presents the difficulties.",
		"Rain type 17 was a dirty blatter battering against his windscreen so hard that it didn't make much odds whether he had his wipers on or off. He tested his theory by turning them off briefly, but as it turned out the visibility did get quite a lot worse. It just failed to get better again when he turned them back on.",
		"The Hitchhiker's Guide to the Galaxy is a powerful organ. Indeed, it's influence is so prodigious that strict rules have had to be drawn up by its editorial staff to prevent misuse. So none of its field researchers are allowed to accept any kind of services, discounts or preferential treatment of any kind in return for editorial favours unless: a) they have made a bona fide attempt to pay for a service in a normal way; b) their lives would be otherwise in danger; c) they really want to.",
		"This appealed to Arthur's sense of logic. Since the Electricity Board cut him off without fail every time he paid his bill, it seemed only reasonable that they should leave him connected when he didn't. Sending them money obviously only drew attention to yourself.",
		"He lay still and quiet. He absorbed the enveloping darkness, slowly relaxed his limbs from end to end, eased and regulated his breathing, gradually cleared his mind of all thought, closed his eyes and was completely incapable of getting to sleep.",
		"The only thing he could think was that they were obviously going to die, and if he wanted anything other than the obvious to happen he was going to have to do something other than the obvious. Here he felt he was on familiar ground.",
		"He went across to the telephone machine and fiddled and fumed with all its buttons for a while because it was the one which was particularly recommended by 'Which?' magazine and is almost impossible to use without going mad.",
		"This is an important announcement. This is flight 121 to Los Angeles. If your travel plans today do not include Los Angeles, now would be the perfect time to disembark.",
		"There is a theory that which states that if ever anyone discovers exactly what the Universe is for and why it is here, it will instantly be replaced by something even more bizarre and inexplicable. There is another theory which states that this has already happened.",
		"They concentrated. Still they concentrated. And still they concentrated.",
		"They were a double pair of Joo Janta 200 Super-Chromatic Peril Sensitive Sunglasses, which had been specifically designed to help people develop a relaxed attitude to danger. At the first hint of trouble they turn totally black and thus prevent you from seeing anything that might alarm you.",
		"'Let me indtroduce myself,' the man said, 'My name is Roosta, and this is my towel.' 'Hello Roosta,' said Zaphod. 'Hello, towel,' he added after Roosta held out to him a rather nasty old flowery towel. Not knowing what to do with it, he shook it by the corner.",
		"Arthur Dent was grappling with his consciousness the same way one grapples with a lost bar of soap in the bathroom.",
		"The Hitchhiker's Guide to the Galaxy offers this definition to the word 'infinite'. Infinite: Bigger than the biggest thing ever and then some. Much bigger than that in fact, really amazingly immense, a totally stunnig size, real 'wow, that's big', time. Infinity is just so big that by comparison, bigness itself looks really titchy. Gigantic multiplied by colossal multiplied by staggeringly huge is the sort of concept we're trying to get across here.",
		"'It's the wild color scheme that freaks me,' said Zaphod minutes into the flight, 'Every time you try to operate one of these weird black controls that are labelled in black on a black background, a little black light lights up to let you know you've done it.'",
		"'You know what I'm thinking?' he said. 'I think so,' said Ford. 'Tell me what you're thinking I'm thinking.' 'I think you're thinking it's time to get off this ship.' 'I think you're right,'said Zaphod. 'I think you're right,' said Ford. 'How?' said Arthur. 'Quiet,' said Ford and Zaphod, 'we're thinking.'",
		"To summarize the summary of the summary: people are a problem.",
		"They stood there alone on a hill on prehistoric Earth and stared each other resolutely in the face. 'And it's done what?' said Arthur. 'It' said Ford, 'has developed pools of instability.' 'Has it?' said Arthur, his eyes not wavering for a moment. 'It has,' said Ford with a similar degree of ocular immobility. 'Good,' said Arthur. 'See?' said Ford. 'No,' said Arthur. There was a quiet pause.",
		"He was staring at the instruments with the air of one who is trying to convert Fahrenheit to centigrade in his head whilst his house is burning down.",
		"The music was going bananas with immensity at this point.",
		"He poured a drink down his other throat with the plan that it would head the previous one off at the pass, join forces with it, and together they would get the second to pull itself together. Then all three would go off in the search for the first, give it a good talking to and maybe a bit of sing as well. He felt uncertain as to whether the fourth drink had understood all that, so he sent down a fifth to explain the plan more fully and a sixth for moral support. [...] He grunted. There seemed to be a terrific party going on in his stomach.",
		"A magician wandered along the beach, but no one needed him.",
		"... he took his towel from out of his holdall and did something with it which once again justified its supreme position of the lists of useful things to take with you when you are hitchhiking round the Galaxy. He put it over his head so he wouldn't have to see what he was doing.",
		"Arthur started to choke violently on his drink. 'What a wonderfully exciting cough,' said the little man, quite startled by it, 'do you mind if I join you?' And with that he launched into the most extraordinary and spectacular fit of coughing which caught Arthur so much by surprise that he started to choke violently, discovered he was already doing it and got thoroughly confused. Together they performed a lung-busting duet which went on for fully two minutes before Arthur managed to cough and splutter to a halt. 'So invigorating,' said the little man, panting and wiping tears from his eyes.",
		"'I said, I like the hat.' 'I'm not wearing a hat.' 'Well, I like the head, then.' 'What?' 'I said, I like the head. Interesting bone-structure.'",
		"It is a mistake to think you can solve any major problems just with potatoes.",
		"It was real. At least, if it wasn't real, it did support them, and as that is what sofas are supposed to do, this, by any test that mattered, was a real sofa.",
		"He hoped and prayed that there wasn't an afterlife. Then he realized there was a contradiction involved here and merely hoped that there wasn't an afterlife.",
		"He had extracted himself from the Cambridge one-way system by the usual method, which involved going round and round it faster and faster until he achieved a sort of escape velocity and flew off at a tangent in a random direction, which he was now trying to identify and correct for.",
		"Number Two's eyes narrowed and became what are known in the Shouting and Killing People trade as cold slits, the idea presumably being to give your opponent the impression that you have lost your glasses or are having difficulty keeping awake. Why this is frightening is an, as yet, unresolved problem.",
		"Not only is it a wholly remarkable book, it is also a highly successful one - more popular than the Celestial Home Care Omnibus, better selling than  Fifty-three More Things to do In Zero Gravity, and more controversial than Oolon Colluphid's trilogy of philosophical blockbusters Where God Went Wrong, Some More of God's Greatest Mistakes, and Who is this God Person Anyway?",
		"Not a remarkable house by any means - it was about thirty years old, squattish, squarish, made of brick, and had four windows set in the front of a size and proportion which more or less exactly failed to please the eye.",
		"Everything was ready, everything was prepared. He knew where his towel was.",
		"'You just come along with me and have a good time. The Galaxy's a fun place. You'll need to have this fish in your ear.'",
		"'You know,' said Arthur, 'it's at times like this, when I'm trapped in a Vogon airlock with a man from Betelgeuse, and about to die from asphyxiation in deep space that I really wish I'd listened to what my mother told me when I was young.' 'Why, what did she tell you?' 'I don't know, I didn't listen.'",
		"'So this is it,' said Arthur, 'we are going to die.' 'Yes,' said Ford, 'except... no! Wait a minute!' he suddenly lunged across the chamber at something behind Arthur's line of vision. 'What's this switch?' he cried. 'What? Where?' cried Arthur twisting around. 'No, I was only fooling,' said Ford, 'we are going to die after all.'",
		"For years radios had been operated by means of pressing buttons and turning dials;  then as technology became more sophisticated the controls were made touch-sensitive - you merely had to brush the panels with your fingers; now all you had to do was wave your hand in the general direction of the component and hope. It saved a lot of muscular expenditure of course but meant that you had to sit infuriatingly still if you wanted to keep listening to the same program.",
		"'Can you fly her?' asked Ford pleasantly. 'No, can you?' 'No.' 'Trillian, can you?' 'No.' 'Fine,' said Zaphod, relaxing. 'We'll do it together.'",
		"For instance, on the planet Earth, man had always assumed that he was more intelligent than dolphins because he had achieved so much - the wheel, New York, wars and so on - whilst all the dolphins had ever done was muck about in the water having a good time. But conversely, the dolphins had always believed that they were far more intelligent than man - for precisely the same reasons.",
		"For a moment, nothing happened. Then, after a second or so, nothing continued to happen."
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
    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 100px
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
