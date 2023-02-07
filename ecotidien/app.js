 const splash = document.querySelector('.splash')
      document.addEventListener('DOMContentLoaded', (e)=>{
     setTimeout(()=>{
       splash.classList.add('display-none');
      }, 2000);
  })


  let data = new FormData();

  fetch('database.php', {
    method: 'post',
    body: data,
  })
  .then(function (result) {
    return result.json(); 
  })
  .then(function (result){
    
    let anecdote = result[Math.floor(Math.random() * result.length)].conseil;
    document.getElementById('main-text').innerHTML = anecdote;
  })



