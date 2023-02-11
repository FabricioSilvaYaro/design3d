<?php
require_once 'header.php'; 
//$error = $user = $pass = "";
if (isset($_POST['user']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  
  if ($user == "" || $pass == ""){
      $error = "Debes completar todos los campos<br>";
      echo "$error";
  }
  else
  {
    $result = queryMySQL("SELECT * FROM members WHERE user='$user'");
    if ($result->num_rows == 0)
    {
      $error = "<span class='error'>Email/Contraseña invalida</span><br><br>";
      echo "$error";
    }
    else
    {
        if (!isset($_SESSION['CREATED'])) {
            $_SESSION['CREATED'] = time();
          } else if (time() - $_SESSION['CREATED'] > 1800) {
            session_regenerate_id(true);
            $_SESSION['CREATED'] = time();
        }
        $_SESSION['user'] = $user;
    ob_start();
    header('Location: index.php');
    ob_end_flush();
    }
  }
}
else if (isset($_SESSION['user'])){
  ob_start();
    header('Location: index.php');
    ob_end_flush();
}
?>
<div id="login-box">
        <span>
            <h2>Inicio de sesión</h2>
        </span>
        <form role="form" method="POST" action="login.php">
            <input type="text" name="user" id="user" placeholder="Nombre de usuario" class="input_login" maxlength="24">
            <input type="password" name="pass" id="pass" placeholder="Contraseña" class="input_login" maxlength="16">
            <a href="./index.php" id="recu_psswd">Recuperar contraseña</a>
                <button type="submit" id="login_button">Iniciar sesión</button>
            </a>
        </form>
    </div>
