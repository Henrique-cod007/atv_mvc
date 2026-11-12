<?php 

try {
$pdo = new PDO(
    "mysql:host=localhost;dbname=db_techsupport;charset=utf8mb4",
    "root",
    ""
);

$pdo->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);

$pdo->setAttribute(
    PDO::ATTR_EMULATE_PREPARES,
    false
);

} catch (PDOException $e) {
    // Registre o erro; não exponha detalhes ao usuário.
die("Não foi possível conectar ao banco.");
}

