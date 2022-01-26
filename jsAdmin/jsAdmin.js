let usuarios=[]
let ultimoIdSeleccionado
let myModalDelte = document.getElementById('modalDelete')
let modalDelete = new mdb.Modal(myModalDelte)
let myModalEdit = document.getElementById('editModal')
let modal = new mdb.Modal(myModalEdit)
class UserEdit {
  constructor(id) {
    this.nombre = document.getElementById("nombreEdit").value;
    this.dni = document.getElementById("dniEdit").value;
    this.email = document.getElementById("emailEdit").value;
    this.user = document.getElementById("usuarioEdit").value;
    this.pass = document.getElementById("passEdit").value;
    this.domicilio = document.getElementById("domicilioEdit").value;
    this.id = id;
  }
}
document.addEventListener("DOMContentLoaded", async function(event) {
    // Your code to run since DOM is loaded and ready
    await iniciar()
    cargar()
    document.getElementById('form12222').addEventListener('keyup', filtrar);
    
    myModalEdit.addEventListener('show.mdb.modal', (event) => {
      let dni=event.relatedTarget.parentElement.parentElement.children[0].children[1].children[0].innerHTML
      let user = usuarios.find((us) => us.dni == dni);
      console.log(user)
      document.getElementById("nombreEdit").value=user.nombreCompleto
      document.getElementById("dniEdit").value=user.dni
      document.getElementById("emailEdit").value=user.email
      document.getElementById("usuarioEdit").value=user.user
      document.getElementById("passEdit").value=user.pass
      document.getElementById("domicilioEdit").value=user.domicilio
      ultimoIdSeleccionado=user.id
      
  }) 
    myModalDelte.addEventListener('show.mdb.modal', (event) => {
        let dni=event.relatedTarget.parentElement.parentElement.children[0].children[1].children[0].innerHTML
        let user = usuarios.find((us) => us.dni == dni);
        ultimoIdSeleccionado=user.id
    })
    document.getElementById("editModal").addEventListener('submit', async (e) => {
      e.preventDefault()
      let userEdit = new UserEdit(ultimoIdSeleccionado);
      console.log(userEdit)

      let formData = new FormData();      
      formData.append('usuario', JSON.stringify(userEdit));
      /* formData.append('avatar', fileField.files[0]); */
      
      modal.hide()
      await fetch('phpAdmin/usuariosUpdate.php', {
        method: 'POST', // or 'PUT'
        body: formData // data can be `string` or {object}!
      }).then(res => res.json())
      .then(async (data)=>{
        console.log(data)
        if (data=="yes") {
          toastr.options.closeButton = true;
          /* toastr.options.progressBar = true; */
          await iniciar()
          toastr.success('Edicion de usuario exitosa.', 'Listo.')
        }else{
          modal.show()
          toastr.error('Ocurrio un error.', 'Lo sentimos!')
        }
      }).catch(()=>{
        toastr.error('El campo Dni no puede quedar vacio!', 'Ocurrio un error.')
        modal.show()
      });

    })
    document.getElementById("deleteButton").addEventListener('click', async (e) => {
      await deleteUser()
    })
});

async function iniciar() { 
  await fetch('phpAdmin/usuarios.php')
  .then(response => response.json())
  .then(async (data) => {
    console.log(data)
    usuarios=data
    await dibujar(data)
  });
}



async function dibujar(params) {
  let trTd=``
  params.forEach(element => {
      trTd+=`
      <tr>
          <td>
          <p>Nombre: ${element.nombreCompleto}</p>
          <p>Dni: <span>${element.dni}</span></p>
          <p>Email: ${element.email}</p>
          
          </td>
          <td>
          <p>User: ${element.user}</p>
          <p>Pass: ${element.pass}</p>
          <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#editModal"><i class="fas fa-user-edit"></i></button>
          <button type="button" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#modalDelete"><i class="fas fa-trash-alt"></i></button>
          </td>
          
      </tr>
      `
  });
  /* body de la tabla */
  document.getElementById("tableUsers").innerHTML=trTd
}


async function deleteUser() {
  modalDelete.hide()
  console.log(ultimoIdSeleccionado)
  await fetch('phpAdmin/delete.php?id='+ultimoIdSeleccionado)
  .then(response => response.json())
  .then(async(data)=>{
    console.log(data)
    if (data=="delete") {
      toastr.options.closeButton = true;
      /* toastr.options.progressBar = true; */
      await iniciar()
      toastr.success('Se elimino un usuario.', 'Listo.')
    }else{
      modalDelete.show()
      toastr.error('Ocurrio un error.', 'Lo sentimos!')
    }
  });
}
function filtrar(){
      
  var busqueda = document.getElementById('form12222');
  var table =document.getElementById("tableFiltro").tBodies[0]
texto = busqueda.value.toLowerCase();
var r=0;
while(row = table.rows[r++])
{
  if ( row.innerText.toLowerCase().indexOf(texto) !== -1 )
    row.style.display = null;
  else
    row.style.display = 'none';
}
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