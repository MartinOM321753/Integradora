<?php 

$cnn= mysqli_connect('localhost', 'root', '', 'integradora');
mysqli_set_charset($cnn,"utf8");

$slider = "select * from slider ";
$resultadoslider = mysqli_query($cnn, $slider);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Party</title>
    <link rel="stylesheet" href="CSS/style.CSS">
    
</head>

<body>
  
    <header class="header">
        <a href="Index.html"> <img src="Img/Logo.jpg" id="log" class="img-fluid"></a>
        <div class="conteiner logo-nav-conteiner">
            <a href="Index.html" class="logo">PHOTO PARTY</a>
            <span class="menu-icon">Ver menu</span>
            <nav class="navigation">
                <ul>
                    <li><a href="Index.html">Inicio</a></li>
                    <li><a href="paquetes.html">Paquetes</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="empleado.html">Empleado</a></li>

                    <a href="https://www.instagram.com/cabinasphotopartycuernavaca/" target="_blank"><img
                            src="Img/redes/instagram.png"></a>
                    <a href="https://www.facebook.com/lasmejorescabinasdemorelos/" target="_blank"><img
                            src="Img/redes/facebook.png"></a>
                    <a href="mailto:photopartycuernavaca@gmail.com?subject=Asunto del correo&body=Cuerpo del correo"
                        target="_blank"><img src="Img/redes/gmail.png"></a>
                    <a href="https://wa.me/7775501299" target="_blank"><img src="Img/redes/whatsapp.png"></a>

                    <ul>


            </nav>
        </div>
    </header>


    <div class="carousel">
  <h2>Cabinas</h2>
  <div class="carrusel-list" id="carrusel-list">
    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
      onclick="app.processingButton(event)">
      <img src="img/left.svg" alt="izquierda" style="width: 35px; height: 35px; ">
      <!-- Botón de desplazamiento izquierdo -->
    </button>
    <div class="carrusel-track" id="track">
      <?php

      while ($row2 = mysqli_fetch_array($resultadoslider)) {
      
        echo '<div class="carrusel">';
      
        echo '  <div>';
      
        echo '    <a href="">';
        echo '      <h4> <small> Imagen </small> Mas </h4>';
        echo '      <picture>';
        
        echo '        <img src="Img/Cabinas/' . $row2["imagen"] . '" alt="imagen">';
        echo '      </picture>';
        echo '    </a>';
      
        echo '  </div>';

      
        echo '</div>';
      }
      ?>
    </div>
    <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
      onclick="app.processingButton(event)">
      <img src="img/right.svg" alt="derecha" style="width: 35px; height: 35px;" >
      <!-- Botón de desplazamiento derecho -->
    </button>
  </div>
</div>




<script src="Js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

</body>


<!--script del boton menu responsive No tocar  -->
<script>
    // Tu código jQuery va aquí
    $(document).ready(function () {

        var menuBtn = $('.menu-icon'),
            menu = $('.navigation ul');

        menuBtn.click(function () {

            if (menu.hasClass('show')) {

                menu.removeClass('show');

            } else {
                menu.addClass('show');
            }

        });

    });
</script>



</html>