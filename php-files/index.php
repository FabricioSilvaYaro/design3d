<?php
include 'header.php';
?>
      
            <?php 
                  echo "<h1>Bienvenid@ a $appname</h1>";

                  if ($loggedin) echo "<span> Has iniciado sesión: ".$user."</span>";
                  else           echo "<span> por favor, regístrate o inicia sesión.</span>";
              ?>
  

  <div id="transparente"></div>
  <div id="general">
    <div id="menusuperior">
      <div id="enlaces">
        <ul>
          <li>
            <h4>DESIGN3D</h4>
          </li>
          <a href="./index.php">
            <li id="actual">INICIO</li>
          </a>
          <a href="./catalogo.php">
            <li>CATALOGO</li>
          </a>
          <a href="./about.php">
            <li>SOBRE NOSOTROS</li>
          </a>
        </ul>
      </div>
      <div id="derecha">
        <p id="contador"></p>
        <a href="./nest.php">
          <img src="./images/carrito.png" height="40px">
        </a>
        <a href="./login.php">
          <div id="login">
            <p>Acceso Clientes</p>
          </div>
        </a>
      </div>
    </div>
    <div id="seccion1">
      <!-- <div id="texto_principal">
        <h1>
          Decoración de casas con productos únicos y duraderos hechos a medida.
        </h1>
      </div> -->
      <a>
        <div id="botoncentro">

          <a href="./catalogo.php">
            <h3>Ver catálogo</h3>
          </a>
        </div>
      </a>
    </div>
    <div id="seccion2">
      <section>
        <span>
          <div class="box_buy">
            <img src="./images/pot.png" alt="item">
          </div>
          <div class="buttons_box_buy">
            <div onclick="incrementCounter()" class="buttons_box_buy_1">Añadir a la cesta</div>
            <div class="buttons_box_buy_2"><a href="./producto.php">Ver más</a></div>
          </div>
        </span>
        <span>
          <div class="box_buy">
            <img src="./images/chari.png" alt="item">
          </div>
          <div class="buttons_box_buy">
            <div onclick="incrementCounter()" class="buttons_box_buy_1">Añadir a la cesta</div>
            <div class="buttons_box_buy_2"><a href="./producto.php">Ver más</a></div>
          </div>
        </span>
        <span>
          <div class="box_buy">
            <img src="./images/lamp.png" alt="item">
          </div>
          <div class="buttons_box_buy">
            <div onclick="incrementCounter()" class="buttons_box_buy_1">Añadir a la cesta</div>
            <div class="buttons_box_buy_2"><a href="./producto.php">Ver más</a></div>
          </div>
        </span>
        <span>
          <div class="box_buy">
            <img src="./images/desk.png" alt="item">
          </div>
          <div class="buttons_box_buy">
            <div onclick="incrementCounter()" class="buttons_box_buy_1">Añadir a la cesta</div>
            <div class="buttons_box_buy_2"><a href="./producto.html">Ver más</a></div>
          </div>
        </span>
      </section>
    </div>
    <a href="./pages/catalogo.html">
      <div class="cool-div">Ir al catálogo</div>
    </a>
    <div id="abajo">
      <div id="redessociales">
        <img src="./images/redes.png" alt="redessociales">
      </div>
      <div id="copytexto">
        <p>&copy; 2022 DESIGN3D, cualquier logotipo relacionado son marcas registradas</p>
        <p>comerciales o marcas registradas de DESIGN3D</p>
      </div>
      <div id="listaabajolegal">
        <ul>
          <li>POLÍTICA DE PRIVACIDAD</li>
          <li>TÉRMINOS DE USO</li>
          <li>INFORMACIÓN DE LA EMPRESA</li>
          <li>PREFERENCIAS DE COOKIES</li>
        </ul>
      </div>
    </div>
</body>

</html>