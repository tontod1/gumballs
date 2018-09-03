<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/index.css" />

	<div id="section1">
		<div id="section1-left-seasonal"> <div class="banner-big-font-seasonal">We Accept Items Seasonally,  <div class="banner-sm-font-seasonal">So That We Have What You Need,<br/> When You Need It! </div></div></div>
		<div id="section1-right-seasonal"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/seasonal-bannerV2.png" /> </div>
	</div>
	
	<?php include("connect.php"); ?>
	
	
<div id="section3" >
	<div class="main-block" id="section3-left">
		<div id="section3-la"> 
			<h1>Spring</h1> 
			<p><b>January 2 - February 28</b></p>
			<p>
				<ul>
					<li>light fabrics, spring prints & pastel colours</li>
					<li>jeans, khakis, capris, light pants</li>
					<li>spring dresses and skirts</li>
					<li>long and short sleeve shirts</li>
					<li>light weight hoodies and cardigans</li>
					<li>spring jackets, raincoats & rain boots</li>
					<li>light pjs and sleepers</li>
					<li>backyard toys & bicycles</li>
				</ul>
			</p>
		</div>
		<img class="divider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/divider.png" />
		<div id="section3-lb"> 
			<h1>Summer</h1>
			<p><b>March 1 - June 25</b></p>
			<p>
				<ul>
					<li>shorts, capris, light pants and jeans</li>
					<li>sundresses and skirts</li>
					<li>short sleeve shirts, sleeveless shirts and tank tops</li>
					<li>sunhats</li>
					<li>zip hoodies</li>
					<li>beachwear and swimsuits</li>
					<li>sandals, flipflops and water shoes</li>
				</ul>
			</p>
		</div>
		<img class="divider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/divider.png" />
		<div id="section3-lc"> 
			<h1>Fall</h1>
			<p><b>July 2 - August 31</b></p>
			<p>
				<ul>
					<li>medium fabrics, fall prints and colours</li>
					<li>capris and short sleeve shirts (until July 31)</li>
					<li>jeans, cords, skirts and pants</li>
					<li>back to school shoes and runners</li>
					<li>long sleeve shirts, hoodies and sweatshirts</li>
					<li>warm pjs and sleepers</li>
				</ul>
			</p>
		</div>
		<img class="divider" src="<?php echo Yii::app()->request->baseUrl; ?>/images/divider.png" />
		<div id="section3-la"> 
			<h1>Winter</h1>
			<p><b>Day after Labour Day - December 20</b></p>
			<p>
				<ul>
					<li>heavy fabrics, winter prints and darker colours</li>
					<li>jeans, lined pants and cords</li>
					<li>knits, turtlenecks, long sleeve shirts, hoodies and cardigans</li>
					<li>warm pjs and sleepers</li>
					<li>heavier pieces made with velour, velvet, fleece lining and fur trim</li>
					<li>snow coats and snow pants (Oct 1 - Nov 15)</li>
					<li>toys, toys and more toys!!</li>
					<li>lightweight jackets and vests</li>
				</ul>
			</p>
		</div>		
	</div>
	<div id="section3-right-season">
		<div id="section3-ra-season" > 
			<div class="ra1-season" >
				<h3>SEASONAL <br/>&<br/> HOLIDAY ITEMS</h3>
				
				<div class="season-items-right">Swimwear & Dance <div> Year - Round</div></div>
				<div class="season-items-right">Communion, Wedding & Christening Formal Wear <div>Febuary - April</div></div>
				<div class="season-items-right">Easter Outfits & Dresses <div>February - March</div></div>
				<div class="season-items-right">Baseball & Soccer Items <div>March - May</div></div>
				<div class="season-items-right">Back to School Items, Backpacks & Lunchbags <div>August</div></div>
				<div class="season-items-right">Hockey Skates, Helmets & Figure Skates <div>July - January</div></div>
				<div class="season-items-right">Halloween Costumes <div>September - October 15</div></div>
				<div class="season-items-right">Winter Outerwear <div>October - November 15</div></div>
				<div class="season-items-right">Holiday Outfits, Formal Wear & Christmas Items<div>November - December 15 <div>Toys sell well this time of year</div></div></div>
				
			</div>
		</div>
		<div id="section3-ra-season-bottom" >
		
		</div> 
	</div>
	
</div>