<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "✅ Bienvenido, " . $row['nombre'] . "<br>";
        } else {
            echo "❌ Contraseña incorrecta.<br>";
        }
    } else {
        echo "❌ Usuario no encontrado.<br>";
    }
}
?>

<h2>Iniciar Sesión</h2>
<form method="POST">
    Email: <input type="email" name="email" required><br><br>
    Contraseña: <input type="password" name="password" required><br><br>
    <button type="submit">Ingresar</button>
</form>
<a href="register.php">Ir a Registro</a>
