<?php
    $title = "Assignment 2";
    $header = "Zack's Web Page";
    $name = "Zachary Taylor";
    $string = "";
    $paragraph = "";
    for($i = 0; $i<3; $i++) {
    $paragraph .=<<<EOD
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat mollis dolor at bibendum. In congue  \r\n
    maximus ligula, ut faucibus mi accumsan at. Vestibulum sagittis tortor eget dui ultricies, a vulputate lacus faucibus. \r\n 
    Fusce aliquet bibendum erat, sed bibendum eros cursus eu. Nulla at neque rhoncus, ultricies odio at, accumsan \r\n
    eProin in turpis eu leo dapibus pulvinar. Vivamus viverra massa ut enim fringilla ultricies. Donec in enim blandit, \r\n
    aculis nulla quis, egestas elit. Nullam ut enim id erat bibendum finibus nec ac eros. Nulla malesuada ex facilisis \r\n
    ultrices rhoncus. Nullam in euismod nisl. Donec pulvinar ex sit amet aliquet egestas.\r\n         
EOD;
    $paragraph .= nl2br("\n\n");
    }

    $footer = "This is the footer";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $header;?></h1>
		</header>
		<main>
			<h2><?php echo $name;?></h2>
			<p><?php echo $paragraph;?></p>
			
		</main>
		<footer>
			<p><?php echo $footer;?></p>
		</footer>
	</div>
	
</body>
</html>