
<link rel="stylesheet" type="text/css" href="style.css"><?php
include("conexion.php");

if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    $sql = "DELETE FROM alumnos WHERE id=$id";
    mysqli_query($conexion, $sql);
}




$sql = "SELECT * FROM alumnos";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<div style="text-align: center;">
  <img src="data:image/jpeg;base64,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" width="100" height="100">
</div>

    <title>CRUD de calificaciones</title>
</head>
 <style>
        body {
            background-image: url('uniqua.jfif');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

<body>
 <h1 style="text-align: center;">CRUD de calificaciones</h1>    

    <h2 style="text-align: center;">Lista de alumnos</h2>    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Parcial 1</th>
                <th>Parcial 2</th>
                <th>Parcial 3</th>
                <th>Promedio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["nombre"] . "</td>";
                echo "<td>" . $fila["parcial_1"] . "</td>";
                echo "<td>" . $fila["parcial_2"] . "</td>";
                echo "<td>" . $fila["parcial_3"] . "</td>";
                echo "<td>" . $fila["promedio"] . "</td>";
                  echo "<td>";
                echo "<a href='editar.php?id=" . $fila['id'] . "'>Editar</a>";
                echo " | ";
                echo "<a href='eliminar.php?id=" . $fila['id'] . "'>Eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            

        </tbody>    
    </table>
 <a href="nuevo_alumno.php"><button style="background-color: #A43A62;">Agregar alumno</button></a>


   
</body>
</html>