<?php
// Incluir configuración de seguridad primero
require_once "config/security.php";

// Incluir archivos principales
require_once "libs/Conexion.php";
require_once "libs/app.php";
require_once "libs/controller.php";
require_once "libs/model.php";
require_once "libs/view.php";
require_once "config/config.php";

// Configurar manejo de errores
set_error_handler(function($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
    $app = new App();
} catch (Exception $e) {
    error_log("Error en la aplicación: " . $e->getMessage());
    http_response_code(500);
    echo "Error interno del servidor. Por favor, inténtelo más tarde.";
}
