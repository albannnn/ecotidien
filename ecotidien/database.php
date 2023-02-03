<?php
$servername = 'localhost';
$username = 'root'; 
// $password = 'Banban56890?'; 
$bdd = 'ecotidien';


//On établit la connexion
$conn = mysqli_connect($servername, $username,'',$bdd);




 mysqli_set_charset($conn, "utf8");
    
           

$requete = "SELECT * FROM astuces";

if($result = mysqli_query($conn, $requete)) {
    while($objet = mysqli_fetch_assoc($result)){
        $listObjet[] = $objet;
    }
} 

secho json_encode($listObjet); 
?>