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
    <title>Learn CODING</title>
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
</head>
<body>
  <?php
    include "header.php";
  ?>

  <main>
    <div class="container-fluid">
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="mainSlider" data-slide-to="1"></li>
          <li data-target="mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imgs/logo-reduzida.png" alt="Logo" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="imgs/2.png" alt="Logo" class="d-block w-100">
          </div>
          <div class="carousel-caption d-nome d-md-block">
           
          </div>
          <div class="carousel-item">
            <img src="imgs/1.png" alt="Logo" class="d-block w-100">
          </div>
          <div class="carousel-caption d-nome d-md-block">
           
          </div>
        </div>
        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next" style="color: black;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">next</span>
        </a>
      </div>
    </div>
    <div class="texto">
    <h1>LEARN <span class="amarelo">C</span><span class="rosa">O</span><span class="roxo">D</span><span class="verde-agua">IN</span><span class="amarelo">G</span></h1>
    <p>A LEARN CODING tem um compromisso inabalável com a educação e a inclusão na área de tecnologia. Nosso site oferece uma ampla gama de seleção de cursos e recursos destinados a capacitar pessoas de todas as idades e origens. Desde programação e desenvolvimento de aplicativos até segurança cibernética e inteligência artificial, há algo para todos os interessados em mergulhar no mundo da tecnologia.</p>

    <p>O que torna a LEARN CODING verdadeiramente especial é seu compromisso com a comunidade de desenvolvedores. Todos os cursos que aqui recomendamos são gratuitos, e disponibilizados por seus respectivos autores no YouTube, garantindo que o conhecimento esteja ao alcance de todos, independentemente de sua situação financeira. Além disso, a organização também promove programas de mentoria, workshops e eventos comunitários, proporcionando oportunidades de aprendizado e networking.</p>
    
    <p>O principal diferencial da Lear CODING é a possibilidade de você também compartilhar seu conheciemnto com o proximo. Nosso intuito é divulgar matériais de qualidade disponibilizados no YouTube. Caso você possua algum curso gravado, envie-nos atraves da aba contato, nossa equipe irá analizar seu material e avaliar se ele se encaixa na proposta de nossa organização! </p>
    
    <p>Ao explorar o site da LEARN CODING, você encontrará uma interface amigável e conteúdo de alta qualidade. Você terá a oportunidade de aprimorar suas habilidades, desenvolver projetos emocionantes e, ao mesmo tempo, fazer parte de uma comunidade comprometida com o crescimento pessoal e profissional.</p>

    <p>A missão do LEARN CODING é capacitar as pessoas para que se tornem competentes a atuar na indústria de tecnologia, promovendo a diversidade e a inclusão. Se você está buscando uma maneira de expandir seus horizontes na área de tecnologia ou deseja apoiar uma organização que está fazendo a diferença, venha fazer parte da LEARN CODING</p>

    <p>Nós somos uma Organização sem fins lucrativos!</p>
  </div>
  </main>

  <?php
    include "footer.php";
  ?>
</body>
</html>
