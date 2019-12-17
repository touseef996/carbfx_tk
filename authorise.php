<?php

    $username = $_POST['touseef'];
    $test = $_POST['password'];
    $password = password;
    ?>
    

<!DOCTYPE html>
<html>


    <head>

<title>CarbFax</title>

    
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

<div data-role="page" data-title="My App" id="index" >

<div data-role="header" data-position="fixed">

</div>
    <h2> Login </h2>
    
    <?php
    if($password==$test)
    {  
        echo 'Welcome &nbsp', $username;
        
        echo '<a href ="blog.php" class="ui-btn"> Proceed to Blog</a>';
    }
   
    else
   
    {
            
            echo 'Incorrect username or password, please try again';
            echo'<a href="login.html" class="ui-btn">Back to Login</a>';
        
        }
    
    ?>

    
</div>
    </body>
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
