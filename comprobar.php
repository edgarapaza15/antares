
<?php
// Ver el ejemplo proporcionado en la página de la función password_hash()
// para saber de dónde proviene esto.
$hash = '$2y$10$Gd9ZrX6LR6R3vOBErXlem.VSUGTPld96Qz8wd3d8N6aOLOli71a9W';

$clase = "edgar";

if (password_verify($clase, $hash)) {
    echo 'La contraseña es válida !';
} else {
    echo 'La contraseña es inválida.';
}
echo "\n";
echo password_hash($clase, PASSWORD_DEFAULT);
?>

