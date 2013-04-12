<?php
function getLat($code){
 $query = "http://maps.google.com/maps/geo?q=".urlencode($code)."&output=json";
 $data = file_get_contents($query);
 // if data returned
 if($data){
  // convert into readable format
  $data = json_decode($data);
  $long = $data->Placemark[0]->Point->coordinates[0];
  $lat = $data->Placemark[0]->Point->coordinates[1];
  return ($lat);
 }else{
  return false;
 }
}
function getLong($code){
 $query = "http://maps.google.com/maps/geo?q=".urlencode($code)."&output=json";
 $data = file_get_contents($query);
 // if data returned
 if($data){
  // convert into readable format
  $data = json_decode($data);
  $long = $data->Placemark[0]->Point->coordinates[0];
  $lat = $data->Placemark[0]->Point->coordinates[1];
  return ($long);
 }else{
  return false;
 }
}
?>
<?php
$zip = $_GET['zip'];
$radius = $_GET['radius'];
$term = $_GET['term'];
?>
<?php
$lat = getLat($zip);
$long = getLong($zip);
 ?>
<?php
$search = new TwitterSearch($term);
	$results = $search->rpp(500)->contains($term)->geocode($lat, $long, 25)->results();
	foreach($results as $res){
	echo '<img src="'.$res->profile_image_url.'">';
	echo $res->text.'<br />';
}
