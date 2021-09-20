<?php 
session_start();

$dbhost = "localhost";
$dbname = "id16342909_user_db";
$port = 8889;

$dbuser = "id16342909_zodd64";
$dbpass = "";

$dsn = "mysql:host={$dbhost};dbname={$dbname};port={$port};charset=utf8mb4"; 
$options=[ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ];
$pdo = new PDO($dsn, $dbuser, $dbpass, $options);

$stmt = $pdo->prepare('INSERT INTO messages(id,fname,lname,email,subject) VALUES(:id,:fname,:lname,:email,:subject)'); 
$stmt->execute(["id"=>NULL,"fname"=>$_POST["firstname"], "lname"=>$_POST["lastname"],"email"=>$_POST["email"],"subject"=>$_POST["subject"]]); 

header("Location: ../contact2.php");
die();
?>
