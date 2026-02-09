<?php 
function retrieveAllUsers(){
include "connection.php";


$sql = "SELECT * FROM user";
$stmnt = $conn -> prepare($sql);
$stmnt->execute();
return $stmnt;

return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}

function retrieveAllproducts(){
include "connection.php";


$sql = "SELECT * FROM products";
$stmnt = $conn -> prepare($sql);
$stmnt->execute();
return $stmnt;

return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}
function loginAuth($usernames, $passwords){
    include "connection.php";
 
$sql = "SELECT *  FROM user WHERE username = :username AND password = :password";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "username" => $usernames,
  "password" => $passwords


]);
$count = $stmnt -> rowCount();

return $count;
}
function getUser($user_id){
include "connection.php";

$sql = "SELECT *  FROM user WHERE user_id = :id";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "id" =>  $user_id
]);

 return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}

function getproducts($prod_id){
include "connection.php";

$sql = "SELECT *  FROM products WHERE prod_id = :id";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
  "id" =>  $prod_id
]);

 return $stmnt->fetchAll(PDO::FETCH_ASSOC);
}


function updateUser($userid, $name, $age, $address, $username, $password){
include "connection.php";

$sql = "UPDATE user SET name= :name, age= :age, address= :address, username= :username password= :password WHERE userid =:userid";
$stmnt = $conn -> prepare($sql);
$stmnt->execute([
 "names" => $names,
    "age" => $age,
    "address" => $address,
    "username" => $username,
    "password" => $password,
    "user_id" => $userid
]);

 return $stmnt->fetchAll(PDO::FETCH_ASSOC);

}





?>