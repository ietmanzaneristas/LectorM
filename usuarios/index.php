<?php
include '../extend/header.php';
?>

<!-- ..::CREAR USUARIO::.. -->
<div class="mdl-grid ">
  <div class="mdl-layout-spacer"></div>
  <div id="login" class="mdl-shadow--8dp mdl-typography--text-center mdl-cell mdl-cell--6-col">
    <div class="mdl-typography--display-1-color-contrast">
      Crear nuevo lector
    </div>

    <!-- Simple Textfield -->
    <form action="ins_usuarios.php" method="POST" enctype="multipart/form-data" class="mdl-shadow--8dp" id="miForm1">

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="nombre_usu" id="nombre_usu" autofocus pattern="[A-Za-zÑñ/s ]+">
        <label class="mdl-textfield__label" for="nombre_usu">Nombre</label>
        <span class="mdl-textfield__error">Nombre inválido</span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="apellido_usu" id="apellido_usu" pattern="[A-Za-zÑñ/s ]+">
        <label class="mdl-textfield__label" for="apellido_usu">Apellido</label>
        <span class="mdl-textfield__error">Apellido inválido</span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" placeholder="fecha" type="date" name="fechaNac_usu" id="fechaNac_usu">
        <label class="mdl-textfield__label" for="fechaNac_usu">Fecha de nacimiento</label>
        <span class="mdl-textfield__error">Debe seleccionar una fecha</span>
        <span id="fechaNac_usuValida" class="mdl-color-text--red-A200"></span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" name="email_usu" id="email_usu">
        <label class="mdl-textfield__label" for="email_usu">e-mail</label>
        <span class="mdl-textfield__error">Correo inválido</span>
        <span id="email_usuValida" class="mdl-color-text--red-A200"></span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="number" name="celular_usu" id="celular_usu">
        <label class="mdl-textfield__label" for="celular_usu">Celuar</label>
        <span class="mdl-textfield__error">Número inválido</span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" id="pass_usu" name="pass_usu">
        <label class="mdl-textfield__label" for="pass_usu">Contraseña</label>
        <span class="mdl-textfield__error">Contraseña invalida</span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" id="pass_usu2" name="pass_usu2">
        <label class="mdl-textfield__label" for="pass_usu2">Verificar contraseña</label>
        <span class="mdl-textfield__error">Contraseñas no coinciden</span>
      </div>
      <br>

      <!-- The second value will be selected initially -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <select name="sede_usu" id="sede_usu" class="mdl-textfield__input">
          <option class="mdl-menu__item" disabled selected value="0">Seleccione una Sede</option>
          <option class="mdl-menu__item" value="1">Central</option>
          <option class="mdl-menu__item" value="2">Ecuador</option>
          <option class="mdl-menu__item" value="3">Gaitan</option>
          <option class="mdl-menu__item" value="4">four</option>
        </select>
        <label class="mdl-textfield__label" for="sede_usu">Sede</label>
        <span class="mdl-textfield__error">Debe seleccionar una sede</span>
      </div>
      <br>

      <!-- The second value will be selected initially -->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <select name="curso_usu" id="curso_usu" class="mdl-textfield__input">
          <option class="mdl-menu__item" disabled selected value="0">Seleccione un curso</option>
          <option class="mdl-menu__item" value="1">601</option>
          <option class="mdl-menu__item" value="2">602</option>
          <option class="mdl-menu__item" value="3">603</option>
          <option class="mdl-menu__item" value="4">604</option>
        </select>
        <label class="mdl-textfield__label" for="curso_usu">Curso</label>
        <span class="mdl-textfield__error">Debe seleccionar un curso</span>
      </div>
      <br>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" placeholder=" " type="file" name="foto_usu" id="foto_usu" accept="image/*">
        <label class="mdl-textfield__label" for="foto_usu">Foto perfil</label>
        <span class="mdl-textfield__error">Debe seleccionar una imagen</span>
      </div>
      <br>

      <!-- FAB button with ripple -->
      <div id="next">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
          Crear Usuario
          <i class="material-icons">arrow_forward</i>
        </button>
      </div>
      <br>
    </form>
  </div>
  <div class="mdl-layout-spacer">
  </div>
</div>
<!-- ..::FIN USUARIOS::.. -->

<!-- BUSQUEDA Y EDICION DE USUARIOS -->

<div class="mdl-grid ">

  <div id="busquedaUsu" class="mdl-shadow--8dp mdl-typography--text-center mdl-cell mdl-cell--12-col">

    <div class="mdl-shadow--4dp">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <i class="material-icons mdl-textfield__label" for="buscar_usu">search</i>
        <label class="mdl-textfield__label" for="buscar_usu">
          &nbsp; &nbsp; Buscar Lector
        </label>
        <input class="mdl-textfield__input" type="text" id="buscar_usu">
        <span class="mdl-textfield__error">Lector no encontrado</span>
      </div>
      <!-- Flat button with ripple -->
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
        Buscar
      </button>
    </div>

    <!-- TABLA LECTORES -->

    <?php
    $sel = $con->query("SELECT * FROM users");
    $row = mysqli_num_rows($sel);
    ?>
    <div class="row mdl-shadow--4dp">
      <div class="col-12 col-sm-12">
        <div class="mdl-card__supporting-text col-12 col-sm-12">
          <div class="android-card-container col-12 col-sm-12">
            <span class="mdl-card__title col-12 col-sm-12">
              Usuarios
            </span>
            <table class="col-12 col-sm-12">
              <thead>
                <tr>
                  <th>Foto</th>
                  <th class="mdl-data-table__cell--non-numeric">Apellido</th>
                  <th class="mdl-data-table__cell--non-numeric">Nombre</th>
                  <th>Edad</th>
                  <th>Correo</th>
                  <th>Sede</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                  <th>Curso</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>

    <table class="mdl-data-table mdl-shadow--4dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">Name</th>
          <th class="mdl-data-table__cell--non-numeric">Nickname</th>
          <th>Age</th>
          <th class="mdl-data-table__cell--non-numeric">Living?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">John Lennon</td>
          <td class="mdl-data-table__cell--non-numeric">The smart one</td>
          <td>40</td>
          <td class="mdl-data-table__cell--non-numeric">No</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Paul McCartney</td>
          <td class="mdl-data-table__cell--non-numeric">The cute one</td>
          <td>73</td>
          <td class="mdl-data-table__cell--non-numeric">Yes</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">George Harrison</td>
          <td class="mdl-data-table__cell--non-numeric">The shy one</td>
          <td>58</td>
          <td class="mdl-data-table__cell--non-numeric">No</td>
        </tr>
        <tr>
          <td class="mdl-data-table__cell--non-numeric">Ringo Starr</td>
          <td class="mdl-data-table__cell--non-numeric">The funny one</td>
          <td>74</td>
          <td class="mdl-data-table__cell--non-numeric">Yes</td>
        </tr>
      </tbody>
    </table>



    <!--FIN BUSQUEDA Y EDICION DE USUARIOS -->
  </div>
</div>
<?php
include '../extend/footer.php';
include '../extend/scripts.php';
?>
<script src="../js/usuarios.js"></script>

</body>

</html>