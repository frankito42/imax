document.addEventListener("DOMContentLoaded", async function(event) {
    // Your code to run since DOM is loaded and ready
    cargar()
    await iniciar().catch(function(error) {
  alert('Actulalizando datos del siestema por favor ingrese en otro momento.');
  document.getElementById("study").innerHTML=`
        <tr>
            <td class="text-center" colspan="4">SIN DATOS</td>
        </tr>
        `
  
});
});

async function iniciar() {
    let dni=document.getElementById("DNI").value


    
    console.log(dni)
   await fetch('https://imax.informemedico.com.ar/cgi-bin/minisite.bf/studiesaccess/'+dni)
  .then(response => response.json())
  .then((data) => {
      console.log(data)
      let table=``
      data.forEach(element => {
        table+=`
        <tr onclick="window.open(
            'https://estudio.informemedico.com.ar/#/168/${element.hashed_id}',
            '_blank' // <- This is what makes it open in a new window.
          );">
            <td>${element.patientname}</td>
            <td>${element.patientid}
            <button type="button" class="btn btn-primary">Ver estudio</button>
            </td>
           
            <td>${element.studydate}</td>
        </tr>
        `
      });
      document.getElementById("study").innerHTML=table
    });
    
}


function cargar() {
  $("#chatiando").load("chatAPP/users.php")
}
document.getElementById("ocultarChat").addEventListener("click",()=>{
  console.log(document.getElementById("ocultarChat").innerText)
  if (document.getElementById("ocultarChat").innerText=="OCULTAR CHAT") {
    document.getElementById("chatiando").style.display="none"
    document.getElementById("ocultarChat").innerHTML="Mostrar chat"
  }else{
    document.getElementById("chatiando").style.display="block"
    document.getElementById("ocultarChat").innerHTML="OCULTAR CHAT"
  }
})