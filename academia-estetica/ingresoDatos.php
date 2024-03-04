

<?php
include_once("conexion.php");

// Obtener datos del formulario
$nombres = $_POST["nombres"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

try {
    $objConexion2 = $conn;

    // Sentencia preparada para evitar inyecciones SQL
    $sql = "INSERT INTO contactos ( nombre, celular, correo_electronico, mensaje) VALUES ( '$nombres', $celular, '$correo', '$mensaje')";
   // echo $sql; exit;
    $stmt = $objConexion2->prepare($sql);

    // Vincular parámetros
    $stmt->bindParam(1, $nombres);
    $stmt->bindParam(2, $celular);
    $stmt->bindParam(3, $correo);
    $stmt->bindParam(4, $mensaje);

    // Ejecutar la sentencia preparada
    $stmt->execute();

 
   // Mensaje para la alerta
$message = "Registro exitoso, pronto nos pondremos en contacto.";

// Redirigir a la página principal (index.php) después de mostrar la alerta
echo "<script>alert('$message'); window.location.href = 'index.php';</script>";
   

} catch (PDOException $e) {
   // echo "Error: " . $e->getMessage();
    $message = "Por favor ingrese los datos solicitados.";

// Redirigir a la página principal (index.php) después de mostrar la alerta
echo "<script>alert('$message'); window.location.href = 'index.php';</script>";
    // Redirigir o manejar el error según sea necesario
}
?>

