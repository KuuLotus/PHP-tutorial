<?php
$user = "suzuki";
$pass = "kuu1227ren0910";
try {
  $dbh = new PDO("mysql:host=localhost;dbname=db1;charset=utf8", $user, $pass);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM recipes";
  $stmt = $dbh->query($sql);
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo "<table>" . PHP_EOL;
  echo "<tr>" . PHP_EOL;
  echo "<th>料理名</th><th>予算</th><th>難易度</th>" . PHP_EOL;
  echo "</tr>" . PHP_EOL;
  echo "</table>" . PHP_EOL;
  $dbh = null;
} catch (PDOException $e) {
  echo "エラー発生: " . htmlspecialchars($e->getMessage(), ENT_QUOTES) . "<br>";
  exit;
}
