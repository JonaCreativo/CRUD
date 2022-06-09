<?php
include("conexion.php");

$titulo = "Editar Municipios";
show_head($titulo);
?>
    <section>
    <?php  
    if (isset($_GET['id']) ) { 
        $id = (int) $_GET['id']; 
        if (isset($_POST['submitted'])) {  
            $Nombre_Mun = $_POST['Nombre_Mun'];
            actualizar_municipio($Nombre_Mun); 
        } 
        $querymunicipios = "SELECT * FROM `municipio` WHERE `id` = '$id' ";
        $row = mysqli_fetch_array ( mysqli_query($conectar, $querymunicipios)); 
?>

<br />
<div class="container">
<form class="form-horizontal" name="registrar" role="form" action='' method='POST'>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nombre municipio:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name='Nombre_Mun' value='<?php echo stripslashes($row['Nombre_Mun']) ?>' data-validation="length" data-validation-length="min1">
            </div> 
                <input type='hidden' value='1' name='submitted' />
            
    </div><button type="submit" name="registro" class="btn btn-success">Guardar</button>
</form> 
<?php }
?>
</div>
  <ul>
      <li><a href="listar.php" class="btn btn-primary">listar</a></li>
      <li><a href="index.php" class="btn btn-info">Volver</a></li>
    </ul>
  </section>

<?php 
    show_footer();
?>
</body>
</html>