<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="custom.js"></script>
        <script src="script.js"></script>
        
        <title>Learn CODING - Contato</title>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    </head>
    <body>
    <?php
    include "header.php";
  ?>
    <main>
        <form action="conexao.php"  name="formulario" method="post" id="formulario">
            <h2>Fale Conosco:</h2>
            <div>
                <label for="nome"><img src="imgs/icons/person-circle.svg" alt="">  Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo...">
                <span></span>
            </div>
            <div>  
                <label for="email"><img src="imgs/icons/envelope-at.svg" alt=""> E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite um e-mail válido...">
                <span></span>
            </div>
            <label for="assunto">Assunto:</label>
            <div>
                <input type="checkbox" id="Sugestões" name="assunto[]" value="Sugestões de cursos">
                <label for="Sugestões">Sugestões de cursos</label>
            </div>
            <div>
                <input type="checkbox" id="Criticas" name="assunto[]" value="Criticas">
                <label for="Criticas">Criticas</label>
            </div>
            <div>
                <input type="checkbox" id="Elogios" name="assunto[]" value="Elogios">
                <label for="Elogios">Elogios</label>
            </div>
            <div>
                <input type="checkbox" id="Outros" name="assunto[]" value="Outros">
                <label for="Outros">Outros...</label>
            </div>
            <div>
                <p>Você é autor de algum curso aqui divulgado?</p>
                <input type="radio" id="autorSim" name="autor" value="Sim">
                <label for="autorSim">Sim</label>
                <input type="radio" id="autorNao" name="autor" value="Nao">
                <label for="autorNao">Não</label>
            </div>
            <div>
                <p></p>
                <textarea name="clienttext" id="clienttext" maxlength="20000" cols="1" rows="5"></textarea>
                <span></span>
            </div>
            <button class="btn btn-primary">Enviar</button>
            
        </form>
    </main>

    <dialog id="vis-modal">
        <div class="conteudo-modal">
            <p>Confirme os dados inseridos:</p>
            <button class="close" onclick="fecharModal('vis-modal')"><img src="node_modules/bootstrap-icons/icons/x-square-fill.svg" alt=""></button>
          <div id="mensagemSucesso" class="modal-content">
                <p><strong>Nome:</strong> <span id="infoNome"></span></p>
                <p><strong>Email:</strong> <span id="infoEmail"></span></p>
                <p><strong>Autor de cursos aqui disponibilizados:</strong> <span id="infoAutor"></span></p>
                <p><strong>Assuntos selecionados:</strong></p>
                <ul id="infoAssuntos"></ul>
                <p><strong>Texto:</strong> <span id="infoclienttext"></span></p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" onclick="enviarFormulario()"> <img src="imgs/icons/check.svg" alt="">Confirmar</button>
            <button class="btn btn-secondary" onclick="resetform()"><img src="imgs/icons/x.svg" alt="">Limpar</button>
            <button class="btn btn-secondary alterar" onclick="fecharModal('vis-modal')"> <img src="imgs/icons/arrow-clockwise.svg" alt="">Alterar</button>
          </div>
        </div>
      </dialog>
    <?php
        include "footer.php";
    ?>
    </body>
</html>