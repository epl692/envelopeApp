<!DOCTYPE html>
<html>
  <head>
    <title>Help us out!</title>
    <link rel="stylesheet" href="main.css">
    </head>
  <body>
    <div id="head"><h1>Help us get to Puerto Rico!</h1>
      <h2>We're going to Puerto Rico and we need your help! Pick a availible donation amount below an give us a helping hand!</h2>
      <h3>WHEN: The trip is planned for February 13-22 2019.<br/>
	WHO: Members of 3rd CRC in Zeeland, MI combined with GMB AE friends, and spouses, etc.<br/>
      WHAT: Huricane relief and reconstruction</h3>
      </div>
    <div id="env-box">
    <?php
	for ($money = 1; $money <= 99; $money++) {
	if(file_exists("/money/$money.txt")){
	echo "<div class=\"env taken\">\$$money</div>\n";
	} else {
	echo "<div class=\"env\"><a href=\"pick.php?value=$money\">\$$money</a></div>\n";
	}
	}
      ?></div>
    </body>
  </html>
