<?php 
include 'database.php';
include 'fonctions.php';
$encodeFile = "../state.json";
$affiche =  ["Pas de problemes"]; // Affiche est une variable présente sur la page createAccount, si l'user ne fait rien ou ne cause pas de prblmes elle restera à cette valeur : ""

if(isset($_POST["verif"])){                                         // si le bouton submit est cliqué
    echo "Dans le 1er if";
    if(                                                             // si l'utilisateur a rempli tous les champs
        isset($_POST['email']) 
    and isset($_POST['password']) 
    and isset($_POST['username']) 
    and isset($_POST['nom'])
    and isset($_POST['prénom'])){   
        echo "Dans Le deuxieme if "."<br>";
        
        $user = [            // création d'un array user indépendant de celui de $_POST
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "username" => $_POST['username'],
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prénom'] 
        ];
        //gestion des problèmes liés au formulaire
        foreach($user as $key => $val){                                       // Parcours de l'array user
            if (str_contains($val, "<?php")){                                 // Si l'utilisateur mais du code php dans le form
                $affiche[0] = "Vous avez entre des caracteres interdits !";       
                encode_in_file($encodeFile, $affiche);
                header("Location: ../createPage.html");
            } 
            elseif($val == ""){                                               // Si l'utilisateur ne rempli pas tous les champ
                $affiche[0] = "Vous n'avez pas rentre tous les champs";
                encode_in_file($encodeFile, $affiche);
                header("Location: ../createPage.html");
            }
        }
        //gestion de l'ajout de l'utilisateur dans la bdd
        if(! isInBdd($user, $conn)){ 
            $requeteAddUser = addUserRequest($user, $conn);  // ajout de l'user si il n'est pas dans la bdd
        }
        else{
            echo "Nom d'utilisateur déjà pris !";
        }
        
    }












    else{
        echo "fail to access datas";
    }
}
?>