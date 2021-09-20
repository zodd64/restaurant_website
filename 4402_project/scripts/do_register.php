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
try {
$hash= password_hash($_POST["password"], PASSWORD_DEFAULT);
$stmt = $pdo->prepare('INSERT INTO users(id,username,passwd,firstname,lastname,email,admin) VALUES(:id,:username,:passwd,:firstname,:lastname,:email,:admin)'); 
$stmt->execute(["id"=>NULL,"username"=>$_POST["username"],"passwd"=>$hash,"firstname"=>$_POST["firstname"], "lastname"=>$_POST["lastname"],"email"=>$_POST["email"],"admin"=>0]); 
}
catch ( PDOException $Exception ) {
    header("Location: ../failed_registration.php");
    die(); 
}
header("Location: ../welcome.php");
die();
?>
