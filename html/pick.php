<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation</title>
  </head>
  <body>

    <h1>Please confirm your selection of $<?php echo $_GET['value'];?>.</h1>
    <form action="speak.php" method="post">
      <table>
	<tr><td>Your Name:</td><td><input type="text" name="name"></td></tr>
	<tr><td>Phone Number:</td><td><input type="text" name="phone"></td></tr>
	<tr><td>Donation Amount:</td><td><input type="text" name="amount" value="<?php echo $_GET['value'];?>"</td></tr>
      </table>
      <input type="hidden" name="selection" value="<?php echo $_GET['value'];?>">
      <input type="submit" value="Donate"><br/>
    </form>
  </body>
</html>
