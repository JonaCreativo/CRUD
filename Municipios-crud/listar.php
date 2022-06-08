<?php
include("conexion.php");

$titulo = "Listar Municipios";
show_head($titulo);
?>
    <section>
<?php 
    listar_municipios();
?>

  <ul>
      <li><a href="crear.php" class="btn btn-success">crear</a></li>
      <li><a href="index.php" class="btn btn-info">Volver</a></li>
    </ul>
  </section>

<?php 
    show_footer();
?>
</body>
</html>