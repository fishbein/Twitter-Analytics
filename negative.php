<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$searchterm = $_GET['term']; //Search term
$search = new TwitterSearch($searchterm.' negative OR bad OR terrible OR hate OR horrible');
	$results = $search->rpp(500)->results();
	if(count($results)>=100){
		echo 'Over 100 Negative Results for "'.$searchterm.'"<br/ >';
	}
	else{
		echo count($results).' Negative Results for "'.$searchterm.'"<br />';
	}
	
	foreach($results as $res){
	echo '<img src="'.$res->profile_image_url.'">';
	echo $res->text.'<br />';
}
	?>
</html>