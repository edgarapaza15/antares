<?php
/**
 * Configuración de Seguridad
 * Archivo para establecer headers de seguridad y configuraciones de protección
 */

// Configuración de error reporting para producción
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/../logs/error.log');

// Headers de seguridad
function setSecurityHeaders() {
    // Prevenir clickjacking
    header('X-Frame-Options: DENY');
    
    // Prevenir MIME type sniffing
    header('X-Content-Type-Options: nosniff');
    
    // Habilitar XSS protection
    header('X-XSS-Protection: 1; mode=block');
    
    // Referrer Policy
    header('Referrer-Policy: strict-origin-when-cross-origin');
    
    // Content Security Policy básico
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data:;");
    
    // HSTS (HTTP Strict Transport Security)
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
    }
}

// Función para validar y sanitizar entrada
function sanitizeInput($input, $type = 'string') {
    switch ($type) {
        case 'email':
            return filter_var($input, FILTER_SANITIZE_EMAIL);
        case 'int':
            return filter_var($input, FILTER_VALIDATE_INT);
        case 'float':
            return filter_var($input, FILTER_VALIDATE_FLOAT);
        case 'url':
            return filter_var($input, FILTER_SANITIZE_URL);
        case 'string':
        default:
            return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }
}

// Función para generar token CSRF
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Función para verificar token CSRF
function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Función para limpiar sesión
function cleanSession() {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_regenerate_id(true);
    }
}

// Configurar límites de sesión
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', isset($_SERVER['HTTPS']));
ini_set('session.use_strict_mode', 1);
ini_set('session.cookie_samesite', 'Strict');

// Aplicar headers de seguridad
setSecurityHeaders();
