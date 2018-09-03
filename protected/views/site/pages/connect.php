<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=922471214585632&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	<?php
// define variables and set to empty values
$email = "";
$fakeEmail = "";
$message = "";

function isValidEmail($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["subscribe"];
  $fakeEmail = $_POST["email"];
}

if ($fakeEmail == 'email' && isValidEmail($email)) {
	$message = "You are now subscribed!";
	mail ( 'gumballs@cogeco.net' , 'new subscriber to you website' , 'new subscriber email address: '.$email );
}

?>
	
	
	<div id="section2">
		<div id="section2-a"> <h2>Follow Us On Facebook!</h2>Stay in the know with the latest updates, in-store contests, sales and sneak peeks at our best products!</div>
		<!-- <div id="section2-b"> </div>-->
		<div id="section2-c"> 
			<div class="fb-like" data-href="https://www.facebook.com/gumballsandoveralls.ca/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
			<!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fb.jpg" /></a> --> 
		</div>
	</div>