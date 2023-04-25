<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/75b083e8a7273994d6b1f23db5650b1b-comida-comida-ramen.png">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>RESTAURANTE MANOLO</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <em><h1>🍴RESTAURANTE MANOLO🍴</h1></em>
    <br>
    <style>
      body {
        background-image: url('./img/fondo-restaurante.jpg');
        background-size: cover;
        background-position: center;
      }
    </style>
    <div class="column-3 columns">
        <div class="menu-restaurante">
            <u><h2>ENTRANTES🍟</h2></u>
            <?php
            /* Enlace al primer XML */
            if (file_exists('./xml/carta.xml')) {
                $platos = simplexml_load_file('./xml/carta.xml');
                foreach ($platos->entrante as $entrante) {
                    echo "<strong>" . $entrante['nombre'] . "</strong>";
                    echo "Precio: " . $entrante['precio'] . "<br>";
                    echo " " . $entrante['descripcion'] . "<br>";
                    echo "Calorías: " . $entrante['kcal'] . "<br>";
                    echo "Ingredientes:<br>";
                    foreach ($entrante->ingrediente as $ingrediente) {
                        echo "- " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                }
            } else {
                exit('¡Restaurante fuera de servicio!.');
            }
            ?>
        </div>
    <div class="menu-restaurante">
    <u><h2>BOCADILLOS🍔</h2></u>
    <?php
/* Enlace al segundo XML */
if (file_exists('./xml/carta.xml')) {
    $platos = simplexml_load_file('./xml/carta.xml');
    foreach ($platos->bocadillo as $bocadillo) {
        echo "<strong>" . $bocadillo['nombre'] . "</strong>";
        echo "Precio: " . $bocadillo['precio'] . "<br>";
        echo " " . $bocadillo['descripcion'] . "<br>";
        echo "Calorías: " . $bocadillo['kcal'] . "<br>";
        echo "Ingredientes:<br>";
        foreach ($bocadillo->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Restaurante fuera de servicio!.');
}
?>
    </div>
    <div class="menu-restaurante">
    <u><h2>POSTRES🍰</h2></u>
    <?php
/* Enlace al tercer XML */
if (file_exists('./xml/carta.xml')) {
    $platos = simplexml_load_file('./xml/carta.xml');
    foreach ($platos->postre as $postre) {
        echo "<strong>" . $postre['nombre'] . "</strong>";
        echo "Precio: " . $postre['precio'] . "<br>";
        echo " " . $postre['descripcion'] . "<br>";
        echo "Calorías: " . $postre['kcal'] . "<br>";
        echo "Ingredientes:<br>";
        foreach ($postre->ingrediente as $ingrediente) {
            echo "- " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
    }
} else {
    exit('¡Restaurante fuera de servicio!.');
}
?>
</div>
</br>
<div class="pie">
<p>Pregunte a nuestros amables camareros si padece alergías. Hay platos que pueden contener trazos de frutos secos, huevos o marisco.</p>
    <ol>🥚 - Incluye trazas de huevo.</ol>
    <ol>🍤 - Incluye trazas de pescado o marisco.</ol>
    <ol>🥬 - Ingredientes veganos o vegetarianos.</ol>
    <ol>🥩 - Ingredientes cárnicos.</ol>
    <ol>🍬 - Ingredientes con una alta cantidad de azúcar.</ol>
    <ol>🥖 - Ingredientes no aptos para celíacos.</ol>
</div>
    </div>
</body>
</html>