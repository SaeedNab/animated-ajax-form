<?php
include "database.php";
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
$connection = $db->connect();
$username = $_GET["username"];
$password = $_GET["password"];
$query = "insert into admin (username,password) VALUES (:username,:password)";
$stmt = $connection->prepare($query);
$stmt->bindValue(':username',$username);
$pwd = password_hash($password,PASSWORD_DEFAULT);
$stmt->bindValue(':password',$pwd);
$res = $stmt->execute();
if($res){
    echo "success";

}else{
    echo "error";
}




?>