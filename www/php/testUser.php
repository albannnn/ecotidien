<?php 
include "database.php";
include "fonctions.php";

$user1 = [            // création d'un array user indépendant de celui de $_POST
            "email" => "admin",
            "password" => "admin2005",
            "username" => "admin",
            "nom" => "admin",
            "prenom" => "admin" 
];
$user2 = [
            "email" => "admin",
            "password" => "admin2005",
            "username" => "admin",
            "nom" => "zazaz",
            "prenom" => "admizazan"
];

$test1 = testPassword($user1, $conn);
$test2 = testPassword($user2, $conn);
echo "Test 1 :".$test1;
echo "<br>";
echo "Test 2 :".$test2;

?>