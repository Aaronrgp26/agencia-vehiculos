<?php

    include("db.php");

    if(isset($_POST['guardavehiculo'])){
        $tipo_vehiculo = $_POST['tipo_vehiculo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $precio = $_POST['precio'];
        $placas = $_POST['placas'];
        $fecha_fabricacion = $_POST['fecha_fabricacion'];
        $observaciones = $_POST['observaciones'];
        
        $query = "INSERT INTO vehiculos(tipo_vehiculo, marca, modelo, color, precio, placas, fecha_fabricacion, observaciones) VALUES ('$tipo_vehiculo', '$marca', '$modelo', '$color', '$precio', '$placas', '$fecha_fabricacion', '$observaciones')";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Fallo al guardar");
        }

        $_SESSION['message'] = 'La información del vehiculo se guardo satisfactoriamente';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }

?>