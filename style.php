<?php	
	header("Content-type: text/css");

	include_once 'color.php'; // include color.php file to have access to $currentColor
	$highlight = $currentColor;
	$white = '#fff';
?>

/*
Theme Name: Portfolio
Description: Template for my online portfolio
Author: Markus Lorenz Schilling
Author URI: http://malosch.com
*/



/********** NON-RESPONSIVE **********/

/* General structure */
* {	margin: 0; padding: 0; color: #333; -webkit-font-smoothing: antialiased; }
html, body { font-family: 'bariol_regular'; font-size: 18px; background-color: #efefef; overflow-x: hidden; }
.clear { clear: both; }
.header { height: auto; } /* header including the colored line + respsonsive menu button + hex color code */
#headerLine { height: 1px; width: 100%; background-color:<?=$highlight?>; } /* colored line on top of page */
#footer p { margin: 16px 0 112px; float:left; font-size: 13px; }

/* Headings */
h1 { font-family: 'bariol_regular'; font-size: 21px; margin: 16px 0 32px; }
h2 { font-family: 'bariol_regular'; font-size: 21px; margin-bottom: 32px; }
h3 { font-family: 'bariol_light'; font-size: 21px; margin: 32px 0 24px 0; color: <?=$highlight?>; } /* color needed for h3 on publication page */

/* Navigation panel */
.pushy { background: <?=$highlight?>; } /* pushy (mobile navigation) background */
ul { list-style-type: none; }

/* Links */
a { font-family: 'bariol_bold_italic'; text-decoration:underline; }
a:hover { color:<?=$highlight?>; }
a:visited { font-family: 'bariol_bold_italic'; text-decoration:underline; }
.pushy a { color:<?=$white?>; }
.pushy a:hover { color:<?=$white?>; }
.pushy a:visited { color:<?=$white?>; }

/* Bold type */
.bold { font-family: 'bariol_bold'; }

/* Colors */
.highlightColor { color:<?=$highlight?>; }
.white { color: <?=$white?>; }
::-moz-selection { background: <?=$highlight?>; color:<?=$white?>; } /* use highlight color as background color for selections */
::selection { background: <?=$highlight?>; color:<?=$white?>; } /* use highlight color as background color for selections */

/* Project links */
.featureImg { width:100%; height: 176px; overflow:hidden; position:relative; margin: 0 0 8px 0; display: inline-block; }
.featureImg img { width: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; }
.featureImgBackup { width: 100%; height: 176px; background: <?=$highlight?>; }
.mask {	background-color:<?=$highlight?>; display: table; width: calc(100% - 32px); height: 144px; padding:16px; float: left; position: absolute; left: 0px; top: 0px; opacity: 0; text-align: center; transition: opacity .5s ease-in-out; -moz-transition: opacity .25s ease-in-out; -webkit-transition: opacity .25s ease-in-out; }
.mask:hover { opacity: 1; }
.mask span { color: <?=$white?>; font-size: 21px; text-decoration: underline; display: table-cell; vertical-align: middle; }
.excerpt { padding-right: 16px; }

/* Project page */
.project_description { max-width: 100%; margin: 0 0 16px 0; float: left; }
.project_quote { width: calc(100% - 32px); float: left; text-align: center; border: 1px; border-color: <?=$highlight?>; color: <?=$highlight?>; margin: 16px 0 32px 0; border-style: solid none; padding: 16px; font-size: 36px; font-family: 'bariol_bold_italic'; }
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
iframe { margin-bottom: 16px; }

/* Publications */
.csl-bib-body { padding-left: 0 !important; text-indent: 0 !important; line-height: normal !important; }

/* Archive */
.categories_ul li { display: inline-block; }
.categories_ul li a { display:block; padding: 0px 10px; background-color: #ddd; color: #333; font-size:13px; font-family: 'bariol_regular'; transition: all 0.25s ease-in-out; margin-bottom: 4px; }
.categories_ul li a:visited { background-color: #ddd; color: #333; } 
.categories_ul li a:hover { background-color: <?=$highlight?>; color: <?=$white?>; }
.categories_ul li.current-cat a { background-color: <?=$highlight?>; color: <?=$white?>; }

/* Back to top button */
#return-to-top { position: fixed; bottom: 16px; left: 50%; background-color: #ddd; width: 64px; height: 64px; display: block; text-decoration: none; display: none; -webkit-transition: all 0.3s ease-in-out; -moz-transition: all 0.3s ease-in-out; -ms-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out;  transition: all 0.3s ease-in-out; }
#return-to-top i { color: #333; margin: 0; position: relative; left: 22px; top: 21px; font-size: 21px; -webkit-transition: all 0.3s ease; -moz-transition: all 0.3s ease; -ms-transition: all 0.3s ease-in-out; -o-transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out; }
#return-to-top:hover { background-color: <?=$highlight?>; }
#return-to-top:hover i { color: #fff; top: 13px; }




/********** RESPONSIVE **********/

/* Basic responsive settings */
ul a { font-family: 'bariol_light'; font-size: 29px; line-height: 35px; text-decoration: none; } /* Links in navigation panel*/
ul a:hover { font-family: 'bariol_regular'; text-decoration: none; }
ul a:visited { text-decoration: none; }
.current_page_item a { font-family: 'bariol_regular'; }
.menu-btn { background-color:<?=$highlight?>; cursor: pointer; padding: 3px 8px 5px; color: <?=$white?>; margin: 24px 0 32px; }
.main { float: left; }
.featureProject { margin: 0 0 32px 0; float: left; }
#sidebar_menu {	width: 282px; padding: 0 32px 0 0; float: left; }
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
#sidebar_menu {	display: none; }
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

/* @font-face shannanigens */
@font-face {
    font-family: 'bariol_bold';
    src: url('assets/fonts/bariol_bold-webfont.eot');
    src: url('assets/fonts/bariol_bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_bold-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_bold-webfont.woff') format('woff'),
         url('assets/fonts/bariol_bold-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_bold-webfont.svg#bariol_boldbold') format('svg');
    font-weight: normal;
    font-style: normal;
}

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
    font-family: 'bariol_thin';
    src: url('assets/fonts/bariol_thin-webfont.eot');
    src: url('assets/fonts/bariol_thin-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_thin-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_thin-webfont.woff') format('woff'),
         url('assets/fonts/bariol_thin-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_thin-webfont.svg#bariolthin') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'bariol_bold_italic';
    src: url('assets/fonts/bariol_bold_italic-webfont.eot');
    src: url('assets/fonts/bariol_bold_italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bariol_bold_italic-webfont.woff2') format('woff2'),
         url('assets/fonts/bariol_bold_italic-webfont.woff') format('woff'),
         url('assets/fonts/bariol_bold_italic-webfont.ttf') format('truetype'),
         url('assets/fonts/bariol_bold_italic-webfont.svg#bariol_boldbold_italic') format('svg');
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