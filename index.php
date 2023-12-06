<?php include("db.php") ?>

<?php include ("includes/header.php") ?>

<div class="container p-5">
    <div class="col-md-14">
        <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php session_unset(); } ?>
        <div class="card card-body">
            <form action="guardavehiculo.php" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tipo de Vehiculo</label>
                        <select class="form-select" aria-label="Default select example" name="tipo_vehiculo">
                            <option selected>Selecciona el Tipo de Vehiculo</option>
                            <option value="Terrestre">Terrestre</option>
                            <option value="Aereo">Aereo</option>
                            <option value="Esapacial">Espacial</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Marca del Vehiculo</label>
                        <input type="text" class="form-control" name="marca"
                            placeholder="Introduce la Marca del Vehiculo" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Modelo del Vehiculo</label>
                        <input type="text" class="form-control" name="modelo"
                            placeholder="Introduce el Modelo del Vehiculo" aria-label="Last name">
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Color del Vehiculo</label>
                            <input type="text" class="form-control" name="color"
                                placeholder="Introduce el Color del Vehiculo" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Precio del Vehiculo</label>
                            <input type="text" class="form-control" name="precio"
                                placeholder="Introduce el Precio del Vehiculo" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Placas del Vehiculo</label>
                            <input type="text" class="form-control" name="placas"
                                placeholder="Introduce las Placas del Vehiculo" aria-label="Last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Fecha de Fabricación del Vehiculo</label>
                            <input type="date" class="form-control" name="fecha_fabricacion" aria-label="Last name">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1" class="form-label">Observaciones</label>
                            <textarea class="form-control" name="observaciones" id="exampleFormControlTextarea1"
                                rows="3" placeholder="Introduce las Observaciones......"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-success btn block" name="guardavehiculo">
                        </div>
                    </div>
                </div>
            </form>
        </div><br>

        <div class="col-md-14">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tipo Vehiculo</th>
                        <th>Marca </th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Precio</th>
                        <th>Placas</th>
                        <th>Fecha Fabricacion</th>
                        <th>Observaciones</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM vehiculos";
                    $result_automovile = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_automovile)){ ?>

                    <tr>
                        <td><?php echo $row['tipo_vehiculo'] ?></td>
                        <td><?php echo $row['marca'] ?></td>
                        <td><?php echo $row['modelo'] ?></td>
                        <td><?php echo $row['color'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td><?php echo $row['placas'] ?></td>
                        <td><?php echo $row['fecha_fabricacion'] ?></td>
                        <td><?php echo $row['observaciones'] ?></td>
                        <td>
                            <a href="editavehiculo.php?id=<?php echo $row['id']?>" class="btn btn-info">
                                Editar
                            </a>
                            <a href="eliminavehiculo.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include ("includes/footer.php") ?>