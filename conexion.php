<?php
$host = 'localhost';
$dbname = 'nombre_base_datos';
$username = 'root';  // Usuario de MySQL
$password = '';      // Contraseña de MySQL

try {
    // Crear conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar opciones de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "✅ Conexión exitosa a la base de datos";
} catch(PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>