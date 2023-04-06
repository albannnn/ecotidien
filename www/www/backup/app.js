let data = new FormData();

fetch("database.php", {
  /* chercher la base de données dans le fichier database.php  */
  method: "POST",
  body: data,
})
  .then(result => result.json())
  .then(function (result) {
    console.log(result[0].conseil);
    console.log(result.lenght);

    let anecdote = result[Math.floor(Math.random() * result.length)].conseil;
    
    document.getElementById("main-text").innerHTML = anecdote;
  });
//modèle de récupération des données en javascript, cette méthode est faite en php dans l'index