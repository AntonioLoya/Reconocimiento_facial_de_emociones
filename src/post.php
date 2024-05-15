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

    // Crear una carpeta si no existe
    $carpeta = 'archivos_json';
    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    // Ruta completa del archivo JSON
    $rutaArchivo = $carpeta . '/' . $nombreArchivo;

    // Datos de emociones
    $emociones = $data['emociones'];

    // Convertir a formato JSON
    $jsonString = json_encode($emociones, JSON_PRETTY_PRINT);

    // Guardar en un archivo JSON
<<<<<<< HEAD
    $archivo = fopen($nombreArchivo, 'w');
    if (!$archivo) {
        die('Error: No se pudo abrir el archivo ' . $nombreArchivo . ' para escribir');
    }
    if (!fwrite($archivo, $jsonString)) {
        die('Error: No se pudo escribir en el archivo ' . $nombreArchivo);
    }
=======
    $archivo = fopen($rutaArchivo, 'w');
    fwrite($archivo, $jsonString);
>>>>>>> c1ce87dec8ebd0280ecee068de3fb2530ae7035a
    fclose($archivo);

    // Enviar una respuesta al cliente
    echo 'Datos guardados correctamente en el archivo ' . $rutaArchivo;
} else {
    // Si los datos no se recibieron correctamente
    echo 'Error: No se recibieron los datos correctamente.';
}
?>

