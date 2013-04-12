<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$searchterm = $_GET['term']; //Search term
//Positive Tweets
	$positive = new TwitterSearch($searchterm.' positive OR good OR awesome OR love OR cool');
	$negative = new TwitterSearch($searchterm.' negative OR bad OR terrible OR hate OR horrible');
	$positivesearch = $positive->rpp(500)->results();
	$negativesearch = $negative->rpp(500)->results();
	
	$positivenumber = count($positivesearch);
	$negativenumber = count($negativesearch);
	
	if($positivenumber==100){
		$positivelabel = '100+';
	}
	else{
		$positivelabel = $positivenumber;
	}
	
	if($negativenumber==100){
		$negativelabel = '100+';
	}
	else{
		$negativelabel = $negativenumber;
	}
	$piChart = new gPieChart();
	$piChart->addDataSet(array($positivenumber, $negativenumber));
	$piChart->setLegend(array('Positive ('.$positivelabel.')','Negative ('.$negativelabel.')'));
	$piChart->setLabels(array('Positive', 'Negative'));
	$piChart->setColors(array("7CFC00","B22222"));
?>
<img src="<?php print $piChart->getUrl();  ?>" />
</html>