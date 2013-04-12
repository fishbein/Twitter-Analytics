<?php
$searchterm = $_GET['term'];
	$search = new TwitterSearch($searchterm.' http://');
	$results = $search->rpp(500)->results();
	if(count($results)>=100){
		echo 'Over 100 Links about "'.$searchterm.'"<br/ >';
	}
	else{
		echo count($results).' Links about "'.$searchterm.'"<br />';
	}
foreach($results as $res){
	echo '<img src="'.$res->profile_image_url.'">';
	echo $res->text.'<br />';
}
?>