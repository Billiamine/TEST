<!DOCTYPE html>
<html>
  <body>
        <form method="post" action="process.php">
                First name:<br>
                <input type="text" name="first_name">
                <br>
                Last name:<br>
                <input type="text" name="last_name">
                <br>
                City name:<br>
                <input type="text" name="city_name">
                <br>
                Email Id:<br>
                <input type="email" name="email">
                <br><br>
                <input type="submit" name="save" value="submit">
        </form>
  </body>
</html>


<?php
$user = "lampp";
$password = "lampp";
$database = "lampp";
$table = "employee";

try {

 $db= new PDO("pgsql:host=192.168.52.142;dbname=$database", $user, $password);
  echo $t ."|". 'first_name' . "   |  " .  'last_name'. " |  " .'city_name'. " | ". 'email';
  foreach($db->query("SELECT * FROM $table") as $row) {
         echo "<br>---------------------------------------------------------------------------|<br>";
         echo $t ."|".$row['first_name'] . "   |  " . $row['last_name']. " |  " .$row['city_name']. " | ". $row['email'];
  }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

