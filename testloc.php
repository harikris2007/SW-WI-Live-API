<?php

/*a:14:{s:5:"query";s:14:"217.165.56.234";s:7:"country";s:20:"United Arab Emirates";s:3:"zip";s:0:"";s:3:"lat";d:24.466699600219727;s:3:"lon";d:54.36669921875;s:8:"timezone";s:10:"Asia/Dubai";s:3:"isp";s:39:"Emirates Telecommunications Corporation";s:11:"countryCode";s:2:"AE";s:6:"region";s:2:"AZ";s:3:"org";s:39:"Emirates Telecommunications Corporation";s:2:"as";s:24:"AS5384 Emirates Internet";s:6:"status";s:7:"success";s:10:"regionName";s:9:"Abu Dhabi";s:4:"city";s:9:"Abu Dhabi";}*/
  
  $latlon = file_get_contents("http://ip-api.com/php/".$_SERVER['REMOTE_ADDR']);
/*  $getloc = json_decode($latlon);
    $objloc = json_decode($getloc);
 var_export(current($objloc->DATA)->videoid);//returns '462'
  
  
    print $obj->{'a:14'}; 
  */
  
  //$decoded = json_decode($getloc,true);
 // print($decoded);
 			
?>

<?php
print $ip = $_REQUEST['REMOTE_ADDR']; // the IP address to query
$query =  unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  echo 'Hello visitor from '.$query['lat'].', '.$query['lon'].'!';
} else {
  echo 'Unable to get location';
}

$location = array($query['lat'], $query['lon']);

print_r($location);

//$latlon = unserialize(file_get_contents('http://ip-api.com/php/'.$CI->input->ip_address()));	

?>