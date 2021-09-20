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

$stmt = $pdo->prepare('SELECT username, passwd,admin FROM users WHERE username=:username'); 
$stmt->execute(["username"=>$_POST['username']]);
$row = $stmt->fetch();

if (!$row){
	header("Location: ../wronglogin1.php");
	die();
}
else{
	$hash = $row['passwd'];
	$ok = password_verify($_POST['password'],$hash);
	if($ok){
	    $_SESSION['username'] = $_POST['username'];
	    if($row['admin']==1){
	        $_SESSION['admin'] = $row['admin'];
	    }
		header("Location: ../welcome_back.php");
		die();
	}
	else{
		header("Location: ../wronglogin2.php");
		die();
	}
}

?>
