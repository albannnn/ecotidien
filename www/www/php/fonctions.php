<?php 
include "database.php";

/* fichier contenant les fonctions utilisées dans le code */

function addUserRequest($user, $bdd){
    $requete = sprintf("INSERT INTO `users` (`email`, `password`, `username`, `nom`, `prénom`) VALUES ('%s', '%s', '%s', '%s', '%s');", $user['email'], $user['password'], $user['username'], $user['nom'], $user['prenom']);
    $query = $bdd -> query($requete);
    if($result = $query -> fetch(PDO::FETCH_ASSOC)){
        echo "utilisateur inscrit !";
        return True; 
    }
    return False;
}


function isInBdd($user, $bdd){
    $requete = sprintf("SELECT COUNT(*) FROM `users` WHERE username = '%s' ;", $user['username']);
    $query = $bdd -> query($requete);
    if($result = $query -> fetch(PDO::FETCH_ASSOC)){
        if($result["COUNT(*)"] == 1){
            return True;
        }
        elseif($result["COUNT(*)"] == 0){
            return False;
        }
        else{
            return "something went wrong"; //si + d'1 user ont le meme username, il y a un problème
        }
    }
}


function selectRequest($user, $bdd){
    //renvoie le tableau user modifié avec les autres informations de user
    $requete = sprintf("SELECT * FROM `users` WHERE username = '%s';", $user["username"]);
    $query = $bdd -> query($requete);
    if($result = $query -> fetch(PDO::FETCH_ASSOC)){
        $user["email"] = $result["email"];
        $user["nom"] = $result["nom"];
        $user["prenom"] = $result["prénom"];
        return $user;
    }
}


function testPassword($user, $bdd){
    //Renvoie True si l'utilisateur correspond au mot de passe 
    $requete = sprintf("SELECT * FROM `users` WHERE password = '%s' AND username = '%s';", $user["password"], $user["username"]);
    $query = $bdd -> query($requete);
    if($result = $query -> fetch(PDO::FETCH_ASSOC)){
        return True;
    }
    else{
        return False;
    }

}

function encode_in_file($file, $valToEncode){
    // void function
    $encoded = json_encode($valToEncode);
    file_put_contents($file, $encoded);
}

?>