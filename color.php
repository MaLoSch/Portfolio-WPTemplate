<?php
	//check http://php.net/manual/en/function.date-default-timezone-set.php
	date_default_timezone_set("America/Vancouver");

	
	//check http://www.w3schools.com/php/func_date_date.asp for data function.
	$month = date('n'); // 'n' requests a numeric representation of the current month without leading zeros
	$hour = date('G'); // 'G' requests the hour in a 24 hour format (0-23) without leading zeros
	$base = 12;
	$multiplier = -0.055;
	
	if($month > 11 || $month <= 2) {
		$color = "#B23241"; // Winter
	} else if ($month > 2 && $month <= 5) {
		$color = "#299CA8"; //Spring
	} else if ($month > 5 && $month <= 8) {
		$color = "#81810B"; //Summer
	} else if ($month > 8 && $month <= 11) {
		$color = "#FF8500"; //Autumn
	}
	
	$brightness = $base - $hour;
	$brightness = abs($brightness);
	$brightness = $brightness * $multiplier;
		
	$currentColor = color_luminance($color, $brightness); // if I change $brightness with a number (e.g 0.5) everything works
	//$currentColor = $color;
	
	function color_luminance( $hex, $percent ) {
	
		// validate hex string
		$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
		$new_hex = '#';
		
		if ( strlen( $hex ) < 6 ) {
			$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
		}
		
		// convert to decimal and change luminosity
		for ($i = 0; $i < 3; $i++) {
			$dec = hexdec( substr( $hex, $i*2, 2 ) );
			$dec = min( max( 0, $dec + $dec * $percent ), 255 ); 
			$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
		}
		
		return $new_hex;
	}
?>