<!DOCTYPE html>
<html lang="es-mx">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Velocidad Orbital</title>

<link rel="stylesheet" href="css/estilo.css">

</head>

<body>

<div class="contenedor">

    <h1>Velocidad Orbital</h1>

    <section class="tarjeta">

        <h2>Problema</h2>

        <p>
            Calcular la velocidad necesaria para situar una nave espacial
            en órbita alrededor de la Tierra a 300 km de altitud sobre
            la superficie terrestre.
        </p>

    </section>

    <section class="tarjeta">

        <h2>Fórmula</h2>

        <p>
            v = √(G · M / r)
        </p>

    </section>

    <section class="tarjeta">

        <h2>Datos</h2>

        <p>G = 6.67 × 10⁻¹¹ N·m²/kg²</p>
        <p>M = 5.97 × 10²⁴ kg</p>
        <p>Radio de la Tierra = 6,378 km</p>
        <p>Altitud = 300 km</p>

    </section>

    <section class="tarjeta resultado">

        <h2>Resultado</h2>

        <?php

        function calcularVelocidadOrbital(){

            $G = 6.67E-11;
            $M = 5.97E24;

            $radioTierra = 6378E3;
            $altitud = 300E3;

            $r = $radioTierra + $altitud;

            $velocidad = sqrt(($G * $M) / $r);

            return $velocidad;
        }

        $resultado = calcularVelocidadOrbital();

        print "<p>La velocidad orbital necesaria es:</p>";
        print "<h3>" . round($resultado, 2) . " m/s</h3>";
        print "<h3>" . round($resultado / 1000, 2) . " km/s</h3>";

        ?>

    </section>

    <a href="index.php" class="boton">
        Regresar
    </a>

</div>

</body>
</html>