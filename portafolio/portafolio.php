<?php include ("header.php"); ?>
<?php include ("connect.php") ?>
<?php 
    if ($_POST){
        print_r($_POST);
        $objConnect = new connection();
        $name = $_POST["nombre"];
        $description = $_POST["descripcion"];
        $date = new DateTime();
        $image =  $date ->getTimestamp()."_".$_FILES["archivo"]["name"];
        
        $imageTemp = $_FILES["archivo"]["tmp_name"];
        move_uploaded_file($imageTemp, "./images/".$image);


        $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$name', '$image', '$description');";
    
        $objConnect -> execute($sql);
        header("location: portafolio.php");
    }
    if ($_GET) {
        $id = $_GET["borrar"];
        $objConnect = new connection();

        $image = $objConnect -> queries ("SELECT imagen FROM `proyectos` WHERE id=".$id);
        // print_r($image[0]["imagen"]);
        unlink("./images/".$image[0]["imagen"]);
        $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$_GET["borrar"];
        $objConnect -> execute($sql);
        header("location: portafolio.php");
    }
    $objConnect = new connection();
    $projects = $objConnect -> queries("SELECT * FROM `proyectos`");
    // print_r($projects);
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="container my-1">
            <form action="./portafolio.php" method="POST" enctype="multipart/form-data">
                <label >Nombre del proyecto</label>
                <input required class="form-control" type="text" name="nombre">
                <label >Imagen del proyecto</label>
                <input required class="form-control" type="file" name="archivo">
                <textarea required class="form-control" name="descripcion" cols="30" rows="10"></textarea>
                <input class="btn btn-success" type="submit" value="enviar proyecto">
            </form>
            </div>
        </div>
        <div class="col-md-6 ">
         
            <div class="container my-6">
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Opciones</th>
                            </tr>
                     
                        </thead>
                        <tbody>
                            <?php foreach($projects as $project) {?>
                            <tr class="table table-primary">
                                <td><?php echo $project["id"]; ?></td>
                                <td><?php echo $project["nombre"]; ?></td>
                                <td>
                                    <img width="100" src="./images/<?php echo $project["imagen"];?>" alt="">    
                                    
                                </td>
                                <td><?php echo $project["descripcion"]; ?></td>
                                <td> <a href="?borrar=<?php echo $project["id"]; ?> " class="btn btn-danger">Eliminar</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
                </div>

                </div>
</div>



<?php include ("footer.php"); ?>
