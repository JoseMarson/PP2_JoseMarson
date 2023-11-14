<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<header>

<div class="toggle-btn" onclick="myfunction()">
  <span></span>
  <span></span>
  <span></span>
</div>

<div class="logo">
  <h1><a class="navbar-brand" href="#"> <img src="imgs/logo2.png" width="50px" alt=""> LEARN <span class="amarelo">C</span><span class="rosa">O</span><span class="roxo">D</span><span class="verde-agua">IN</span><span class="amarelo">G</span></a></h1>
</div>

<nav id="nav">
    <ul>
      <li><a href="index.php" <?php if ($current_page == 'index'){ echo 'class="selected"'; } else { echo 'class="noSelected"'; } ?>>Home</a></li>
      <li><a href="cursos.php" <?php if ($current_page == 'cursos') { echo 'class="selected"'; } else { echo 'class="noSelected"'; }?>>Cursos</a></li>
      <li><a href="contato.php" <?php if ($current_page == 'contato') { echo 'class="selected"'; } else { echo 'class="noSelected"'; } ?>>Contato</a></li>
    </ul>
</nav>

</header>