<?php 
include("conexion.php");

$titulo = "municipios";
show_head($titulo);
?>
	<section>
		<ul>
			<li><a href="listar.php" class="btn btn-info">listar</a></li>
			<li><a href="crear.php" class="btn btn-success">crear</a></li>
		</ul>
	</section>
<?php 
    show_footer();
?>

</body>
</html>