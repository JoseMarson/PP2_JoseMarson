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
        <title>Learn CODING - Cursos</title>
        <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    </head>
    <body>
    <?php
        include "header.php";
    ?>
    <main>
        <h2>Recomendações de cursos:</h2>
        <div class="container">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-container mySwiper">
             
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="imgs/java.png"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>Curso de JAVA</h4>
                            </div>
                            <div class="card-text">
                                <p>O curso possui o intuito de introduzir conceitos fundamentais da programação orientada a objetos</p>
                            </div>
                            <div class="card-link">
                              <a href="https://www.youtube.com/watch?v=VKjFuX91G5Q&list=PL62G310vn6nFIsOCC0H-C2infYgwm8SWW" target="_blank">INICIAR</a>
                            </div>
                        </div>
    
                    </div>
                    <div class="swiper-slide">
                        <img src="imgs/android.png"
                            alt="">
                        <div class="card-description">
                            <div class="card-title">
                                <h4>Desenvolvimento Android</h4>
                            </div>
                            <div class="card-text">
                                <p>Introdução ao desenvolvimento para dispositivos moveis com SO Android utilizando Kotlin</p>
                            </div>
                            <div class="card-link">
                              <a href="https://www.youtube.com/watch?v=xTK81wzyBPw&list=PL50rZONmv8ZRsWj0L3rvSicPSEJl6sQ40" target="_blank">INICIAR</a>
                            </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="imgs/c.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Estrutura de dados com C</h4>
                        </div>
                        <div class="card-text">
                            <p>Ao decorrer do curso abordaremos a principais estruturas de dados utilizando a linguagem de programação C.</p>
                        </div>
                        <div class="card-link">
                          <a href="https://www.youtube.com/watch?v=-twvgnfOnVQ&list=PLrOyM49ctTx_AMgNGQaic10qQJpTpXfn_" target="_blank">INICIAR</a>
                        </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="imgs/web.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Desenvolvimento WEB</h4>
                        </div>
                        <div class="card-text">
                            <p>O curso busca introduzir os principais conceitos do desenvolvimento WEB, trabalhando com HTML 5, CSS 3 e JS</p>
                        </div>
                        <div class="card-link">
                          <a href="https://www.youtube.com/watch?v=Ejkb_YpuHWs&list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n" target="_blank">INICIAR</a>
                        </div>
                    </div>
                </div>
                    <div class="swiper-slide">
                        <img src="imgs/flutter.png"
                        alt="">
                    <div class="card-description">
                        <div class="card-title">
                            <h4>Flutter</h4>
                        </div>
                        <div class="card-text">
                            <p>Desenvolvimento mobile cross-plataform utilizando Flutter</p>
                        </div>
                        <div class="card-link">
                          <a href="https://www.youtube.com/watch?v=fcMlPEVSacs&list=PLRpTFz5_57cvo0CHf-AnojOvpznz8YO7S" target="_blank">INICIAR</a>
                        </div>
                    </div>
                </div>
                
                    </div>
           
                </div>
             
             
    
            </div>
    
        </div>
        <!-- Swiper JS -->
    
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="app.js"></script>
    </main>
    <?php
        include "footer.php";
    ?>
    </body>
</html>