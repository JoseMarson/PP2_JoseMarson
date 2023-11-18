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
        <form action="" name="filtro" method="post" id="filtro" class="mt-4">
            <div class="form-row align-items-center">
                <div class="col-md-4 mb-2">
                    <label for="nome" class="sr-only">Buscar por nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Buscar por nome">
                </div>
                <div class="col-md-4 mb-2">
                    <label for="filtro" class="sr-only">Filtro:</label>
                    <select name="filtro" id="filtro" class="form-control">
                        <option value="" disabled selected>Buscar por assunto</option>
                        <option value="todos">Todos</option>
                        <option value="Sugestões de cursos">Sugestão</option>
                        <option value="Criticas">Criticas</option>
                        <option value="Elogios">Elogios</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <div class="col-md-2 mb-2">
                    <input type="image" src="imgs/icons/search.svg" alt="Submit" class="img-fluid">
                </div>
            </div>
        </form>
        <?php

            $hostname = "localhost";
            $bancodedados = "PP2_JoseMarson";
            $usuario = "root";
            $senha = ""; 

            $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

            if ($mysqli->connect_error) {
            die("Conexão falhou: " . $mysqli->connect_error);
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                $filtro = isset($_POST['filtro']) ? $_POST['filtro'] : '';
                $nome = isset($_POST["nome"]) ? $mysqli->real_escape_string($_POST["nome"]) : '';

                $sql = "SELECT * FROM formulario";

                if (!empty($nome)) {
                    $sql .= " WHERE nome LIKE ?";
                }

                if ($filtro != 'todos') {
                    $sql .= (!empty($nome) ? " AND" : " WHERE") . " FIND_IN_SET(?, assunto) > 0";;
                }

                $stmt = $mysqli->prepare($sql);

                if (!empty($nome) && $filtro != 'todos') {
                    $stmt->bind_param("ss", $nome, $filtro);
                }
                 elseif (!empty($nome)) {
                    $stmt->bind_param("s", $nome);
                }
                elseif ($filtro != 'todos') {
                    $stmt->bind_param("s", $filtro);
                }

                $stmt->execute();

                $consultas = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            }
            else {
           
            $sql = "SELECT * FROM formulario";
            $result = $mysqli->query($sql);
            $consultas = $result->fetch_all(MYSQLI_ASSOC);
        }
            foreach ($consultas as $value) {
        ?>
        <main >
              
            <div class="container">
                <div class="forum">
                    <p><img src="imgs/icons/person-cicle.svg" alt=""> Nome: <?php echo htmlspecialchars($value['nome']); ?></p>
                    <p>Assuntos: <?php echo htmlspecialchars($value['assunto']); ?></p>
                    <p>Autor: <?php echo ($value['autor'] == 1) ? 'Sim' : 'Não'; ?></p>
                    <p>Mensagem: <?php echo htmlspecialchars($value['texto']); ?></p>
                </div>
                
            </div>
        
        </main>
        <?php
            }
            $totalItensRecuperados = count($consultas);

            if ($totalItensRecuperados > 0) {
                echo '<span class="badge badge-info">Total de ' . $totalItensRecuperados . ' itens correspondentes ao filtro</span>';
            }

            include "footer.php";
        ?>
    </body>
</html>