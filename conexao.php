<?php

$hostname = "localhost";
$bancodedados = "PP2_JoseMarson";
$usuario = "root";
$senha = ""; 

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar com banco de dados, e o registro não foi salvo: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST["nome"]) ? $mysqli->real_escape_string($_POST["nome"]) : '';
    $email = isset($_POST["email"]) ? $mysqli->real_escape_string($_POST["email"]) : '';

 
    $sugestoes = 0;
    $criticas = 0;
    $elogios = 0;
    $outros = 0;


    $sugestoes = isset($_POST["assunto"]["sugestoes"]) ? 1 : 0;
    $criticas = isset($_POST["assunto"]["criticas"]) ? 1 : 0;
    $elogios = isset($_POST["assunto"]["elogios"]) ? 1 : 0;
    $outros = isset($_POST["assunto"]["outros"]) ? 1 : 0;

    $autor = isset($_POST["autor"]) ? 1 : 0;
    $clienttext = isset($_POST["clienttext"]) ? $mysqli->real_escape_string($_POST["clienttext"]) : '';

    $query = "INSERT INTO formulario (nome, email, sugestoes, criticas, elogios, outros, autor, texto) VALUES ('$nome', '$email', $sugestoes, $criticas, $elogios, $outros, $autor, '$clienttext')";
    
    if ($mysqli->query($query) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro na inserção: " . $mysqli->error;
    }
}

$mysqli->close();
?>