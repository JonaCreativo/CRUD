<?php 
include 'conexion.php';
$id=$_GET['Id'];
$sql="select * from persona where Id='".$id."'";
$resultado=mysql_query($sql);
while ($fila=mysql_fetch_assoc($resultado)) {
    # code..

?>
<div>
        <form>
            <input type="hidden" name="txtid" value="<?php echo $fila['Id'] ?>">
            <label>Usuario:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Usuario'] ?>"><br>
            
            <label>Apellidos:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Apellidos'] ?>"><br>
            
            <label>Rfc:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Rfc'] ?>"><br>
            
            <label>Dirección:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Dirección'] ?>"><br>
            
            <label>Localidad:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Localidad'] ?>"><br>
           
            <label>Calle:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Calle'] ?>"><br>
           
            <label>Numero Exterior:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Numero Exterior'] ?>"><br>
            
            <label>Numero Interior:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Numero Interior'] ?>"><br>
            
            <label>C.P.:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['C.p.'] ?>"><br>
            >
            <label>Email:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Email'] ?>"><br>
            
            <label>Telefono:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Telefono'] ?>"><br>
            
            <label>Estatus:</label><br>
            <input type="hidden" name="txtid" value="<?php echo $fila['Estatus'] ?>"><hr>
           
            <input type="submit" name="" value="Actualizar">
        </form>
        <?php } ?>
        </div>
        <?php 
        $id=$_GET['txtid'];
        $user=$_GET['txtuser'];
        $user=$_GET['txtapellidos'];
        $user=$_GET['txtrfc'];
        $user=$_GET['txtdireccion'];
        $user=$_GET['txtlocalidad'];
        $user=$_GET['txtcalle'];
        $user=$_GET['txtnumero exterior'];
        $user=$_GET['txtnumero interior'];
        $user=$_GET['txtcp'];
        $user=$_GET['txtemail'];
        $user=$_GET['txttelefono'];
        $user=$_GET['txtestatus'];
        if ($user!=null||$apellidos!=null||$rfc!=null||$direccion!=null||$localidad!=null||$calle!=null||$numero exterior!=null||$numero interior!=null||$cp!=null||$email!=null||$telefono!=null||$estatus!=null) {
            $sql2="update persona set Usuario='".$user."', Apellidos='".$apellidos."', Rfc='".$rfc."', Direccion='".$direccion."', Localidad='".$localidad."',Calle='".$calle."', Numero Exterior='".$numero exterior."',Numero Interior='".$numero interior."',C.P.='".$cp."',Email='".$email."',Telefono='".$telefono."', Estatus='".$estatus."' where Id=)'"
            .$idp."'";
            mysql_query($sql2);
            if ($user=1) {
                header("location:index.php");
            }
            # code...
        }
        ?>