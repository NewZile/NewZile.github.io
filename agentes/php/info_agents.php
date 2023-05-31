<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info_agents";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el ID del agente desde la URL
$idAgente = $_GET['id'];

// Consultar la información del agente específico en la base de datos
$sql = "SELECT titulo, parrafo FROM agents WHERE id = $idAgente";
$result = $conn->query($sql);

if ($result === false) {
    // Error en la consulta SQL
    echo "Error en la consulta: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Obtener los datos del resultado
    $row = $result->fetch_assoc();
    $titulo = $row["titulo"];
    $parrafo = $row["parrafo"];

} else {
    echo "No se encontraron resultados para el agente seleccionado.";
}

// Cerrar la conexión
$conn->close();
?>
