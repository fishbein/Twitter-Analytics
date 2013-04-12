<?php include('twittersearch.php'); require ('gChart.php'); //Get twitter search code ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="bar" style="position:fixed; background: #FFF; margin-bottom: 50px; padding: 5px; top: 0; right: 0; text-align: right;">
	<a href="#compare">Compare</a> | <a href="#positive">Positive Tweets</a> | <a href="#negative">Negative Tweets</a> | <a href="#location">Location</a> | <a href="#questions">Questions</a> | <a href="#" onclick="$('#change').toggle();">Change</a><br />
	<form action="display.php" method="GET" id="change" style="display:none;">
	Select up to five words to compare:
	<input type="text" name="term" value="<?php echo $_GET['term'];?>">
	<input type="text" name="term1" value="<?php echo $_GET['term1'];?>">
	<input type="text" name="term2" value="<?php echo $_GET['term2'];?>">
	<input type="text" name="term3" value="<?php echo $_GET['term3'];?>">
	<input type="text" name="term4" value="<?php echo $_GET['term4'];?>">
<br />
	Enter a Zip code and a radius:
	<input type="text" name="zip" value="<?php echo $_GET['zip'];?>">
	<input type="text" name="radius" value="25">
	<input type="submit">

<br />
Change Primary Word:
<a href="display.php?term=<?php echo $_GET['term']; ?>&term1=<?php echo $_GET['term1']; ?>&term2=<?php echo $_GET['term2']; ?>&term3=<?php echo $_GET['term3']; ?>&term4=<?php echo $_GET['term4']; ?>&zip=<?php echo $_GET['zip']; ?>&radius=<?php echo $_GET['radius']; ?>"><?php echo $_GET['term']; ?></a>
 
<a href="display.php?term=<?php echo $_GET['term1']; ?>&term1=<?php echo $_GET['term']; ?>&term2=<?php echo $_GET['term2']; ?>&term3=<?php echo $_GET['term3']; ?>&&&term4=<?php echo $_GET['term4']; ?>&zip=<?php echo $_GET['zip']; ?>&radius=<?php echo $_GET['radius']; ?>"><?php echo $_GET['term1']; ?></a>
  
<a href="display.php?term=<?php echo $_GET['term2']; ?>&term1=<?php echo $_GET['term1']; ?>&term2=<?php echo $_GET['term']; ?>&term3=<?php echo $_GET['term3']; ?>&term4=<?php echo $_GET['term4']; ?>&zip=<?php echo $_GET['zip']; ?>&radius=<?php echo $_GET['radius']; ?>"><?php echo $_GET['term2']; ?></a>
 
<a href="display.php?term=<?php echo $_GET['term3']; ?>&term1=<?php echo $_GET['term1']; ?>&term2=<?php echo $_GET['term2']; ?>&term3=<?php echo $_GET['term']; ?>&term4=<?php echo $_GET['term4']; ?>&zip=<?php echo $_GET['zip']; ?>&radius=<?php echo $_GET['radius']; ?>"><?php echo $_GET['term3']; ?></a>
 
<a href="display.php?term=<?php echo $_GET['term4']; ?>&term1=<?php echo $_GET['term1']; ?>&term2=<?php echo $_GET['term2']; ?>&term3=<?php echo $_GET['term3']; ?>&term4=<?php echo $_GET['term']; ?>&zip=<?php echo $_GET['zip']; ?>&radius=<?php echo $_GET['radius']; ?>"><?php echo $_GET['term4']; ?></a>
</form>
</div>
<h1 id="compare">Comparisons</h1>
<?php include('compare.php');?>

<h1 id="positive">Positive v. Negative Tweets for <?php echo $_GET['term'];?> 
</h1>
<?php include('positivenegative.php');?>

<h1 id="location">Search By Location for <?php echo $_GET['term'];?></h1>
<?php include('location.php');?>

<h1 id="questions">Questions for <?php echo $_GET['term'];?></h1>
<?php include('question.php');?>

<h1 id="questions">Links for <?php echo $_GET['term'];?></h1>
<?php include('links.php');?>
</html>