<?php
// Autoloader com Diagnóstico
spl_autoload_register(function ($class) {
    $prefix = 'PhiloQuest\\';
    $base_dir = __DIR__ . '/src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Isso vai nos mostrar onde o PHP está procurando
    if (file_exists($file)) {
        echo "✅ Arquivo encontrado: $file <br>";
        require $file;
    } else {
        echo "❌ Arquivo NÃO encontrado: $file <br>";
    }
});

// TESTANDO
use PhiloQuest\Entidades\Professor;
use PhiloQuest\Entidades\Aluno;

echo "--- Iniciando Teste ---<br>";

if (class_exists('PhiloQuest\Entidades\Professor')) {
    $prof = new Professor();
    echo "Sucesso ao criar Professor! <br>";
} else {
    echo "Falha crítica: A classe Professor ainda não foi reconhecida.<br>";
}