<? if(count($_GET)): ?>

<?

$domain = 'http://' . $_SERVER['HTTP_HOST'];
$code = $_GET['youtubeid'];
$type = $_GET['type'];
header("Location: ${domain}/${code}.${type}");

?>

<? else: ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Atmosphere 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110923

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<title>YoutubeDL</title>
<link href='http://fonts.googleapis.com/css?family=Delius' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">YoutubeDL</a></h1>
			<p>For freedom</p>
		</div>
		<div id="menu">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Api</a></li>
				<li><a href="#">About</a></li>
			</ul>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
            <p>Put the youtube id and choose the format you want to download the file.</p>
            <form>
                <input type="text" placeholder="Youtube ID..." value="" id="youtubeid" name="youtubeid"/>
                <select id="type" name="type">
                    <option>flv</option>
                    <option>mp3</option>
                </select>
                <input type="submit" value="DOWNLOAD"/>
            </form>

            <h2>Youtube ID</h2>
            <p> The "Youtube ID" is the URL's parameter "v". Corresponds to the text within the red box. It' placed after "v=" and before the next "&amp;"</p>
            <img src="/images/url.png" alt="YoutubeID"/>

            <h2>File Format</h2>
            <p>You can choose wheter you want to download it as a video (FLV) or an audio file (MP3).</p>
            <img src="/images/flv.png" alt="video file" class="left"/>
            <img src="/images/mp3.png" alt="audio file" class="right"/>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer-content">
	<div id="footer-bg" class="container">
		<div id="column1">
			<h2>Welcome to my website</h2>
			<p>In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum integer nisl risus, sagittis convallis, rutrum id, congue, and nibh.</p>
		</div>
		<div id="column2">
			<h2>Etiam rhoncus volutpat</h2>
			<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna.</p>
		</div>
		<div id="column3">
			<h2>Recommended Links</h2>
			<ul>
				<li><a href="#">Consectetuer adipiscing elit</a></li>
				<li><a href="#">Metus aliquam pellentesque</a></li>
				<li><a href="#">Suspendisse iaculis mauris</a></li>
				<li><a href="#">Urnanet non molestie semper</a></li>
				<li><a href="#">Proin gravida orci porttitor</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright (c) 2011 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

<? endif; ?>
