
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="manifest.json">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ecotidien</title>
        <?php include 'php/astuce.php'; ?>
    </head>
    <body>


 <!-- On crée un splashscreen en utilisant du js et css ---->   
        
 
         <div class="splash">
            <img class="fade-in" src="images/logo.png"></img>
        </div>  
        
        
 <!-- Le haut de page, le logo centré au milieu--->    
   
        <div class = 'header'>
            
            <img class="logo" src="images/192logo.png"/>
            <a href="connectPage.html" class = 'button'>
                <button> Se Connecter </button>    
            </a>
            
            
        </div>
        
        
        
 <!-- Le milieu de page et l'astuce, en gros au milieu de la page-->       
        <p id="main-text"> <?php echo $conseil;?> </p> <!-- La var conseil vient du fichier database.php où l'on récupère la variable--->
<!-- Le bas de page -->
        <footer>
            <p>© 2023 Ecotidien. Tous droits réservés.</p>
        </footer>
    
        
        
        
        
        
    <script src="js/splashscreen.js"></script>    
    </body>
</html>


