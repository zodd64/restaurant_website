<?php 
session_start();

$dbhost = "localhost";
$dbname = "id16342909_user_db";
$port = 8889;

$dbuser = "id16342909_zodd64";
$dbpass = "Melitzanas7*";

$dsn = "mysql:host={$dbhost};dbname={$dbname};port={$port};charset=utf8mb4"; 
$options=[ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ];
$pdo = new PDO($dsn, $dbuser, $dbpass, $options);
try{
$stmt = $pdo->prepare('INSERT INTO reservations(rdate,rtime,tid,people,tel,instructions) VALUES(:rdate,:rtime,:tid,:people,:tel,:instructions)'); 
$stmt->execute(["rdate"=>$_POST["rdate"],"rtime"=>$_POST["rtime"], "tid"=>$_POST["rtable"],"people"=>$_POST["ppl"],"tel"=>$_POST["tel"],"instructions"=>$_POST["instructions"]]); 
}
catch ( PDOException $Exception ) {
    $items = array();
    $stmt = $pdo->prepare('SELECT rdate,rtime,tid FROM reservations WHERE rdate=:rdate AND rtime=:rtime'); 
    $stmt->execute(["rdate"=>$_POST['rdate'],"rtime"=>$_POST['rtime']]);
    while ($row = $stmt->fetch()) {
       $items[] = $row['tid'];
    }
    $_SESSION['tables'] = $items;
    
    
    header("Location: ../failed_reservation.php");
    die(); 
}
header("Location: ../reservation2.php");
die();
?>