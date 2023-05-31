<?php
$mensaje = '';
// Obtener los datos del formulario y limpiarlos
$titulo = htmlspecialchars(trim($_POST['titulo']));
$parrafo = htmlspecialchars(trim($_POST['parrafo']));

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "info_agents");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error: no se pudo conectar a la base de datos");
}

// Insertar los datos en la tabla
$sql = "INSERT INTO agents (titulo, parrafo) VALUES ('$titulo', '$parrafo')";
if (!mysqli_query($conexion, $sql)) {
    die("Error: no se pudo insertar los datos en la base de datos");
}

// Cerrar la conexión
mysqli_close($conexion);

// Redirigir al usuario de vuelta al formulario con un mensaje de éxito
header("Location: new_agent.html?mensaje=Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.");
?>
