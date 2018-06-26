<!DOCTYPE html>
<html>
  <head>
    <title>Help us out!</title>
    <link rel="stylesheet" href="main.css">
    </head>

    <body>
      <?php
	for ($money = 1; $money <= 99; $money++) {
	if(file_exists("money/$money.txt")){
	echo "<div class=\"env taken\">\$$money</div>\n";
	} else {
	echo "<div class=\"env\"><a href=\"pick.php?value=$money\">\$$money</a></div>\n";
	}
	}
      ?>
    </body>
  </html>
