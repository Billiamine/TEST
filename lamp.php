<?php
$user = "essai1";
$password = "essai1";
$database = "essai1";
$table = "essai2";



try {
  $db = new PDO("pgsql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Regarder la table</h2><ol>";
  foreach($db->query("SELECT id FROM $table") as $row) {
    echo "<li>" . $row['id'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
