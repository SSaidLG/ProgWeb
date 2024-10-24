<?php
    include "conexion.php";
    
    $consulta_sql = "SELECT * FROM alumno";

    $resultado = $conexion->query($consulta_sql);

    $count = mysqli_num_rows($resultado);

    echo "<table>";
            echo"<tr>";
                echo"<th>Nombre Completo del Alumno</th>";

                echo"<th>Carrera</th>";

                echo"<th>N_Cuenta</th>";

                echo"<th>Direccion</th>";

            echo "</tr>";
 

        if($count > 0){
            while($row = mysqli_fetch_assoc($resultado)){
                echo"<tr>";
                        echo"<td>".$row['nombre']."</td>";
                        echo"<td>".$row['carrera']."</td>";
                        echo"<td>".$row['n_cuenta']."</td>";
                        echo"<td>".$row['direccion']."</td>";
                echo"</tr>";
            }
        }
        // Tarea, 1er ss BD, 2da SS codigo en php (conexion y parte para listar), 3ra SS funcional
?>