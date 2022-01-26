searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "chatAPP/php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(async() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "chatAPP/php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
   contador()
}, 3000);

 function contador() {
  fetch('chatAPP/php/contarMensajes.php')
  .then(response => response.json())
  .then((data) => {
    console.log(data)
    if (localStorage.getItem("contadorMensajes")!=data.total) {
      let music = new Audio('chatAPP/in.wav');
      music.play();
      /* music.loop =true;
      music.playbackRate = 2;
      music.pause(); */
    }
    localStorage.setItem("contadorMensajes",data.total)
  });
}


function cargar(id) {
  $("#chatiando").load("chatAPP/chat.php?user_id="+id)
}




