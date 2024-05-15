<?php
// Directorio donde se guardarán los archivos
$directorio = 'archivos_json/';

// Verificar si el directorio existe, si no, intenta crearlo
if (!is_dir($directorio)) {
    if (!mkdir($directorio, 0777, true)) {
        die('Error: No se pudo crear el directorio ' . $directorio);
    }
}

// Obtener los datos enviados por POST
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los datos correctamente
if ($data && isset($data['nombre']) && isset($data['emociones'])) {
    // Nombre del archivo JSON
    $nombreArchivo = $directorio . $data['nombre'];

    // Datos de emociones
    $emociones = $data['emociones'];

    // Convertir a formato JSON
    $jsonString = json_encode($emociones, JSON_PRETTY_PRINT);

    // Guardar en un archivo JSON
    $archivo = fopen($nombreArchivo, 'w');
    if (!$archivo) {
        die('Error: No se pudo abrir el archivo ' . $nombreArchivo . ' para escribir');
    }
    if (!fwrite($archivo, $jsonString)) {
        die('Error: No se pudo escribir en el archivo ' . $nombreArchivo);
    }
    fclose($archivo);

    // Enviar una respuesta al cliente
    echo 'Datos guardados correctamente en el archivo ' . $nombreArchivo;
} else {
    // Si los datos no se recibieron correctamente
    echo 'Error: No se recibieron los datos correctamente.';
}
?>

