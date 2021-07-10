<?php
        include("conexion.php");

        $nombre = $_POST['nombre'] ;
        $correo = $_POST['correo'] ;
        $password = $_POST['password'] ;

        $query = "INSERT INTO usuarios (nombre, correo, password)
         VALUES ('$nombre', '$correo', '$password')";

        $result = mysqli_query($conn,$query);
       
        $_SESSION['mensaje'] = "Usuario guardado con éxito";

        header("Location: index.php");




?>