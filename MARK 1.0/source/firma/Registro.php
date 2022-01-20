<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo_regist.css">
</head>
<body>
    <div id="cabecera">
        <h1>
        <?php
            session_start();
            if(isset($_SESSION["usuario"])){
                include("../logs_php/conexion.php");
                $nombres=$_SESSION["usuario"];
                $passwors=$_SESSION["contra"];
                $sql = "SELECT NOMBRE, APELLIDO FROM DIRECTOR_CARRERA WHERE NOMBRE='$nombres' AND CI ='$passwors'";
                $RSS= mysqli_query($cn,$sql);
                $RDA=mysqli_fetch_row($RSS);
                echo "Sea bienvenido: ".$RDA[0]." ".$RDA[1];
                mysqli_close($cn);
            }
            else
            {
                header('location: ../login_user/ingreso.html');
            }

        ?>
        </h1>
        <form action="cerrar.php" method="post">
            <input type="submit" value="CERRAR SESION" id="boton">
        </form>
    </div>
    <form id="contenedor">
        <canvas id="canvas" width="1200" height="500"></canvas>
        <br>
        <h3 id="letra">GROSOR DE LINEA</h3>
        <input type="range" id="grosor" oninput="fgrosor(this.value);" min="1" max="3" value="0.1">
        <input type="button" id="Borrar" value="BORRAR">
        <h3 id="letra">DESCRIPCION DEL TEMA QUE SE LLEVARA HOY</h3>
        <input type="text" id="tex1">
        <h3 id="letra">PEGUE EL ENLACE DEL AULA VIRTUAL EN LA QUE SE LLEVARA HOY</h3>
        <input type="text" id="tex1"><br><br>
        <input type="submit" id="Borrar" value="ENVIAR COMPROBANTE">
    </form>
    <br>
    <script src="logica.js"></script>
</body>
</html>