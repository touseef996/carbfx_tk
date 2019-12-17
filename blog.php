<?php

$note_name = 'note.txt';
$uniqueNotePerIP = true;

if($uniqueNotePerIP){
	
	// Use the user's IP as the name of the note.
	// This is useful when you have many people
	// using the app simultaneously.
	
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$note_name = 'notes/'.md5($_SERVER['HTTP_X_FORWARDED_FOR']).'.txt';
	}
	else{
		$note_name = 'notes/'.md5($_SERVER['REMOTE_ADDR']).'.txt';
	}
}


if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
	// This is an AJAX request
	
	if(isset($_POST['note'])){
		// Write the file to disk
		file_put_contents($note_name, $_POST['note']);
		echo '{"saved":1}';
	}
	
	exit;
}

$note_content = '

                Write your note here.';

             

if( file_exists($note_name) ){
	$note_content = htmlspecialchars( file_get_contents($note_name) );
}

?>
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
    <link rel ="stylesheet" href = "css/styles.css">
	<script src="js/jquery-2.1.1.js"></script>
	<script src ="js/jquery.mobile-1.4.5.min.js"></script>
    <script src ="js/script.js"></script>
</head>
<body>
    <div data-role="page"  data-title="My App" id="notes" data-theme="a">
        <div data-role="header" data-position="fixed">
            <h4> My App </h4>
        </div>
        <div data-role="content">
            <div id="pad">
                <h2>Note</h2>
                <textarea id="note"><?php echo $note_content ?></textarea>
                <a href="index.html" class="ui-btn ui-btn-icon-top ui-icon-back">Post</a>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h4> My App </h4>
        </div>
    </div>
</body>
</html>