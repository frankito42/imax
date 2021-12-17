<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="mdb5/css/mdb.min.css">
    <link rel="stylesheet" href="lib/toastr/toastr.min.css">
</head>
<body>
    <header>
    <nav style="position: static;" class="navbar navbar-expand-lg fixed-top navbar-scroll">
  <div class="container">
    <img src="https://mdbootstrap.com/img/Photos/new-templates/animal-shelter/logo.png" height="70" alt=""
      loading="lazy" />
    <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="#news">ADMINISTRACION IMAX</a>
        </li>
        <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="phpLogin/logout.php">CERRAR SESION</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#pets">Pets</a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#adoptions">Adoptions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#foundation">Foundation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#help">How can I help?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#contact">Contact</a>
        </li> -->
      </ul>

      <ul class="navbar-nav flex-row">
        <!-- <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-facebook-square"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-2" href="#!">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link ps-2" href="#!">
            <i class="fab fa-youtube"></i>
          </a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
    </header>



  <div class="container">
    <br>
    <div class="row">
      <div class="col-md">
      <h3 class="text-center">LISTA DE USUARIOS</h3>
      </div>
      <div class="col-md">
      <section class="d-flex justify-content-center align-items-center flex-column">
        <div>
          <div class="input-group">
            <div class="form-outline">
              <input type="search" id="form12222" class="form-control">
              <label class="form-label" for="form1" style="margin-left: 0px;">Buscar</label>
          </div>
        </div>
      </section>
      
    </div>
  </div>
  <br>
    
    
    <div class="table-responsive">


  <table id="tableFiltro" class="table table-hover">
    <thead class="text-white" style="background: #0095ffbf;">
      <th colspan="2">USUARIOS</th>
      <!-- <th></th> -->
    </thead>
    <tbody id="tableUsers">
        <tr>
            <td class="text-center" colspan="3">CARGANDO...</td>
        </tr>
    </tbody>
  </table>
  </div>

  </div>



<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" id="formEdit" method="post">
      <div style="background: #3fafff; color: white;" class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="nombreEdit" class="form-control" />
            <label class="form-label" for="nombreEdit">Nombre</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="text" id="dniEdit" class="form-control" />
            <label class="form-label" for="dniEdit">Dni</label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="emailEdit" class="form-control" />
            <label class="form-label" for="emailEdit">Email</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="text" id="domicilioEdit" class="form-control" />
            <label class="form-label" for="domicilioEdit">Domicilio</label>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="usuarioEdit" class="form-control" />
            <label class="form-label" for="usuarioEdit">Usuario</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="text" id="passEdit" class="form-control" />
            <label class="form-label" for="passEdit">Contraseña</label>
          </div>
        </div>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Cerrar
        </button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</div>

<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->



<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">Desea eliminar el usuario?</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
          Cerrar
        </button>
        <button id="deleteButton" type="button" class="btn btn-success">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->
<!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal --><!-- Modal -->









    
</body>
<script src="mdb5/js/mdb.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="lib/toastr/toastr.min.js"></script>
<script src="/jsAdmin/jsAdmin.js"></script>
</html>