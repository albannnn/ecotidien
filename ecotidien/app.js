 const splash = document.querySelector('.splash')
      document.addEventListener('DOMContentLoaded', (e)=>{
     setTimeout(()=>{
       splash.classList.add('display-none');
      }, 2000);
  })



  // Avant d'utiliser un Service Worker,
// on vérifie que c'est possible.
if ("serviceWorker" in navigator) {
    // Puis on déclare celui-ci
    // via la fonction `register`
    navigator.serviceWorker
      .register("/service-worker.js")
      .then(registration => {
        // On a réussi
        console.log(
          "App: Achievement unlocked."
        );
      })
      .catch(error => {
        // Il y a eu un problème
        console.error(
          "App: Crash de Service Worker",
          error
        );
      });
  } else {
    // Si le navigateur ne permet pas       
    // d'utiliser un Service Worker
    // on ne fait rien de particulier.
    // Le site devrait continuer à
    // fonctionner normalement.
  }

  let data = new FormData();

  fetch('database.php', {
    method: 'post',
    body: data,
  })
  .then(function (result) {
    return result.json(); 
  })
  .then(function (result){
    console.log(result[0].conseil);
    console.log(result.lenght);
    let anecdote = result[Math.floor(Math.random() * result.length)].conseil;
    document.getElementById('main-text').innerHTML = anecdote;
  })



