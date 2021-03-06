<?php
	header("Content-type: text/css");

	include_once 'color.php'; // include color.php file to have access to $currentColor
	$highlight = $currentColor;
	$white = '#fff';
	$snow = '#fefefe';
?>

/*
Theme Name: Portfolio
Description: Template for my online portfolio
Author: Markus Lorenz Schilling
Author URI: http://malosch.com
*/



/********** NON-RESPONSIVE **********/

/* General structure */
* {	margin: 0; padding: 0; color: #444; -webkit-font-smoothing: antialiased; }
html, body { font-family: 'bariol_regular'; font-size: 18px; background-color: #fcfcfc; overflow-x: hidden; }
.clear { clear: both; }
.header { height: auto; } /* header including the colored line + respsonsive menu button + hex color code */
#headerLine { height: 1px; width: 100%; background-color:<?=$highlight?>; } /* colored line on top of page */
#footer p { margin: 16px 0 112px; float:left; font-size: 13px; }

/* Headings */
h1 { font-family: 'bariol_regular'; font-size: 21px; margin: 16px 0 32px; }
h2 { font-family: 'bariol_regular'; font-size: 21px; margin-bottom: 32px; }
h3 { font-family: 'bariol_light'; font-size: 21px; margin: 32px 0 24px 0; color: <?=$highlight?>; } /* color needed for h3 on publication page */
.light { font-family: 'bariol_light'; }

/* Navigation panel */
.pushy { background: <?=$highlight?>; } /* pushy (mobile navigation) background */
.white { color: <?=$snow?>; } /* used by the greeting (hi, hey, good evening, ...) in the pushy navigation */
.pushy h3 { color: <?=$snow?>; }
.pushy div * { color: <?=$snow?>; }
ul { list-style-type: none; }

/* Ditty News Ticker */
.mtphr-dnt h3 { font-family: 'bariol_regular'; margin: 48px 0 0 0; }
.mtphr-dnt-tick-contents { padding-bottom: 1px; }

/* TwentyTwenty-Wrapper */
.twentytwenty-wrapper {
	margin-bottom: 16px;
}

/* Links */
a { font-family: 'bariol_regular_italic'; text-decoration:none; border-bottom: 1px solid <?=$highlight?>; color: #111; -webkit-animation: color-change 5s ease-in-out infinite; -moz-animation: color-change 5s ease-in-out infinite; -o-animation: color-change 5s ease-in-out infinite; -ms-animation: color-change 5s ease-in-out infinite; animation: color-change 5s ease-in-out infinite; }
a:hover { color:<?=$highlight?>; border-bottom: 0px; }
a:visited { font-family: 'bariol_regular_italic'; text-decoration:none; border-bottom: 1px solid <?=$highlight?>; -webkit-animation: color-change 5s ease-in-out infinite; -moz-animation: color-change 5s ease-in-out infinite; -o-animation: color-change 5s ease-in-out infinite; -ms-animation: color-change 5s ease-in-out infinite; animation: color-change 5s ease-in-out infinite; }
li a { border-bottom: 0px; }
.pushy a { color:<?=$white?>; border-bottom: 1px solid <?=$white?>; -webkit-animation: color-change-pushy 5s ease-in-out infinite; -moz-animation: color-change-pushy 5s ease-in-out infinite; -o-animation: color-change-pushy 5s ease-in-out infinite; -ms-animation: color-change-pushy 5s ease-in-out infinite; animation: color-change-pushy 5s ease-in-out infinite; }
.pushy a:hover { color:<?=$white?>; border-bottom: 0px; }
.pushy a:visited { color:<?=$white?>; border-bottom: 1px solid <?=$white?>; -webkit-animation: color-change-pushy 5s ease-in-out infinite; -moz-animation: color-change-pushy 5s ease-in-out infinite; -o-animation: color-change-pushy 5s ease-in-out infinite; -ms-animation: color-change-pushy 5s ease-in-out infinite; animation: color-change-pushy 5s ease-in-out infinite; }
.pushy li a { border-bottom: 0px; }

/* Colors */
.highlightColor { color:<?=$highlight?>; }
::-moz-selection { background: <?=$highlight?>; color:<?=$snow?>; } /* use highlight color as background color for selections */
::selection { background: <?=$highlight?>; color:<?=$snow?>; } /* use highlight color as background color for selections */

/* Project links */
.featureImg { width:100%; height: 176px; overflow:hidden; position:relative; margin: 0 0 8px 0; display: inline-block; }
.featureImg img { width: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; }
.featureImgBackup { width: 100%; height: 176px; background: <?=$highlight?>; }
.mask { background-color:<?=$highlight?>; display: table; width: calc(100% - 32px); height: 144px; padding:16px; float: left; position: absolute; left: 0px; top: 0px; opacity: 0; text-align: center; transition: opacity .5s ease-in-out; -moz-transition: opacity .25s ease-in-out; -webkit-transition: opacity .25s ease-in-out; }
.mask:hover { opacity: 0.89; }
.mask span { color: <?=$white?>; font-size: 21px; display: table-cell; vertical-align: middle; top: -10px; }
.excerpt { padding-right: 16px; font-size: 16px; margin-top: 8px; }

/* Project page */
.project_description { max-width: 100%; margin: 0 0 16px 0; float: left; }
.project_quote { width: calc(100% - 32px); float: left; text-align: center; border: 1px; border-color: <?=$highlight?>; color: <?=$highlight?>; margin: 16px 0 32px 0; border-style: solid none; padding: 16px; font-size: 26px; font-family: 'bariol_regular_italic'; }
.date { width: 298px; float: left; margin: 0 0 16px 0; }

/* Images */
img { vertical-align: top; max-width: 100%; height: auto; margin: 0 0 16px 0; float: left; } /* scale images to width of content but never larger than their actual size */
#contact img { margin: 0; width: 32px; height: 32px; }
.size-full { margin: 0 0 16px 0; width: 100%; }

/* 404 */
#DouglasAdams { text-align: center; }
.reload { cursor: pointer;margin: 0 0 48px 0; }

/* About */
#contact { width: 100%; float:left; margin: 0 0 32px 0; }
#profilePic { max-width: 926px; height: 320px; margin: 0 0 32px 0; background-image: url("assets/profilePic/profilePic.jpg"); background-position: center center; }
#bio { width: 100%; margin: 0 0 48px 0; }

/* Videos */
iframe { margin-bottom: 11px; } /*usually margin-bottom is 16px but the iframe has a default margin of 5px which I can't find/remove */

/* Archive */
.categories_ul li { display: inline-block; }
.categories_ul li a { display:block; background-color: <?=$white?>; padding: 0px 10px; color: <?=$highlight?>; border: 1px solid <?=$highlight?>; font-size:13px; font-family: 'bariol_regular'; transition: all 0.25s ease-in-out; margin-top: 4px; -webkit-animation: none; -moz-animation: none; -o-animation: none; -ms-animation: none; animation: none; }
.categories_ul li a:visited { color: <?=$highlight?>; border: 1px solid <?=$highlight?>; -webkit-animation: none; -moz-animation: none; -o-animation: none; -ms-animation: none; animation: none; }
.categories_ul li a:hover { background-color: <?=$highlight?>; color: <?=$white?>; }
.categories_ul li.current-cat a { background-color: <?=$highlight?>; color: <?=$white?>; }

/* Category list beneath each post on the archive overview page */
.categories_archive { margin-top: 8px; font-size: 16px; font-family: 'bariol_regular'; padding-right: 8px; }

/* Back to top button */
#return-to-top { border: 1px solid <?=$highlight?>; background-color: <?=$white?>; position: fixed; bottom: 16px; left: 50%; width: 64px; height: 64px; display: block; text-decoration: none; display: none; -webkit-transition: all 0.3s ease-in-out; -moz-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out;  transition: all 0.3s ease-in-out; -webkit-animation: none; -moz-animation: none; -o-animation: none; -ms-animation: none; animation: none; }
#return-to-top i { color: <?=$highlight?>; margin: 0; position: relative; left: 22px; top: 21px; font-size: 21px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out; }
#return-to-top:hover { background-color: <?=$highlight?>; }
#return-to-top:hover i { color: <?=$white?>; top: 13px; }



/********** ANIMATION **********/

@-webkit-keyframes color-change {
	35%, 65% { border-bottom-color: <?=$highlight?>; }
	50% { border-bottom-color: <?=$snow?>; }
}

@-moz-keyframes color-change {
	35%, 65% { border-bottom-color: <?=$highlight?>; }
	50% { border-bottom-color: <?=$snow?>; }
}

@-ms-keyframes color-change {
	35%, 65% { border-bottom-color: <?=$highlight?>; }
	50% { border-bottom-color: <?=$snow?>; }
}

@-o-keyframes color-change {
	35%, 65% { border-bottom-color: <?=$highlight?>; }
	50% { border-bottom-color: <?=$snow?>; }
}

@keyframes color-change {
	35%, 65% { border-bottom-color: <?=$highlight?>; }
	50% { border-bottom-color: <?=$snow?>; }
}

/* Animation for links in the pushy nav bar */

@-webkit-keyframes color-change-pushy {
	35%, 65% { border-bottom-color: <?=$white?>; }
	50% { border-bottom-color: <?=$highlight?>; }
}

@-webkit-keyframes color-change-pushy {
	35%, 65% { border-bottom-color: <?=$white?>; }
	50% { border-bottom-color: <?=$highlight?>; }
}

@-webkit-keyframes color-change-pushy {
	35%, 65% { border-bottom-color: <?=$white?>; }
	50% { border-bottom-color: <?=$highlight?>; }
}

@-webkit-keyframes color-change-pushy {
	35%, 65% { border-bottom-color: <?=$white?>; }
	50% { border-bottom-color: <?=$highlight?>; }
}

@-webkit-keyframes color-change-pushy {
	35%, 65% { border-bottom-color: <?=$white?>; }
	50% { border-bottom-color: <?=$highlight?>; }
}



/********** Outdated Browser **********/

#outdatedBrowser_outerDiv { display: inline-block; top: 0; position: absolute; height: 100%; width: 100%; text-align: center; background-color: <?=$highlight?>; }
#outdatedBrowser_middleDiv { vertical-align: middle; display: inline-block; top: 50%; position: relative; }
#outdatedBrowser_innerDiv { width: 100%; display: inline-block; top: -50%; position: relative; }
#outdatedBrowser_innerDiv h1 { font-size: 34px; color: <?=$snow?>; }
#outdatedBrowser_innerDiv p { font-size: 21px; padding: 0 16px; color: <?=$snow?>; }
#outdatedBrowser_innerDiv a { width: 160px; font-size: 16px; margin: 0 8px 8px 0; font-family: 'bariol_regular'; display: inline-block; padding: 8px 0; border: 1px solid <?=$white?>; color: <?=$white?>; }
#outdatedBrowser_innerDiv a:hover { background-color: <?=$white?>; border-color: <?=$white?>; color: <?=$highlight?>; }
#outdatedBrowser_innerDiv a:visited { border-color: <?=$white?>; color: <?=$white?>; }

/********** RESPONSIVE **********/

/* Basic responsive settings */
ul a { font-family: 'bariol_light'; font-size: 29px; line-height: 35px; text-decoration: none; } /* Links in navigation panel*/
ul a:hover { font-family: 'bariol_regular'; text-decoration: none; }
ul a:visited { text-decoration: none; }
.current_page_item a { font-family: 'bariol_regular'; }
.menu-btn { background-color:<?=$highlight?>; cursor: pointer; padding: 3px 8px 5px; color: <?=$white?>; margin: 24px 0 32px; }
.main { float: left; }
.featureProject { margin: 0 0 32px 0; float: left; height: 250px; }
#sidebar_menu { width: 282px; padding: 0 32px 0 0; float: left; }
#container { margin: 0 auto; text-align: left; overflow: hidden; } /* need overflow: hidden; to avoid Google Chrome bug. See - http://stackoverflow.com/questions/15550205/strange-rendering-issue-in-chrome-with-floats-in-a-div-with-margin-top */
#currentColor { float: right; }

/* Mobile */
ul a { color: <?=$white?>; }
ul a:hover { color: <?=$white?>; }
ul a:visited { color: <?=$white?>; }
.current_page_item a { color:<?=$white?>; }
.current_page_item a:hover { color:<?=$white?>; }
.current_page_item a:visited { color:<?=$white?>; }
.menu-btn { display: inline-block; }
.main { width: 100%; }
.featureProject { width: 100%; }
#sidebar_menu { display: none; }
#container { max-width: 926px; padding: 0 16px; }
#currentColor { margin-top: 27px; }
#return-to-top { margin-left:-32px; }

/* tablets - portrait */
@media screen and (min-width: 644px) {
.featureProject { width: 50%; }
}

/* tablets - landscape */
@media screen and (min-width: 958px) {
.featureProject { width: 33.3%; }
}

/* desktops*/
@media screen and (min-width: 1272px) {
/* Navigation panel */
ul a { color: <?=$highlight?>; }
ul a:hover { color:<?=$highlight?>; }
ul a:visited { color: <?=$highlight?>; }
.current_page_item a { color:<?=$highlight?>; }
.current_page_item a:hover { color:<?=$highlight?>; }
.current_page_item a:visited { color:<?=$highlight?>; }
.menu-btn { display: none; }
.main { width: 926px; }
.featureProject { width: 33.3%; }
#sidebar_menu { display: inline; }
#container { width: 1240px; max-width: auto; max-width: initial; padding: 0; }
#currentColor { margin-top: 16px; }
#return-to-top { margin-left: calc(-32px + 157px); }
}



/********** @FONT-FACE **********/

@font-face {
    font-family: 'bariol_light';
    src: url('assets/fonts/bariol_light-webfont.eot');
    src: url('assets/fonts/bariol_light-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_light-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_light-webfont.woff') format('woff'),
         url('assets/fonts/bariol_light-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_light-webfont.svg#bariol_lightlight') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'bariol_regular';
    src: url('assets/fonts/bariol_regular-webfont.eot');
    src: url('assets/fonts/bariol_regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_regular-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_regular-webfont.woff') format('woff'),
         url('assets/fonts/bariol_regular-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_regular-webfont.svg#bariol_regularregular') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'bariol_regular_italic';
    src: url('assets/fonts/bariol_regular_italic-webfont.eot');
    src: url('assets/fonts/bariol_regular_italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_regular_italic-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_regular_italic-webfont.woff') format('woff'),
         url('assets/fonts/bariol_regular_italic-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_regular_italic-webfont.svg#bariolregular_italic') format('svg');
    font-weight: normal;
    font-style: normal;
}



/********** Publications **********/

/* Zotpress CSS override */
/* (should be as close to the bottom of the css as possible. See http://stackoverflow.com/questions/189621/when-does-csss-important-declaration-not-work ) */
.zp-List .zp-Entry .csl-bib-body { padding-left: 0 !important; text-indent: 0 !important; line-height: normal !important; }

.csl-bib-body { /* CSS for single publications in library */
	margin-top: 24px; /* Add spacing between publications released in same year */
}
