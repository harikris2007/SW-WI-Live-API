<?php
	//Shuffle an associative array
	$assoc_array = array( "url" => "1", 
			"urls" => "2", 
			"url4" => "3", 
			"url3" => "4", 
			"urld" => "5", 
			"url3" => "6");
	function shuffle_assoc_array(&$array) {
	  if (!is_array($array)) return $array;

	  $keys = array_keys($array);
	  shuffle($keys);
	  $random = array();
	  foreach ($keys as $key)
	    $random[$key] = $array[$key];
	  
	  $array = $random;

	  return TRUE;
	}
	shuffle_assoc_array($assoc_array);
	print_r($assoc_array);
	
	echo $assoc_array['url'];  
?>