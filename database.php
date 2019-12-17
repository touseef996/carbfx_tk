<!--Save as database.php-->
<!DOCTYPE html>
<html>
<head>
<title> My App </title>
<meta charset="utf-8">
<meta name = "viewport" content="width=device-width, initial-scale=1, minimal-ui"/>
<link rel = "shortcut icon" href="favicon.ico"/>
<meta name = "apple-mobile-web-app-capable" content="yes" />
<meta name = "apple-mobile-web-app-status-bar-style" content="black" />
<link rel = "apple-touch-startup-image" href="images/splash.png" />
<link rel = "apple-touch-icon-precomposed" href = "images/icon.png" />
<link rel = "icon" size ="192x192" href="images/icon.png" />
<link rel ="stylesheet" href = "css/jquery.mobile-1.4.5.min.css">
<script src="js/jquery-2.1.1.js"></script>
<script src ="js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<div data-role="page" data-title="My App" id="index" data-theme="a">
<div data-role="header" data-position="fixed">
<h4> My App </h4>
    </div>
    <div data-role="content">
 <?php
 $con = mysqli_connect('mysql6.000webhost.com','a5782884_thor','avenger1','a5782884_avenger');
 if (!$con) {
 die('Could not connect: ' . mysqli_error($con));
 }
 echo 'you have connected successfully';
    $sqlget = "SELECT * FROM avenger";
        
  
        
       $sqldata = mysqli_query($con, $sqlget) or die('error');

            echo "<table border =4 width = 50%>";
                    echo "<tr><th>avenger</th><th>";
                        while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC))
                        {
                            echo "<tr><td>";
                                echo $row['First name'];
                            echo "</td></td>";
                            
                            echo "<tr><td>";
                                echo $row['Surname'];
                            echo "</td></td>";
                                
                                  
                        }
            echo "</table>";

 
 ?>
 </div>
 <div data-role="footer" data-position="fixed">
<h4> My App </h4>
</div>
</div>
</body>
</html>