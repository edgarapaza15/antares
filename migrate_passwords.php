<?php
/**
 * Script para migrar contraseñas de MD5 a password_hash
 * IMPORTANTE: Ejecutar solo una vez y eliminar después de usar
 */

require_once "config/config.php";
require_once "libs/Conexion.php";

class PasswordMigrator {
    private $conn;
    
    public function __construct() {
        $this->conn = new Conexion();
    }
    
    public function migratePasswords() {
        try {
            // Obtener todos los usuarios con contraseñas MD5
            $sql = "SELECT idpersonal, email, passwd FROM login WHERE passwd REGEXP '^[a-f0-9]{32}$'";
            $result = $this->conn->ConsultaCon($sql);
            
            if (!$result) {
                echo "No se encontraron contraseñas MD5 para migrar.\n";
                return;
            }
            
            $migrated = 0;
            $errors = 0;
            
            while ($row = $result->fetch_assoc()) {
                // Generar nueva contraseña hash segura
                $newHash = password_hash($row['passwd'], PASSWORD_DEFAULT);
                
                // Actualizar en la base de datos
                $updateSql = "UPDATE login SET passwd = ? WHERE idpersonal = ?";
                $stmt = $this->conn->prepare($updateSql);
                
                if ($stmt) {
                    $stmt->bind_param("si", $newHash, $row['idpersonal']);
                    if ($stmt->execute()) {
                        $migrated++;
                        echo "Migrado usuario: " . $row['email'] . "\n";
                    } else {
                        $errors++;
                        echo "Error migrando usuario: " . $row['email'] . "\n";
                    }
                    $stmt->close();
                } else {
                    $errors++;
                    echo "Error preparando statement para: " . $row['email'] . "\n";
                }
            }
            
            echo "\nMigración completada:\n";
            echo "Usuarios migrados: $migrated\n";
            echo "Errores: $errors\n";
            
        } catch (Exception $e) {
            echo "Error durante la migración: " . $e->getMessage() . "\n";
        }
    }
}

// Ejecutar migración solo si se accede directamente
if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])) {
    echo "Iniciando migración de contraseñas...\n";
    $migrator = new PasswordMigrator();
    $migrator->migratePasswords();
    echo "Migración finalizada.\n";
}
