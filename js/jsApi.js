document.addEventListener("DOMContentLoaded", async function(event) {
    // Your code to run since DOM is loaded and ready
    await iniciar()
});

async function iniciar() {
    let dni=document.getElementById("DNI").value

    let dniSting=dni.length

    let dniPuntos
    if(dniSting==8){
        dniPuntos=dni[0]+dni[1]+"."+dni[2]+dni[3]+dni[4]+"."+dni[5]+dni[6]+dni[7]
    }
    if(dniSting==7){
        dniPuntos=dni[0]+"."+dni[1]+dni[2]+dni[3]+"."+dni[4]+dni[5]+dni[6]
    }
    console.log(dniPuntos)
   await fetch('http://imax.informemedico.com.ar/cgi-bin/minisite.bf/studiesaccess/'+dniPuntos)
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
            <td>${element.patientid}</td>
           
            <td>${element.studydate}</td>
            <td>ABRIR ESTUDIO</td>
        </tr>
        `
      });
      document.getElementById("study").innerHTML=table
    });
    
}