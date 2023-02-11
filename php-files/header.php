<?php
session_start([
    'cookie_lifetime' => 86400,
]);
require_once 'utils/functions.php';
ob_start();
$userstr = ' (Invitado)';
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = " ($user)";
} else{
    $loggedin = FALSE;
}
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php echo "$appname $userstr" ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./assets/style.css">
        <link rel="shortcut icon" href="./images/favicon.png">

  <script>
    var count = 0;
    function incrementCounter() {
      count++;
      document.getElementById("contador").innerHTML = count;
    }
  </script>    
    </head>
    <body>   
        <?php    
        if ($loggedin)
        {
            // En caso de tener una sesión registrada con antelación mostramos las opciones avanzadas de la aplicación
        ?>
                    <a href="index.php">design3d</a>
                      <ul>
                        <li>
                            <a href="logout.php">Salir</a>
                        </li>
                      </ul>
        <?php
        }
        else
        {
             // En caso de ser usuario no registrado, (Invitado)  
            ?>
                      <ul>
                         <li>
                              <a href="index.php">design3d</a>
                         </li>
                         <li>
                              <a href="signup.php">Registrarse</a>
                          </li>
                          <li>
                              <a href="login.php">Entrar</a>
                          </li>
                          <li>
                              <a href="logout.php">Salir</a>
                          </li>
                      </ul>
        <?php
        }
        ?>