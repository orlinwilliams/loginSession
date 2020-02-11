<!DOCTYPE html>
<html>
<?php include_once("head.php"); ?>

<body>  
  <header>

    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a id="modalLogin">Loggin</a></li>
          
        </ul>
      </div>
    </nav>


  </header>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>inicio Sesion</h4>
      <div class="row">
    <form id="formLogin"class="col s12">
      <div class="row">
      <div class="col s2">

          <div class="preloader-wrapper small active hide" id="preloaderIon">
        <div class="spinner-layer spinner-green-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>


      </div>
        <div class="input-field col s5">
          
          <i class="material-icons prefix">account_circle</i>
          <input name="userName" id="user" type="text" class="validate" required>
          <label for="userName">user</label>
        </div>
        <div class="input-field col s5">
          <i class="material-icons prefix">vpn_key</i>
          <input name="userEmail" id="userEmail" type="password" class="validate" required>
          <label for="userEmail">password</label>
        </div>
      </div>

    
  </div>




    </div>
    <div class="modal-footer">
      <button type="submit">Iniciar sesion</button>
  
    <a id="cerrarModal"class="waves-effect waves-light btn">cerrar</a>
    </form>
    </div>
  </div>



  

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/modal.js"></script>
  <script src="../js/formulario.js"></script>
  
</body>
</html>