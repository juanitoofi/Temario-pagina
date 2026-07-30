<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Temario</title>
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>

    <header>
        <h1>Teatro Don Juan</h1>
        <p>Disfruta de las mejores obras teatrales</p>
    </header>

    <nav>
        <li><a href="Index.php">Inicio</a></li>
        <li><a href="obras.php">Obras</a></li>
         <li><a href="contacto.php">Contacto</a></li>
         <li><a href="cotizaciones.php">cotizaciones</a></li>
         
    </nav>

    <main>

        <div class="tarjeta">
            <h2>Romeo y Julieta</h2>
            <p>Una historia clásica de amor escrita por William Shakespeare.</p>
        </div>
        <div class="tarjeta">
            <h2>La Vida es Sueño</h2>
            <p>Obra representativa del teatro español.</p>
        </div>

        <div class="tarjeta">
            <h2>Disponibilidad de Entradas</h2>

            <?php

            $entradas = 30;

            if($entradas > 0)
            {
                echo "<p>Hay entradas disponibles.</p>";
            }
            else
            {
                echo "<p>Entradas agotadas.</p>";
            }

            ?>

        </div>
        <div>
            <main>

    <div class="tarjeta">
        <h2>Romeo y Julieta</h2>
        <p>Una historia clásica de amor escrita por William Shakespeare.</p>
    </div>

    <div class="tarjeta">
        <h2>La Vida es Sueño</h2>
        <p>Obra representativa del teatro español.</p>
    </div>

    <div class="tarjeta">
        <h2>Cotización para Funciones Teatrales</h2>

        <form method="post">

            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br><br>

            <label>Cantidad de personas:</label><br>
            <input type="number" name="personas"><br><br>

            <input type="submit" name="cotizar" value="Solicitar Cotización">

        </form>

<?php

if(isset($_POST['cotizar']))
{
    $nombre = $_POST['nombre'];
    $personas = $_POST['personas'];

    $sql = "INSERT INTO cotizaciones(nombre, personas, fecha)
            VALUES('$nombre','$personas',NOW())";

    if(mysqli_query($conexion, $sql))
    {
        echo "<p>Gracias, $nombre.</p>";
        echo "<p>Su cotización para $personas personas fue registrada correctamente.</p>";
    }
    else
    {
        echo "<p>Error al guardar la cotización.</p>";
    }
}

?>

    </div>
    <div>
       <div class="contenedor">

    <img src="https://i.pinimg.com/736x/30/4e/51/304e51c1803c563b70bf847e12ef65be.jpg" alt="Romeo y Julieta">


    <img src="https://i.pinimg.com/1200x/dd/ba/d2/ddbad20a7dbb99f95715a64ebe947661.jpg" alt="La Vida es Sueño">

</div>

</div>

    </div>

</main>
        </div>

    </main>

</body>
</html>