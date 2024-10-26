<?php
    // Datos de conexión a la base de datos


    $servername = "sql200.infinityfree.com"; 
    $username = "if0_37448121"; 
    $password = "YaEuo7wd0lKe"; 
    $dbname = "if0_37448121_prueba";

    // Crear conexión con la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturar los datos enviados desde el formulario
        $nombre = $_POST['nombre'];  
        $edad = $_POST['edad'];

        // Consulta SQL para insertar los datos en la base de datos
        $sql = "INSERT INTO persona (Nombre, Edad) VALUES ('$nombre', '$edad')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
?>