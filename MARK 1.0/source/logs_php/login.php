<?php
    include('conexion.php');
    if(isset($_POST["nombre"]) && isset($_POST["pass"])){
        $nombre=$_POST['nombre'];
        $passwor=$_POST['pass'];
        //$sql = "SELECT NOMBRE, CI FROM DIRECTOR_CARRERA WHERE NOMBRE='$nombre' AND CI ='$passwor'";
        $sql = "CALL EVALUAR('PAULINO','123456789',@DATO)";
        $RSS= mysqli_query($cn,$sql);
        $sql = "SELECT @DATO";
        $RSS= mysqli_query($cn,$sql);
        $RDA=mysqli_fetch_row($RSS);
        if($RDA[0]=="1"){
                echo '1';
        }
        else{
            echo '0';
        }
    }
    else{
        echo("NO");
    }
    mysqli_close($cn);
?>