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
        <tr>
            <td>${element.patientname}</td>
            <td>${element.idstudy}</td>
            <td>${element.studydate}</td>
            <td>IMG</td>
        </tr>
        `
      });
      document.getElementById("study").innerHTML=table
    });
    
}