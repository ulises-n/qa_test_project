<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Registro exitoso.<br>";
    } else {
        echo "❌ Error: " . $conn->error . "<br>";
    }
}
?>

<h2>Registro de usuario</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>
    <button type="submit">Registrarse</button>
</form>
<a href="login.php">Ir a Login</a>
