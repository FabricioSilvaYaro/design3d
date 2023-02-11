<?php
  require_once 'header.php';

  if (isset($_SESSION['user']))
  {
    destroySession();
    echo "<div class='main'>Has salido de tu sesión. ";
    // redirección a la pantalla principal
    header('Location: ./index.php');
  }
  else {echo "No puedes salir de sesión por que no estas registrado. ";
  }
?>
    </div>
  </body>
</html>