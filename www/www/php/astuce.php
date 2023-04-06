<?php 
    include 'database.php';
    // requete pour selectionner toute la table
    $requete = "SELECT conseil FROM astuces";
    if($result = $conn -> query($requete)){ // On fait la requete au serveur
        while($objet =  $result -> fetchAll(PDO::FETCH_ASSOC)){ // On met la requete dans un array
            $listObjet[] = $objet; 
        }
    }
    $randomIndex = rand(0, count($listObjet[0]) - 1);
    $conseil =  $listObjet[0][$randomIndex]['conseil'];
?>