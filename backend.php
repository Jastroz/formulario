<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se enviaron datos de usuario y contraseña
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        // Recibir los datos del formulario
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        // Aquí podrías realizar una validación con una base de datos o algún otro método
        // Por ejemplo, comparar los datos con una base de datos ficticia
        $usuarioValido = 'usuario'; // Nombre de usuario válido
        $contraseñaValida = 'contraseña123'; // Contraseña válida

        // Verificar si los datos ingresados coinciden con los datos válidos
        if ($usuario === $usuarioValido && $contraseña === $contraseñaValida) {
            // Usuario y contraseña son válidos, redirigir al formulario de inicio
            echo ("Se ha ingresado correctamente.");
            exit();
        } else {
            // Si los datos no son válidos, mostrar un mensaje de error
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        // Si no se enviaron datos de usuario o contraseña, mostrar un mensaje de error
        echo "Por favor, ingresa usuario y contraseña.";
    }
}
?>
