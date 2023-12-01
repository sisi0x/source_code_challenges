<?php

$host = 'localhost';
$db = 'source_code_challenges';
$user = '127.0.0.1';
$password = ''; 

$dsn = "pgsql:host=$host; port=5432; dbname=$db;";
// make a database connection
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION]);
 if ($pdo) {
 $id = $_GET['id'];
$stmt = $pdo->prepare("SELECT FROM users where id=?");
 $stmt->execute([$id]);
 if($stmt->rowCount() > 0) {

while ($row = $stmt->fetch()) {
echo "<b>id:</b>".$id."<br />\n";
echo "<b>name:</b>".$row['name']."<br />\n";
}
} else {
echo "id not found";
} }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</html><h1>Sisi</h1>
</body>
