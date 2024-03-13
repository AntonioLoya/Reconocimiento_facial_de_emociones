<?php
// Obtener los datos enviados por POST
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los datos correctamente
if ($data && isset($data['nombre']) && isset($data['emociones'])) {
    // Nombre del archivo JSON
    $nombreArchivo = $data['nombre'];

    // Datos de emociones
    $emociones = $data['emociones'];

    // Convertir a formato JSON
    $jsonString = json_encode($emociones, JSON_PRETTY_PRINT);

    // Guardar en un archivo JSON
    $archivo = fopen($nombreArchivo, 'w');
    fwrite($archivo, $jsonString);
    fclose($archivo);

    // Enviar una respuesta al cliente
    echo 'Datos guardados correctamente en el archivo ' . $nombreArchivo;
} else {
    // Si los datos no se recibieron correctamente
    echo 'Error: No se recibieron los datos correctamente.';
}
?>
