<?php
/*
 * ShortCode 1.0 By Justin Morris - Randomized Integer Shortener/BaseXX Encoder and Decoder
 * Use this code however you please.
 */
class shortcode {
		
	public function __construct() {
		//Nothing really needed to do here yet, maybe down the line with externally loaded alphabets
	}
	
	public function charMap() {
		//If you want to restrict certain characters from being used, modify this string then regenerate your scrambles.
		$charList = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-";
		return $charList;
	}
	
	//IT IS ADVISED YOU RUN THIS METHOD AND COPY/PASTE THE OUTPUT TO THE getScramble METHOD!!!
	//P.S. Ensure $charList in the charMap method has only characters you want in it.
	public function reScramble() {
		$chars = $this->charmap();
		for($x=0; $x<strlen($chars)-1; $x++) {
			$buffer = str_replace($chars[$x], "", $chars);
			echo '$scramble["'.$chars[$x].'"] = "'.str_shuffle($buffer).'";<br />';
		}
	}
	
	public function getScramble($chr) {
		//REPLACE THESE WITH YOUR OWN SCRAMBLES - or dont ;)
		$scramble["0"] = "UYiR4rmN39asEFLnqdclBJK8ygfDCuwTQZIjV6Ob1Atv7WMSPeh25pHGoxzkX-";
		$scramble["1"] = "TOpQV6GvSxXm3lDnACr4ebINYf9c8BZhatqW20jJw7dE5oFykMP-uzUsigRKLH";
		$scramble["2"] = "kjg70JqNPMpVlKZt9Bz6QyC8XxhRSDvIWGTOU1Y4ir5-AHfcwmabduE3FLsone";
		$scramble["3"] = "Y2oCyPKQ5beXlcs6p8ZDawVtSnIFrMBiv-zuOWjhRHUg0k1JLqEGdf49TxAm7N";
		$scramble["4"] = "EMsAu5n2gJBRbzKj3CSh8WXDyGUoexVLZFwv7m-HTacQNp6Y9fOIkt1dPqli0r";
		$scramble["5"] = "EA7zdwesXgLq4fNmQJRplTCBKU3t0uOInGo-FZMyWjHP68b2h1rxSaYiD9Vckv";
		$scramble["6"] = "tvGsXDBLSrfPICW-pQFJhKqlwVb2U9MuRxd38jm4icOkAaHgnT0N51oeEZYy7z";
		$scramble["7"] = "JpxQnAaXmw6GUi-0B21jMe5OH9ltYSEDVv8uRCkbWLqdhgKIrozyfZc43PTFNs";
		$scramble["8"] = "1qVo54syIMnGmS-LKfdPvr7O3jlu2hF6kC9E0NQzcJtTDgpiWAbaHxUwBZeRXY";
		$scramble["9"] = "o4OheaBGHkW6NTpdjMnlZJDvwUPyRbfQuVCLqA3S1iEgr0tmFzx87XcKI25Ys-";
		$scramble["a"] = "JlBv9Qeu38YPjVbcqp1n6LrN2TZDgoGziH4FC0hAWMwO-UtyES5Rxk7XIKsmfd";
		$scramble["b"] = "VTYmkS1v9zHXW4qcnEJGsOCa3dN5Z-iMPfoUhB7pFLyljRAxKgtIue6Qw2D0r8";
		$scramble["c"] = "YlezZdKv6WEow1HjifTAOm5JD8b3Vh-purxtCRUSnQsgaMLky29XGN04qPB7FI";
		$scramble["d"] = "-QClvDnV4soaizR1AZFmJSr8GqMy7HXw0b9kILxOUWujPNT2fpce36gKE5thYB";
		$scramble["e"] = "j-pq1CZEy7Vz8Gk6DSgl4InvhTWoUbB03JLHwrtm2YsXfMu5RcQaNxPKdFO9iA";
		$scramble["f"] = "SKFqGBVp-4scguanHbvz0YZIr7o196iedDyWAmULEXx3N2ljw58JMQhPTCtROk";
		$scramble["g"] = "tjC2Y4ws07c3-BHz6V8QEIRUWP5labXpKndfNhkOJmMD1Tieruxv9yGSqZFALo";
		$scramble["h"] = "Q76fj-NUCZ4npV1JzTeogLBREaYH8rkWc9AMqDKlsXIyu3ixb0vFO2Pt5dGSwm";
		$scramble["i"] = "Rz9LKdVx0WrcNvOonfYg-D6MmIt3ySp8jUk547ZhuqBewHJQCbsPTEaGFXlA12";
		$scramble["j"] = "I-zqcAN916fuwCVRkLglKBXmytWO8bvEZorspxUS4nThQeP5YJdF27DG0Ma3Hi";
		$scramble["k"] = "VdrsIYzWvXe9-cKoNi2Bfh3pGaSARQ5ZOmn0b1JT7H4FLqU6jgltxEw8MCPDuy";
		$scramble["l"] = "oNkXqg-nV7Mf5vY29ZxJuUsBmPapKWyTwRSe6DLtcCId34jiEQbA8rO0hGzFH1";
		$scramble["m"] = "IUW0vN-hgS6OGYDKFX19zkEPV4Hpla8nqrJftLdMAQwebcyj57xTRZi3osB2Cu";
		$scramble["n"] = "zMNbQPwpgafREh41oV0dHiT6qZeGCmk8SJ57luctyIYOWr3xX92ABsFLjKDv-U";
		$scramble["o"] = "wPcqhGmU3-OrzIEAgYk2TuZxay84vQ1ReBJKnjDt09pCVbHFSs5WLXfdN67iMl";
		$scramble["p"] = "fYBNqK0mSF-nGcDPzgXJLV4kUoZA8Iyvstu2WR1eQrxhH7aElbOw5di3CT9jM6";
		$scramble["q"] = "vRdZTB3ufyhWU-SeMKHCmFwno97VNlpj80ErYL14GzacJXgIkiPObsD2Ax65tQ";
		$scramble["r"] = "g0h-D8Rl1uq7WjJd5EB9QLv4GabCVksUtnAS3mzHO2ZKeYxXoMpN6wFfyITiPc";
		$scramble["s"] = "6u7mXD9JlnKByzkZt-THgP1U4bEvwGiQOaVejN3qRCfWL2cd8MAYpxIroF50Sh";
		$scramble["t"] = "QsxeYnwUV2dATcCyugzPBiHa0345E1ZbXRFrSjMm89WIDhOGpvLNK7fJl6-oqk";
		$scramble["u"] = "AeLrKlMvOh263Tj7W1bY0iSQRtPqsp-5XBDkdafmCVcZI8Fy4EGxwnHgUJ9Nzo";
		$scramble["v"] = "VREcz9rFH5kKabC6oQgLZwJ3ie7tNuyXOIlUpdP8sh1jDBTqfxSWYmM20A-nG4";
		$scramble["w"] = "MGt56T4mjIfxbOUikNLXopve7l2g-Vch8qnS9YQd1yzRBW0HrZDCAPsEKJau3F";
		$scramble["x"] = "f0RMcEWFGH75dKzCypqYIUQrLel31mOk9AT8vXBSuDbwaiPNh4ngt6jJZ2-osV";
		$scramble["y"] = "xq7cUVgR26Nn8At5-rfLovEJCMSkPX4hjleGsZIiFuDda3pO0WbmKHY9B1zQTw";
		$scramble["z"] = "xCWnODPgBHc7w-89f1IsuMYh0J6amjRZqKl3US2tEvNFGkTV4p5eodrALXyiQb";
		$scramble["A"] = "RLQZpeI-s1f5MuanroPkmFxCXg0vzqUJ4hjS2DHWTiNtBbGcwO7y36Ydl8E9KV";
		$scramble["B"] = "PhpjLH9ASxyu4kY1K2VE3q6NGrbDTiCFQ0cmfzweJ57dsORZWaltgX8vnMUo-I";
		$scramble["C"] = "B8WXTuF501jYNzsOKAywxdeSE7mPLZb6J4gRHo-Mhlr2VUDt9apnqiQcIGvk3f";
		$scramble["D"] = "bgKauvy6BzSp4iRshH0PYICf2N7wTOq3JXo-5cGUtL8lnVAEF1kQM9ZemdWxjr";
		$scramble["E"] = "T6BZcoyGi4uLpsqS5lF0jr32Pn7A8xwtCXmYeDV19hNM-vgfOWJIadKRzHQkUb";
		$scramble["F"] = "jhm6VkLiA3onp5dy2WsYUJHqKuZOwEcGgBD-Nb8rItaf9SPz7RMxX0TeQvlC14";
		$scramble["G"] = "CQ1PNulVeBXwifFmSE8-I4hY97b0osMA6qZvd5xTz2gyHLU3DcaOJrWjptRnKk";
		$scramble["H"] = "ByAEs8maIWeGRtzSjcQLZgDY5f3x6K-92PbnJV0lTu1o7iNMXpd4rhOFkvqUwC";
		$scramble["I"] = "1YwTVilvd9rW4EDXscUCNbA3gO5JMyL6Q8ZGfq-Bpm0ojSahH2zxKuPRtFkne7";
		$scramble["J"] = "t8qK2G6vQEHwbdZrkjsAU5mOep9BFanx1gc3Y-fuo4IXLMVlRWD7ySzTN0PCih";
		$scramble["K"] = "Zum1sTJ4I9Qe0dxkn6Lg2c73BDNMhWAUptyFlfroHO5CwaGibzqR-YESj8VXvP";
		$scramble["L"] = "Tc-hzIZaQkoG1Fl3W2OgpmqXYVP5ebiMDjn4BS9uNKRC8xHtrydfJ6EvU7Aws0";
		$scramble["M"] = "fYkn4zNKlAOiejrL5w6BDPXhFtSWy2URba97Zcoum8VHpEQ-vJsg30CqGT1dIx";
		$scramble["N"] = "3wcBIvWaFuqOmToLpKQZtjPxbzgyVEsHe0458CMr-JRXfAiDS27Gk6lhY1dn9U";
		$scramble["O"] = "NWC0H6Yd1JBQwpqZva85KjoFk9y-MhPxgSAbls7G2cLmRzUfnriV3tDEXeuT4I";
		$scramble["P"] = "JXt83bQn7AESjrkIBwN4qVKfUYCZFTRd2-eD1HvhuLoyGz5smpO0cM6ilgWxa9";
		$scramble["Q"] = "kI4X7iKjruWRecOLlwdq80ZVTYpFfshgUyo3DP6MtH5bBznJ-xGAm9Eav1N2CS";
		$scramble["R"] = "nbJd2Fq4MVLxWKloc5fpv8HIrzP3Xs6O-G7DUuByN9tQwakT1jCZeig0AYSEhm";
		$scramble["S"] = "pOPXBzZwkl8U1GsTFg725n-NmVqrYLy6fAxDaedhK9W3REujvJ4ItHoQMiCbc0";
		$scramble["T"] = "A68fiuo7HWGZvsreLOVPDp2XCY5xFjRmIS-tlQKd0akbUMycg9hN34q1BwJEzn";
		$scramble["U"] = "lVexyqP8KArjZm6-CshJk5wQDdn0p7SfiaY1LGbX3HOTcNRIBvMt9gu4Wz2oFE";
		$scramble["V"] = "uPz617idJT2FIwZhXjk8Wfn-mbApHxESvR4QOqD9KCyLNlcMasogGr305UteYB";
		$scramble["W"] = "sH9eGgkvNuqOL1zV4xI7ThC3-wbMXipYPrZUytmRdo26BcEQAajnF5DJ8KlfS0";
		$scramble["X"] = "3lyJYIaFHG6eABds4qoStNKzxRU7frWTPEi0p1OQVk85C92bgDLhZjuncwv-mM";
		$scramble["Y"] = "egETIPpM5dvVBh9FSn8wqklbuHcNx4Os3-fKtWjAozZUyRDG1Qa6rJ0XLiCm27";
		$scramble["Z"] = "6AOl2Hr-XkIojYsBh9eJxRqCyE5tDuT0agwpnMN8FvKQ3WPmzcUd4bi7GS1fVL";
		
		return $scramble[$chr];
	}
	
	
	//Grab a random scrambled alphabet. NOTICE: Update the $scramble array elements with your own scrambles obtained from "getScrambles()"
	//This function returns an associative array. Array(keyDelim=>'X', Alphabet=>$scramble['X'])
	public function randomScramble() {
		//Determine which scramble we will be using...
		$keyDelim = $this->charMap();
		$keyDelim = $keyDelim[rand(0,strlen($keyDelim)-1)];
		$scramble = $this->getScramble($keyDelim);
		return array('keyDelim'=>$keyDelim, 'alphabet'=>$scramble);
	}
	
	//this function accepts an int or an array of integers, it will shorten and encode then return back an encoded (and possibly delimited) string.
	public function encode_int($int) {
		$scram = $this->randomScramble();
		$a = $scram['alphabet'];
		$key = $scram['keyDelim'];
		$base_count = strlen($a); //how big is the alphabet
		$output = '';
		if(is_array($int)) {
			foreach($int as $n) {
				if(!is_int($n)) {
					try{
						$n=intval($n);// this will set letter strings to 0.
					} catch(Exception $e) {
						$this->error = "ERROR: $e";
						return false; // fail due to wrong data type
					}
				}
				
				$encoded = '';
				while ($n >= $base_count) {
					$div = $n/$base_count; //divide our int by the base
					$mod = ($n-($base_count*intval($div))); //make sure we stay within the confines of our base count.
					$encoded = $a[$mod] . $encoded; //apply the base character to the beginning of the string
					$n = intval($div); //update num
				}
			
				if ($n) { $encoded = $a[$n] . $encoded; } //if num started out < base count
				$output .= $key.$encoded; // add delimiter
			}
		} else {
			if(!is_int($int)) {
					try{
						$int=intval($int);
					} catch(Exception $e) {
						$this->error = "ERROR: $e";
						return false; // fail due to wrong data type
					}
				}
			$encoded = '';
			while ($int >= $base_count) {
				$div = $int/$base_count; 
				$mod = ($int-($base_count*intval($div))); 
				$encoded = $a[$mod] . $encoded; 
				$int = intval($div); 
			}
		
			if($int) {
				$encoded = $a[$int] . $encoded;
			}
			
			$output = $key.$encoded;
		}
		
		return $output; //return our now base'X' encoded number
	}

	public function decode_int($str) {
		$key = substr($str,0,1); //get our encoding key that tells us which alphabet was used and what the delimiter is.
		$a = $this->getScramble($key); //Get the alphabet for this encoding
		$newCode = substr($str,1); //get the rest of the string
		$codes = explode($key,$newCode); //explode the string on the delimiter incase there are multiple values embedded
		$output = array(); //out output variable
		//loop through our array of encoded ints
		for($x=0; $x<count($codes); $x++) {
			$decoded = 0;
			$multi = 1;
			while (strlen($codes[$x]) > 0) { //While we still have characters
				$digit = $codes[$x][strlen($codes[$x])-1]; //single out the last character
				$decoded += $multi * strpos($a, $digit); //grab the number its associated with from the scrambled alphabet
				$multi = $multi * strlen($a); //update multi
				$codes[$x] = substr($codes[$x], 0, -1); //update encoded ID excluding last character.
			}
			$output[] = $decoded; //this delimiter is just for a clean echo, ideally we would add them to an array here and return that array
		}
		
		if(count($output)>1) {
			return $output; //return an array of integers
		} else {
			return $output[0]; //return the only int present
		}
	}
	
}

?>
