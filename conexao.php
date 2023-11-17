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
    $autor = isset($_POST["autor"]) && $_POST["autor"] === "Sim" ? 1 : 0;
    $clienttext = isset($_POST["clienttext"]) ? $mysqli->real_escape_string($_POST["clienttext"]) : '';

    $assunto = isset($_POST["assunto"]) ? (is_array($_POST["assunto"]) ? implode(',', $_POST["assunto"]) : $_POST["assunto"]) : '';

    $query = "INSERT INTO formulario (nome, email, assunto, autor, texto) VALUES ('$nome', '$email', '$assunto', $autor, '$clienttext')";

    if ($mysqli->query($query) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro na inserção: " . $mysqli->error;
    }
}

$mysqli->close();
?>
