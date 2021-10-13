document.addEventListener("DOMContentLoaded", function(event) {
    // Your code to run since DOM is loaded and ready
/*     alert("perfet")
 */    document.getElementById("formLogin").addEventListener("submit",async (e)=>{
        e.preventDefault()
        await loguear()
    })
       document.getElementById("fromRegister").addEventListener("submit",async (e)=>{
        e.preventDefault()
        await registrar()
    })
});

async function loguear() {
    let email=document.getElementById("email").value
    let pass=document.getElementById("pass").value
    await fetch(`phpLogin/loguear.php?pass=${pass}&email=${email}`)
  .then(response => response.json())
  .then((data) => {
    console.log(data)
    location.href = "inicio.php"
   /*  alert("perfet") */
  });
}
async function registrar() {
    let email=document.getElementById("emailR").value
    let pass=document.getElementById("passR").value
    let user=document.getElementById("usuarioR").value
    let domicilio=document.getElementById("domicilio").value
    let nombreCompleto=document.getElementById("nombreCompleto").value
    let dni=document.getElementById("dni").value
    await fetch(`phpLogin/registro.php?pass=${pass}&email=${email}&user=${user}&domicilio=${domicilio}&dni=${dni}&nombre=${nombreCompleto}`)
  .then(response => response.json())
  .then((data) => {
    if (data=="") {
      alert("El email ya esta registrado.")
    }
    console.log(data)
    location.href = "inicio.php"

   /*  alert("perfet") */
  });
}


