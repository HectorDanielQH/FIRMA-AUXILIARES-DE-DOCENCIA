<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>SEA BIENVENIDO </h1>
        <?php
            include("../logs_php/conexion.php");
            session_start();
            if(isset($_SESSION["usuario"]) && isset($_SESSION["contra"]))
            {
                echo $_SESSION["usuario"];
                $sql="SELECT NOMBRE FROM ";
            }
            else
            {
                header("location: ../login_user/ingreso.html");
            }
        ?>
        <form action="cerrar.php" method="post">
            <input type="submit" value="CERRAR">
        </form>
    </header>
    <div>
        <aside>

        </aside>
        <div class="contenedor">

        </div>
    </div>
    <footer>

    </footer>
</body>
</html>