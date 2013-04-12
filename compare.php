<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$term[0] = $_GET['term'];
$term[1] = $_GET['term1'];
$term[2] = $_GET['term2'];
$term[3] = $_GET['term3'];
$term[4] = $_GET['term4']; //Search term
$rescount = array();
foreach($term as $item){
$search = new TwitterSearch($item);
$results = $search->rpp(500)->results();
	if(count($results)>=100){
		$rescountterm[] = count($results).'+';
		$rescount[] = count($results);
	}
	else{
		$rescountterm[] = count($results);
		$rescount[] = count($results);
	}
	//print_r($rescount);
	$piChart = new gPieChart();
	$piChart->addDataSet(array($rescount[0],$rescount[1],$rescount[2],$rescount[3],$rescount[4]));
	$piChart->setLegend(array($term[0].' ('.$rescountterm[0].')',$term[1].' ('.$rescountterm[1].')',$term[2].' ('.$rescountterm[2].')',$term[3].' ('.$rescountterm[3].')',$term[4].' ('.$rescountterm[4].')'));
	$piChart->setLabels(array($term[0],$term[1],$term[2],$term[3],$term[4]));
	$piChart->setColors(array("0d00ff", "00ffff", "00ff19", "fffd00","ff0000"));
	/*foreach($results as $res){
		echo '<img src="'.$res->profile_image_url.'">';
		echo $res->text.'<br />';
	}*/
}
?>
<img src="<?php print $piChart->getUrl();  ?>" />
</html>