<?php
  //echo $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].''.strtok($_SERVER["REQUEST_URI"], '?');
  $currentPage = strtok($_SERVER["REQUEST_URI"], '?');
  $arrayCurrentPage = explode("/", $currentPage);

  foreach ($arrayCurrentPage as $valor) {
    if(str_contains($valor, '.php')){
      $cleanSearch = $valor;
      break;
    }
  }
?>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="search" value="<?php if(isset($_GET['search'])) echo $_GET['search']; ?>">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    <a class="btn btn-outline-info my-2 my-sm-0" href="<?=$cleanSearch?>">Limpar Pesquisa</a>
  </form>
</nav>