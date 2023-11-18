<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <title>Learn CODING - Cursos</title>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php
            include "header.php";
        ?>
        <h1>Contatos Recebidos:</h1>
        <?php

            $hostname = "localhost";
            $bancodedados = "PP2_JoseMarson";
            $usuario = "root";
            $senha = ""; 

            $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

            if ($mysqli->connect_error) {
            die("Conexão falhou: " . $mysqli->connect_error);
            }

            $sql = $mysqli->prepare("SELECT * FROM formulario");
            $sql->execute();
            $consultas = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

            foreach ($consultas as $value) {
        ?>
        <main>
            
                
            <div class="container">
                <div class="forum">
                    <p><img src="node_modules/bootstrap-icons/icons/person-circle.svg" alt=""> Nome: <?php echo $value['nome'] ?></p>
                    <p>Assuntos: <?php echo $value['assunto'] ?></p>
                    <p>Autor: <?php echo ($value['autor'] == 1) ? 'Sim' : 'Não'; ?></p>
                    <p>Mensagem: <?php echo $value['texto'] ?></p>
                </div>
                
            </div>
        
        </main>
        <?php
            }

            include "footer.php";
        ?>
    </body>
</html>