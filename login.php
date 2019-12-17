 <!DOCTYPE html>
<html>
<head>
<title> Carbfax </title>

    
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width, initial-scale=1,minimal-ui"/>
<link rel="shortcut icon" href="favicon.ico" />

<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-staus-bar-style" content="black" />

<link rel="apple-touch-startup-image" href="images/splash.png" />
<link rel="apple-touch-icon-precomposed" href="images/splash.png" />
<link rel="icon" size="192x192" href="images/icon.png" />

<link rel ="stylesheet" href ="css/jquery.mobile-1.4.5.min.css">
<script src = "js/jquery-2.1.1.js"></script>
<script src = "js/jquery.mobile-1.4.5.min.js"></script>



</head>

<body>


<div data-role="page"  data-title="Carbfax" id="login" data-theme="a">

	<div data-role="header" data-position="fixed">
	    <a href ="index.html" class="ui-btn"> Home </a>
		<h4> Carbfax </h4>
	</div>
	
	
<div data-role="content">

	<h2> Login </h2>
	
	
<form id="check-user" class="ui-body ui-body-a ui-corner-all" data-ajax="false" method="post" action="authorise.php">
   
<fieldset>
<div data-role="fieldcontain">
<label for="username">Enter your username:</label>
<input type="text" value ="" name="username" id="username"/>
</div>

<div data-role="fieldcontain">
<label for="password">Enter your password:</label>
<input type="password" value="" name="password" id="password"/>
</div>

<input type="submit" data-theme="b" name="submit" id="submit" value="Submit">
</fieldset>
</form>
</div>  
<div data-role="footer" data-position="fixed">
  


    <h4> Carbfax Copyright©</h4>

</div>

</div>

</body>

</html>