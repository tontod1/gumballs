<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;


date_default_timezone_set('America/New_York');
$nowExact = time();
//$nowExact = strtotime('2 Jan 2015');  //for testing
$now = date('m-d', $nowExact);

$springStart = '2 Jan 1999';
$summerStart = '1 Mar 1999';
$fallStart = '2 Jul 1999';
$winterStart = '7 Sept 1999';
//$winterEnd = '20 Dec 1999';

$season = 'winter.jpg';  //default
if ($now >= date('m-d', strtotime($winterStart)) ) {
	$season = 'winter.jpg';
} elseif ($now >= date('m-d', strtotime($fallStart)) ) {
	$season = 'fall.jpg';
} elseif ($now >= date('m-d', strtotime($summerStart)) ) {
	$season = 'summer.jpg';
} elseif ($now >= date('m-d', strtotime($springStart)) ) {
	$season = 'spring.jpg';
} 


?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" />

	<div id="section1">
		<div id="section1-left-home"> <div class="banner-big-font">We Keep the Cost of Growing Up ... Down! <div class="banner-sm-font">Gumballs & Overalls is proud to be Amherstburg's premiere consignment boutique since 2004!</div></div></div>
		<div id="section1-right-home"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/home-bannerV2.png" /> </div>
	</div>
	
	<?php include("pages/connect.php"); ?>

<div id="section3">
	<div class="main-block" id="section3-left">
		<div id="section3-la"> 
			<h1>Welcome to Gumballs & Overalls!</h1> 
			<p><b>We offer a huge selection of new and nearly-new, childrens clothing, toys, furniture and gear for babies, kids and tweens.</b></p>
			<p>Our reputation for quality is second to none and we pride ourselves with an outstanding inventory.  Each piece is hand selected and thoroughly inspected before we add it to our collection of ever-changing quality items.</p>
			<p>Our staff is friendly and knowledgeable and we guarantee that you will always receive customer service that is first class!</p>
			<p>Gumballs & Overalls is an innovative and smart  tool that allows parents to budget, shop and make money at the same time.</p>
			<p>Whether you're a bargain shopper or a savvy consignor, you'll be hooked on Gumballs & Overalls as soon as you walk in our door!</p>
			<p>Let us show you how exceptional second hand items can be!</p>
		</div>
	</div>
	<div id="section3-right">
		<div id="section3-ra"> 
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/<?php echo $season ?>" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/homeRightBannerB.jpg" />
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/hours.jpg" />
		</div>
		<div id="section3-rb">
			<div class="fb-page section3-rb-fb" data-href="https://www.facebook.com/gumballsandoveralls.ca" data-width="350" data-height="430" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/gumballsandoveralls.ca"><a href="https://www.facebook.com/gumballsandoveralls.ca">Gumballs &amp; Overalls</a></blockquote></div></div>		
		</div>
	</div>
	
</div>