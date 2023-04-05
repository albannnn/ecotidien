<?php 
include "database.php";
include "fonctions.php";
$encodeFile = "../json/temporary.json";
$statut = ["Pas de Problemes"];

if(isset($_POST['verif'])){
    if(isset($_POST['username']) and isset($_POST['password'])){ 
        
        $user = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];   

        if(str_contains($user["username"], "<?php") or str_contains($user['password'],"<?php")){
            $statut[0] = "Vous avez rentré une chaine illégale"; // Si l'user essaie d'injecter du code php dans le form
            encode_in_file($encodeFile, $statut);
            echo "here";
            header("Location: ../connectPage.html");
        }

        elseif($user['username'] == "" and $user['password'] == ""){ // si l'user n'a rien mis dans les champs prévus à cet effet
            $statut[0] = "Veuillez remplir le formulaire";
            encode_in_file($encodeFile, $statut);
            header("Location: ../connectPage.html");
            
        }
        elseif($user['username'] == "" or $user['password'] == ""){
            $statut[0] = "Veuillez remplir entièrement le formulaire";
            encode_in_file($encodeFile, $statut);
            header("Location: ../connectPage.html");
        }  
        else{
            if($testBdd = isInBdd($user, $conn)){ //on regarde si l'user est dans la bdd
                if($testPass = testPassword($user, $conn)){ //On regarde si l'user a mis un mdp qui correspond à un user de la bdd
                    $user = selectRequest($user, $conn); //On prends toutes les données relatives à l'user
                    encode_in_file("../json/infoUser.json", $user); //on les encode dans un fichier json, ces données sont ensuites récupérées en js et utilisées
                    $statut[0] = "Pas de problèmes";
                    header("Location: ../account.html");
                    //echo "here";
                }
                else{
                $statut[0] = "mot de passe erroné";
                encode_in_file($encodeFile, $user);
                header("Location: ../connectPage.html");
                }
                

            }
            else{
                $statut[0] = "Il n'existe pas d'utilisateur avec cet username";
                header("Location: ../connectPage.html");
            }
        }
    }
    else{
        $statut[0] = "Veuillez remplir le formulaire";
        encode_in_file($encodeFile, $statut);
        echo "bonjour";
        //header("Location: ../connectPage.html");
    }
}


?>
