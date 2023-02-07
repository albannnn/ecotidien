<?php
$servername = 'localhost';
$username = 'root'; 
// $password = ''; 
$bdd = 'ecotidien';


//On établit la connexion
try {
    $conn = new PDO("mysql:host=$servername;dbname=$bdd;charset=utf8mb4", $username,''); // Connexion avec PDO
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion Réussie";
}
catch(PDOException $e){
    echo "Erreur :".$e->getMessage();
}

    
$requete = "SELECT * FROM astuces ";
$listObjet = [];
if($result = $conn -> query($requete)) {
    while($objet =  $result -> fetchAll(PDO::FETCH_ASSOC)){
        $listObjet[] = $objet;
    }
} 
// $conn = null; // fermeture de la connexion
var_dump($listObjet);
//echo json_encode($listObjet);  // encodage en fichier json de l'array avec toutes les astuces pour pouvoir les réutiliser et les afficher sur la page
?>
