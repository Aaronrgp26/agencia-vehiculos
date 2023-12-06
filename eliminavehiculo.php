<?php

    include("db.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM vehiculos WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Fallo al Eliminar");
        }

        $_SESSION['message'] = 'El registro se elimino satisfactoriamente';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }

?>