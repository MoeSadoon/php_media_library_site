<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Personal Media Library</a></h1>

			<ul class="nav">
                <li class="books<?php if($section == "books") {echo " on";} ?>"><a href="catalogue.php?cat=books">"Books"</a></li>
                <li class="movies<?php if($section == "movies") {echo " on";} ?>"><a href="catalogue.php?cat=movies">Movies</a></li>
                <li class="music<?php if($section == "music") {echo " on";} ?>"><a href="catalogue.php?cat=music">Music</a></li>
                <li class="suggest<?php if($section == "suggest") {echo " on";} ?>"><a href="catalogue.php?cat=suggest">Suggest</a></li>
								<li class="company<?php if($section == "company") {echo " on";} ?>"><a href="catalogue.php?cat=company">Company</a></li>
            </ul>

		</div>

	</div>

	<div id="content">
