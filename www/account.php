<?php 

$json_datas = file_get_contents("C:/laragon/www/json/infoUser.json"); 
$user = json_decode($json_datas, JSON_OBJECT_AS_ARRAY); //récupérer les infos de l'utilisateur sous la forme d'un array

?>
<!DOCTYPE html>
<html>    
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/account.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="manifest" href="manifest.json">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ecotidien - <?php echo $user["username"]; ?></title>
    </head>
    <body>
        <div class = "header">
            <p class = "textWelcome">Bonjour <?php echo $user["username"]; ?></p>
        </div>
        
        <div class="corps">
            <p class="texte"></p>
        </div>


    </body>
    <script src = "js/account.js"></script>
</html>