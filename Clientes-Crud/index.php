        <!Doctype hytml>
        <html>
            <head>
                <title>CRUD</title>
        </head>
        <body>
        <?php 
        include 'conexion.php';
        $sql="select * from persona";
        $resultado=mysql_query($sql);
        ?> 
        <div>
            <a hreft="agregar">Nuevo</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>RFC</th>
                        <th>DIRECCION</th>
                        <th>LOCALIDAD</th>
                        <th>CALLE</th>
                        <th>NUMERO EXTERIOR</th>
                        <th>NUMERO INTERIOR</th>
                        <th>C.P.</th>
                        <th>EMAIL</th>
                        <th>TELEFONO</th>
                        <th>ESTATUS</th>
        </tr>
        </thead>
        <tbody>
            <?php while ($filas=mysql_fetch_assoc($resultado)) {
                # code...
            }?>
        <tr>
                        <th><?php echo $filas['Id'] ?></th>
                        <th><?php echo $filas['Nombre'] ?></th>
                        <th><?php echo $filas['Apellidos'] ?></th>
                        <th><?php echo $filas['Direccion'] ?></th>
                        <th><?php echo $filas['Localidad'] ?></th>
                        <th><?php echo $filas['Calle'] ?></th>
                        <th><?php echo $filas['Numero Exterior'] ?></th>
                        <th><?php echo $filas['Numero Interior'] ?></th>
                        <th><?php echo $filas['C.p.'] ?></th>
                        <th><?php echo $filas['Email'] ?></th>
                        <th><?php echo $filas['Telefono'] ?></th>
                        <th><?php echo $filas['Estatus'] ?></th>
                        <td>
                            <a href="editar.php?id=<?php echo $filas['Id'] ?>">Editar</a>
                            <a href="eliminar.php?id=<?php echo $filas['Id'] ?>">Eliminar</a>
                        </td>
                        
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </div>
        </body>
        </html>