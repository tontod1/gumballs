<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Sansita+One" />
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container" id="page">
	
	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/GumballsLogo.png" /></div>

		<div id="mainmenu">
			<p>221 Sandwich St. South, Amhertsburg, ON, 519-736-0990</p>
			<p class="line2">gumballs@cogeco.net</p>
			<!-- <p class="main-email">gumballs@cogeco.net</p>-->
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php" class="menu-button" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/HomeButton.png" /></a>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=how" class="menu-button" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/HowButton.png" /></a>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=prepare" class="menu-button" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/PrepareButton.png" /></a>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=seasonal" class="menu-button" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/SeasonalButton.png" /></a>
			<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=retail" class="menu-button" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/RetailButton.png" /></a>
		</div>
	</div><!-- header -->

	




	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div class="footer-a">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/GumballsLogo.png" class="footer-logo"/>
			<p>	Gumballs & Overalls 2015&copy; <?php echo date('Y'); ?>. All Rights Reserved.<br/></p>
		</div>
		<div class="footer-b">
			<h4>Navigation</h4>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/">Home</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=how">How it Works</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=prepare">Prepare Your Items</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=seasonal">Seasonal Schedule</a></p>
			<p><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=retail">Retail Boutique</a></p>										
		</div>
		<div class="footer-c">
			<h4>Contact</h4>
			<p>
				221 Sandwich St. South,
				Amherstburg, ON
			</p>
			<br/>
			<p>
				519-736-0990<br/>
				gumballs@cogeco.net
			</p>
		</div>
		<div class="footer-d">
			<h4>Social</h4>
			<a href="facebook.com">Facebook</a>
		</div>		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
