<?php 

include "database.php";

$ChamadoModel;

Class ChamadoModel
{
public $titulo = "";
public $descricao = "";
public $prioridade = "";

private function __construct($pdo) {
    $this->titulo = $pdo->prepare("");
    $this->descricao = $pdo->prepare("");
    $this->prioridade = $pdo->prepare("");
}

private function listarTodos($pdo) {
    $sql = "SELECT * FROM chamados";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$chamados = $stmt->fetchAll(
    PDO::FETCH_ASSOC
);

foreach ($chamados as $chamado) {
    echo htmlspecialchars($chamado['id'],ENT_QUOTES,'UTF-8');
    echo htmlspecialchars($chamado['titulo'],ENT_QUOTES,'UTF-8');
    echo htmlspecialchars($chamado['descricao'],ENT_QUOTES,'UTF-8');
    echo htmlspecialchars($chamado['prioridade'],ENT_QUOTES,'UTF-8'); 

    }

}

function insert($chamados) {
    global $pdo;

    $titulo = $_POST['titulo'];

    $descricao = $_POST['descricao'];

    $prioridade = $_POST['descricao'];

    $sql = "INSERT INTO alunos

    (nome, email)

    VALUES (:nome, :email)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([

    'titulo' => $titulo,

    'descricao' => $descricao,

    'prioridade' => $prioridade

    ]);

    echo "Aluno cadastrado!";

}

}
