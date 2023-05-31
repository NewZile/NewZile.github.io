<?php
session_start();
// Verificar si hay una sesión iniciada
if (isset($_SESSION["user_id"])) {
  // Obtener el ID del usuario que inició sesión
  $user_id = $_SESSION["user_id"];

  // Conectar a la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "php_login_base";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  // Obtener la información del usuario
  $sql = "SELECT name, email FROM users WHERE id = $user_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Mostrar la información del usuario
    $row = $result->fetch_assoc();
  } else {
    echo "No se encontró el usuario";
  }

  // Cerrar la conexión
  $conn->close();
} else {
  echo "Debes iniciar sesión para ver esta página";
}
?>