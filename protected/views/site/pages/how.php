<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" />

	<div id="section1" style="height: 250px;" >
		<div id="section1-left-how"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/how-bannerV3.png" /> </div>
		<div id="section1-right-how"> <div class="banner-big-font-how">Want to declutter your closets?<br/><span style="color: #262b60;">Looking for a great deal?</span><div class="banner-sm-font-how">Clear your closets <spn class="banner-sm-font-how-2" >AND </spn> make money at <br/>Gumballs & Overalls</div></div> </div>
	</div>
	
	<?php include("connect.php"); ?>


<div id="section3" style="height: 750px;">
	<div class="main-block" id="section3-leftV2">
		<div id="section3-la"> 
			
			<h1 style="color: #5853a5;">How Consignment works:</h1> 
			<table>
				<tr><td class="heading">Terms:</td><td> Your items will be on consignment for 90 days. (some exceptions apply).</td></tr>
				<tr><td class="heading">Split:</td><td> You will receive 50% on large baby gear items and furniture.  40% is given on all other items.</td></tr>
				<tr><td class="heading">Payments:</td><td> Cash payouts are available to you immediately following the sale of any consigned item. For payouts larger than $100, please give us one week notice to have a cheque ready for you.</td></tr>
				<tr><td class="heading">Appointments:</td><td> We gladly accept consigments Monday - Saturday between the hours of 10:00am - 5:00pm.  Please call ahead to let us know what day you will be coming in so that we can add your name to our list of consignors for that day.</td></tr>
				<tr><td class="heading">Drop & Run:</td><td> If on your scheduled day you prefer not to wait while we sort your items, you can choose to leave them with us to go through at a later time. <br/>If we find itmes that we are not able to consign, you may either: <div> a) Have us donate these items to our local charity </div><div> b) Have us call you after we're finished sorting so that you can come back to retrieve them.</div></td></tr>
			</table>
		</div>
	</div>
	
	<div id="section3-rightV2">
		<div id="section3-ra-how"> 
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/recycle.jpg" />
		</div>
	</div>
	
	
</div>