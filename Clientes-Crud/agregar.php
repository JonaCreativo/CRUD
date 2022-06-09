    <div>
        <form>
            <label>Usuario:</label><br>
            <input type="text" name="txtuser"><br>
            <label>Apellidos:</label><br>
            <input type="text" name="txtapellidos"><br>
            <label>Rfc:</label><br>
            <input type="text" name="txtrfc"><br>
            <label>Dirección:</label><br>
            <input type="text" name="txtdireccion"><br>
            <label>Localidad:</label><br>
            <input type="text" name="txtlocalidad"><br>
            <label>Calle:</label><br>
            <input type="text" name="txtcalle"><br>
            <label>Numero Exterior:</label><br>
            <input type="text" name="txtnumero exterior"><br>
            <label>Numero Interior:</label><br>
            <input type="text" name="txtnumero interior"><br>
            <label>C.P.:</label><br>
            <input type="text" name="txtcp"><br>
            <label>Email:</label><br>
            <input type="text" name="email"><br>
            <label>Telefono:</label><br>
            <input type="text" name="txttelefono"><br>
            <label>Estatus:</label><br>
            <input type="text" name="txtestatus"><hr>
            <a href="index.php">Regresar</a>
        </form>
        </div>
        <?php 
        include 'conexion.php';
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
            $sql="insert into persona(Usuario,Apellidos,Rfc,Direccion,Localidad,Calle,Numero exterior,Numero interior, C.p.,Email,Telefono,Estatus)values('".$user."','".$apellidos."','".$rfc."','".$direccion."','".$localidad."','".$calle."','".$numero exterior."','".$numero interior."','".$cp."','".$email."','".$telefono."','".$estatus."')";
            mysql_query($sql);
            if ($user=1) {
                header("location:index.php");
            }
            # code...
        }
        ?>