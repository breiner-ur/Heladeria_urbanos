<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>
        <?php 
        $nombre_heladeria = "HELADERIA URBANO'S";                                                     
        echo $nombre_heladeria; 
        ?>
    </title>
</head>
<body>
    <?php
    $nombre_administrador = "Breiner Urbano";
    $ciudad = "La Cruz Nariño";
    $edad = 20;
    $dia_semana = "Martes";
    $sabor_disponible = true; 
    ?>
     
    <header>
      <h1><?php echo $nombre_heladeria; ?></h1>
      <img src="img/logourbano1.png" alt="Logo HU" width="200">
      <p>Propietario: <strong><?php echo $nombre_administrador; ?></strong> | Ciudad: <strong><?php echo $ciudad; ?></strong></p>
    </header>

    <hr>
    
    <p>
      Heladería Urbano's es tu punto de encuentro favorito. Disfruta de la mejor variedad de ensaladas de frutas, helados artesanales y postres. ¡Ven a probarlos!
    </p>
    
    <hr>

    <section class="Bienvenida">
        <?php
        if ($edad >= 18) {
            echo "<h3>¡Bienvenido! Conoce nuestras promociones especiales.</h3>";
        } else {
            echo "<h3>¡Bienvenido! Descubre nuestros deliciosos sabores.</h3>";
        }
        ?>
    </section>

    <hr>

    <section class="promocion">
        <h3>Promoción del Día</h3>
        <?php
        if ($dia_semana == "Martes") {
            echo "<p><strong>¡Hoy tenemos 2x1 en conos!</strong></p>";
        } else {
            echo "<p>Hoy puedes disfrutar de nuestros sabores habituales.</p>";
        }
        ?>
    </section>

    <hr>
    
    <section class="disponibilidad">
        <h3>Disponibilidad</h3>
        <?php
        if ($sabor_disponible == true) {
            echo "<p><strong>¡Este sabor está disponible!</strong></p>";
        } else {
            echo "<p>Lo sentimos, este sabor está agotado.</p>";  
        }
        ?>
    </section>
            
    <hr>

    <main>
      <div class="tarjetas">

        <article class="tarjeta">
          <h2>Ensalada de Frutas Especial</h2>
          <img src="img/ensalada.jpg" alt="Ensalada de Frutas Especial" width="300" />
          <p>Mezcla de frutas frescas, crema de leche, queso rallado y dos bolas de helado al gusto.</p>
          <h4>$12.000</h4>
        </article>

        <article class="tarjeta">
          <h2>Banana Split Clásico</h2>
          <img src="img/bananasplit.jpg" alt="Banana Split Clásico" width="300" />
          <p>Banano fresco cortado con tres bolas de helado, crema batida, salsa de chocolate y cereza.</p>
          <h4>$10.000</h4>
        </article>

        <article class="tarjeta">
          <h2>Malteada Oreo</h2>
          <img src="img/malteada.jpg" alt="Malteada Oreo" width="300" />
          <p>Cremosa y espesa malteada de galleta Oreo, coronada con crema chantilly y chispas de chocolate.</p>
          <h4>$9.000</h4>
        </article>
        
        <article class="tarjeta">
          <h2>Cono Doble Crocante</h2>
          <img src="img/cono.jpg" alt="Cono Doble Crocante" width="300" />
          <p>Barquillo de galleta crujiente servido con dos bolas generosas de tus sabores preferidos.</p>
          <h4>$5.000</h4>
          <div class="disponibilidad-php">
              <?php
              if ($sabor_disponible == true) {
                  echo "<p>¡Este producto está disponible!</p>";
              } else {
                  echo "<p>Lo sentimos, este producto está agotado.</p>";
              }
              ?>
          </div>
        </article>

      </div>
    </main>
    
    <hr>

    <footer>
      <h3>Heladería <?php echo $nombre_heladeria; ?> — "¡El sabor de la ciudad en cada bocado!"</h3>
      <p>Dirección: Calle Principal, Centro, <?php echo $ciudad; ?></p>
      <p>Teléfono: +57 (315) 420-9988 | Pedidos WhatsApp: +57 320 123 4567</p>
      <p>Correo electrónico: contacto@heladeriaurbanos.com</p>
      <p>Horario: Lunes a Domingo de 12:00 m. a 9:00 p.m.</p>
      <p>¡Pide a domicilio o visítanos!</p>
    </footer>
  </body>
</html>