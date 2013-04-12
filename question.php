<?php
$searchterm = $_GET['term'];
	$search = new TwitterSearch($searchterm.' ?');
	$results = $search->rpp(500)->results();
	if(count($results)>=100){
		echo 'Over 100 Questions about "'.$searchterm.'"<br/ >';
	}
	else{
		echo count($results).' Questions about "'.$searchterm.'"<br />';
	}
foreach($results as $res){
	echo '<img src="'.$res->profile_image_url.'">';
	echo $res->text.'<br />';
}
?>