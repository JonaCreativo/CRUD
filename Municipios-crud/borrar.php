<?php
include("conexion.php");

$titulo = "Borrar Municipios";
show_head($titulo);
?>
    <section>
    <?php 
    //recibo el ID del municipio a borrar
    $id = (int) $_GET['id']; 
    
    //se lo envío a la función borrar
    borrar_municipio($id);
    ?>
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