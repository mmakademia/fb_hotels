<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
 <body>
<div class="container">
<div class="well">
    <h4>db connect test</h4> 
</div>
<?php 
# example-canvas-app.php
$fb = new Facebook\Facebook([/* . . . */]);

$helper = $fb->getCanvasHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in.
}
 ?>
	<div class="row">
    <div class="col-sm-12 col-md-12" style="padding-top: 2em;">
    <div class="jumbotron">
    <h1>Szavazz hetenete egy hotelre<br/><small>talán még nyersz is valamit</small></h1>
        <img src="">        
    </div>
    </div>
	    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 card">
    		<div class="thumbnail">
    		    <img src="https://i.imgur.com/XIQDiJT.png" class="img-responsive" alt="#">
    			<div class="caption">
    				<h3>
    					Hotel 1<br/>
    					<small>
    						nagyon jó hotel
    					</small>
    				</h3>
    				<hr>		
    				<p>
    					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    				</p>
    				<button class="btn btn-default" role="button">Információk</button>
                    <button class="btn btn-default" role="button">Rá szavazok</button>
    			</div>
    		</div>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 card">
    		<div class="thumbnail">
    		    <img src="https://i.imgur.com/fPdIFef.png" class="img-responsive" alt="#">
    			<div class="caption">
    				<h3>
    					Hotel 2<br/>
    					<small>
    						mégjobb hotel
    					</small>
    				</h3>
    				<hr>		
    				<p>
    					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    				</p>
    				<button class="btn btn-default" role="button">Információk</button>
                    <button class="btn btn-default" role="button">Rá szavazok</button>
    			</div>
    		</div>
    	</div>
	</div>
<footer>
<div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-push-4">
            <img src="https://i.imgur.com/sqGlVhU.png" class="thumbnail img-responsive">  footer credits 
    </div>
</div>
</footer>
</div>

 </body>
</html>
