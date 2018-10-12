<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation Page</title>
  </head>
  <body>
    <?php
      $money = $_POST['selection'];
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $amount = $_POST['amount'];
      echo "<h1>You have spoken for \$$money, thank you.</h1>";
      $filename = "/money/$money.txt";
      $handle = fopen($filename, 'w') or die("Failed to open $filename.");
      $data = "$name ($phone) spoke for \$$amount (\$$money)\n";
      fwrite($handle, $data);
    ?>
    <br/>
    Please make checks payable to and return to:<br/>
    Third CRC Church<br/>
    10 W Central Ave.<br/>
    Zeeland, MI 49464<br/>
    Attn Ron Snoeyink<br/>
    Please add PR19 to the memo.<br/>
    <a href="index.php">Return to main page</a>
  </body>
</html>
