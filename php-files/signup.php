<?php
require_once 'header.php';

if (isset($_POST['user'])) {

  // TODO Realiza la lectura de los campos del formulario en $user y $pass
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  if ($user == "" || $pass == "") {
    $error = "Debes completar todos los campos";
    echo "$error";
  }
  else {
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows) {
      $error = "El usuario ya existe";
      echo "$error";
    }
    else {
      queryMysql("INSERT INTO members(user,pass) VALUES('$user', '$pass')");
      $_SESSION['user'] = $user;
      ob_start();
      header('Location: login.php');
      ob_end_flush();
    }
  }
}
?>
<div id="login-box">
        <span>
            <h2>Por favor regístrate</h2>
        </span>
        <form role="form" method="POST" action="signup.php">
            <input type="text" name="user" id="user" placeholder="Nombre de usuario" class="input_login" maxlength="24">
            <input type="password" name="pass" id="pass" placeholder="Contraseña" class="input_login" maxlength="16">
            <a href="./index.php" id="recu_psswd">Recuperar contraseña</a>
                <button type="submit" id="login_button">registrarse</button>
            </a>
        </form>
    </div>