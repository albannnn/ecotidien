<?php
    print('<link rel="stylesheet" href="style.css" type="text/css">');
   
  




?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="manifest.json">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ecotidien</title>
        
    </head>
    <body>


 <!-- On crée un splashscreen en utilisant du js et css ---->   
        
 
         <div class="splash">
            <img class="fade-in" src="images/logo.png"></img>
        </div>  
        
        
 <!-- Le haut de page, le logo centré au milieu--->    
   
        <div class = 'header'>
            
            <img class="logo" src="images/logo.png"/>
            
        </div>
        
        
   <script src="app.js">
        </script>     
 <!-- Le milieu de page et l'astuce, en gros au milieu de la page-->       
<?php  $servername = 'localhost';
    $username = 'root'; 
    // $password = ''; 
    $bdd = 'ecotidien';


    //On établit la connexion
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$bdd;charset=utf8mb4", $username,''); // Connexion avec PDO
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }
    catch(PDOException $e){
        echo "Erreur :".$e->getMessage();
    }
    // requete pour selectionner toute la table
    $requete = "SELECT conseil FROM astuces";
    if($result = $conn -> query($requete)){ // On fait la requete au serveur
        while($objet =  $result -> fetchAll(PDO::FETCH_ASSOC)){ // On met la requete dans un array
            $listObjet[] = $objet; 
        }
    }
    $randomIndex = rand(0, count($listObjet[0]));
    $conseil =  $listObjet[0][$randomIndex]['conseil'];
    
    
    
    ?>
        <p id="main-text"> <?php echo $conseil;?> </p>
<!-- Le bas de page -->
        <footer>
            <p>© 2023 Ecotidien. Tous droits réservés.</p>
        </footer>
    
        
        
        
        
        
         
    </body>
</html>


