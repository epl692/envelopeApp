<!DOCTYPE html>
<html>
  <head>
    <title>Help us out!</title>
    <link rel="stylesheet" href="main.css">
    </head>
  <body>
    <div id="head"><h1>Help us get to (city),(st)</h1>
      <h2>We're going to (city),(st) and we need your help! Pick a availible donation amount below an give us a helping hand!</h2>
      </div>
    <div id="env-box">
    <?php
	for ($money = 1; $money <= 99; $money++) {
	if(file_exists("money/$money.txt")){
	echo "<div class=\"env taken\">\$$money</div>\n";
	} else {
	echo "<div class=\"env\"><a href=\"pick.php?value=$money\">\$$money</a></div>\n";
	}
	}
      ?></div>
    </body>
  </html>
