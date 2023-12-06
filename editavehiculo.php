<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM vehiculos WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1 ) {
            $row = mysqli_fetch_array($result);
            $tipo_vehiculo = $row['tipo_vehiculo'];
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $color = $row['color'];
            $precio = $row['precio'];
            $placas = $row['placas'];
            $fecha_fabricacion = $row['fecha_fabricacion'];
            $observaciones = $row['observaciones'];

        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $tipo_vehiculo = $_POST['tipo_vehiculo'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $color = $_POST['color'];
        $precio = $_POST['precio'];
        $placas = $_POST['placas'];
        $fecha_fabricacion = $_POST['fecha_fabricacion'];
        $observaciones = $_POST['observaciones']; 

        $query = "UPDATE vehiculos set tipo_vehiculo ='$tipo_vehiculo', marca = '$marca', modelo = '$modelo', color = '$color', precio = '$precio', placas = '$placas', fecha_fabricacion = '$fecha_fabricacion', observaciones = '$observaciones' WHERE id = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = 'Información actualizada con exito';
        $_SESSION['message_type'] = 'primary'; 
        header("Location: index.php");
    }

?>

<?php include("includes/header.php") ?>

<div class="container p-5">
    <div class="col-md-14">
        <div class="card card-body">
            <form action="editavehiculo.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tipo de Vehiculo</label>
                        <select class="form-select" aria-label="Default select example" name="tipo_vehiculo">
                            <option selected><?php echo $tipo_vehiculo; ?></option>
                            <option value="Terrestre">Terrestre</option>
                            <option value="Aereo">Aereo</option>
                            <option value="Esapacial">Espacial</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Marca del Vehiculo</label>
                        <input type="text" class="form-control" name="marca"
                            placeholder="Actualiza la Marca del Vehiculo" aria-label="First name"
                            value="<?php echo $marca; ?>">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Modelo del Vehiculo</label>
                        <input type="text" class="form-control" name="modelo"
                            placeholder="Actualiza el Modelo del Vehiculo" aria-label="Last name"
                            value="<?php echo $modelo; ?>">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Color del Vehiculo</label>
                            <input type="text" class="form-control" name="color"
                                placeholder="Actualiza el Color del Vehiculo" aria-label="Last name"
                                value="<?php echo $color; ?>">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Precio del Vehiculo</label>
                            <input type="text" class="form-control" name="precio"
                                placeholder="Actualiza el Precio del Vehiculo" aria-label="Last name"
                                value="<?php echo $precio; ?>">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Placas del Vehiculo</label>
                            <input type="text" class="form-control" name="placas"
                                placeholder="Actualiza las Placas del Vehiculo" aria-label="Last name"
                                value="<?php echo $placas; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Fecha de Fabricación del Vehiculo</label>
                            <input type="date" class="form-control" name="fecha_fabricacion" aria-label="Last name"
                                value="<?php echo $fecha_fabricacion; ?>">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="exampleFormControlTextarea1"
                                rows="3"
                                placeholder="Actualiza las Observaciones......"><?php echo $observaciones; ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success" name="update">Actualizar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>