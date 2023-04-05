let user = "";
document.addEventListener("DOMContentLoaded", function(){ //on écoute le chargement de la page
    let request = new XMLHttpRequest();
    request.open("GET", "../json/infoUser.json");
    request.responseType = "json";
    request.send();
    console.log("requete envoyé");


    request.addEventListener("load", function(){
        console.log("requete loadée");
        user = request.response;
        console.log(user);
        return user;
        })
        

    
    })
