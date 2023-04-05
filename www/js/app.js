
//création de la requete elle sera appellée quand un utilisateur  cliques sur se connecter

function jsonRequest(requestUrl, place) {
  //La requete récupére la réponse et elle l'insère dans la page html à l'endroit donné
  // éxécution de la requete
  console.log("éxécution !");
  let request = new XMLHttpRequest();
  request.open("GET", requestUrl);
  request.responseType = "json";
  request.send();
  // fin d'éxécution de la requete

  request.addEventListener("load", function () {
    // On load le contenu et on l'insère dans la page
    console.log("requete loadée");
    console.log(request.response);
    place.innerHTML = request.response;
    document.getElementById("message").addEventListener(
      "click",
      setTimeout(function () {
        place.innerHTML = "";
      }, 5000)
    );
  });
}

//var nécéssaires à la requete
var host = "http://localhost/";
var path = "json/temporary.json";
var requestURL = host + path;
let endroit = document.getElementById("message");

button = document.getElementById("buttonConnect");
button.addEventListener("click", jsonRequest(requestURL, endroit)); //quand on click sur se connecter le message lié à notre situation arrivera
