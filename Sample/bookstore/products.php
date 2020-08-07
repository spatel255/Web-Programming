<?php
// (1) CONNECT TO DATABASE
// DATABASE SETTINGS - CHANGE THESE TO YOUR OWN
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false]
  );
} catch (Exception $ex) {
  print_r($ex);
  die();
}

// (2) GET PRODUCTS
$stmt = $pdo->prepare("SELECT * FROM `products`");
$stmt->execute();
$products = $stmt->fetchAll();
?>
