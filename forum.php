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
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="cursos.css">
        <title>Learn CODING - Forum</title>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    </head>
    <body>
    <?php
        include "header.php";

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $assuntos = $_POST['assunto'];
        $autor = $_POST['autor'];
        $clienttext = $_POST['clienttext'];
    ?>
    <main>
    <div>
            <!-- Formulário de Filtro -->
            <form action="resultado.php" method="post" id="filtro-form">
                <label for="filtro-nome">Filtrar por Nome:</label>
                <input type="text" name="filtro-nome" id="filtro-nome" value="<?php echo isset($_POST['filtro-nome']) ? $_POST['filtro-nome'] : ''; ?>">

                <label for="filtro-autor">Filtrar por Autor:</label>
                <select name="filtro-autor" id="filtro-autor">
                    <option value="">Todos</option>
                    <option value="Sim" <?php echo ($autor == 'Sim') ? 'selected' : ''; ?>>Sim</option>
                    <option value="Nao" <?php echo ($autor == 'Nao') ? 'selected' : ''; ?>>Não</option>
                </select>

                <label for="filtro-assunto">Filtrar por Assunto:</label>
                <select name="filtro-assunto" id="filtro-assunto">
                    <option value="">Todos</option>
                    <option value="Sugestões de cursos" <?php echo in_array('Sugestões de cursos', $assuntos) ? 'selected' : ''; ?>>Sugestões de cursos</option>
                    <option value="Criticas" <?php echo in_array('Criticas', $assuntos) ? 'selected' : ''; ?>>Críticas</option>
                    <option value="Elogios" <?php echo in_array('Elogios', $assuntos) ? 'selected' : ''; ?>>Elogios</option>
                    <option value="Outros" <?php echo in_array('Outros', $assuntos) ? 'selected' : ''; ?>>Outros</option>
                </select>

                <button type="submit">Filtrar</button>
            </form>

            <!-- Dados Recebidos -->
            <h2>Dados Recebidos:</h2>
            <p><strong>Nome:</strong> <?php echo $nome; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Autor de cursos aqui disponibilizados:</strong> <?php echo $autor; ?></p>
            <p><strong>Assuntos selecionados:</strong></p>
            <ul>
                <?php
                foreach ($assuntos as $assunto) {
                    echo "<li>$assunto</li>";
                }
                ?>
            </ul>
            <p><strong>Texto:</strong> <?php echo $clienttext; ?></p>
        </div>
    </main>
    
    </main>
    <?php
        include "footer.php";
    ?>
    </body>
</html>