<?php

// tipo = 1 = Main | Tipo = 2 = Outras Páginas
function includeHeader($texto, $tipo){
  $header = file_get_contents(HEADER_TEMPLATE);

  $pagina = basename($_SERVER['PHP_SELF'],'.php'); 

    if($pagina == "index"){
        $pagina = "home";
    }


    $pagina = $pagina . '.css';

    // Se for uma página de projeto específico, reutiliza css da página projetos
  if(($texto == "Geotur" || $texto == "Circuito Empreenda Poços" || $texto == "IF Portas Abertas" || $texto == "Eletro+" || $texto == "Pesquisa de Mercado") && $tipo == 2){
    $pagina = "projetos.css";
    $header = str_replace('ARQUIVO_CSS_PAGINA', $pagina , $header);
  }else if($pagina == "home.css" && $texto == "Projetos"){
    $pagina = "projetos.css";
    $header = str_replace('ARQUIVO_CSS_PAGINA', $pagina , $header);
  }else{
    $header = str_replace('ARQUIVO_CSS_PAGINA', $pagina , $header);
  }
  

  if($tipo == 2){

    $header = str_replace('<li><a href="#">', '<li><a href="' . URL_BASE . 'index.php">', $header);
    $header = str_replace('<li><a href="#sobre">', '<li><a href="' . URL_BASE . 'index.php#sobre">', $header);
    $header = str_replace('<li><a href="#projetos">', '<li><a href="' . URL_BASE . 'index.php#projetos">', $header);
    $header = str_replace('<li><a href="#servicos">', '<li><a href="' . URL_BASE . 'index.php#servicos">', $header);
    $header = str_replace('<li><a href="#blog">', '<li><a href="' . URL_BASE . 'index.php#blog">', $header);
    $header = str_replace('<li><a href="#contato">', '<li><a href="' . URL_BASE . 'index.php#contato">', $header);
    
    $header = $header . '<!-- capa -->
          <div class="capa-secundaria">
            <div class="container">
              <div class="texto-capa">
                <h1>%PAGE-TITLE%</h1>
              </div><!-- texto-capa -->
            </div><!-- container -->
          </div><!-- capa -->

          <div id="content" class="content-blog">
            <div class="container">';
    
    $header = str_replace("%PAGE-TITLE%", $texto, $header);
  }else{
    $header = $header . '  <!-- capa -->
            <div class="capa">
              <div class="container">
                <div class="texto-capa">
                  <h1>Desenvolvendo Estratégias Inovadoras</h1>
                  <!--<h3>Buscando Resultados</h3>
                  <a href="#contato"><button class="btn btn-capa">Contato</button></a>-->
                </div><!-- texto-capa -->
              </div><!-- container -->
            </div><!-- capa -->';
  }
  
  echo $header;
}

function getLastThreePosts(){
  $conexao = open_wordpress_database();
  $query = "SELECT id, post_title, post_content, guid, post_status FROM wp_posts WHERE post_status = 'publish' ORDER BY id DESC LIMIT 3";
  
  $resultado = $conexao->query($query);
  
  $dados = $resultado->fetch_all(MYSQLI_ASSOC);
  
  close_database($conexao);
  
  return $dados;
}

function getIdProjeto($projeto){
  if($projeto == "Geotur"){
    return 1;
  }else if($projeto == "IF Portas Abertas"){
    return 2;
  }else if($projeto == "Pesquisa de Mercado"){
    return 3;
  }else if($projeto == "Eletro+"){
    return 4;
  }else if($projeto == "Circuito Empreenda Poços"){
    return 5;
  }
}

function getLastThreeProjects(){
  $conexao = open_database();
  $query = "SELECT * FROM projetos ORDER BY id DESC LIMIT 3";
  
  $resultado = $conexao->query($query);
  
  $dados = $resultado->fetch_all(MYSQLI_ASSOC);
  
  close_database($conexao);
  
  return $dados;
}

function getProjeto($projeto){
  $conexao = open_database();

  $id = getIdProjeto($projeto);

  $query = "SELECT * FROM projetos where id = " . $id;

  $resultado = $conexao->query($query);
  
  $dados = $resultado->fetch_all(MYSQLI_ASSOC);
  
  close_database($conexao);
  
  return $dados;
}

function getAllProjects(){
  $conexao = open_database();
  $query = "SELECT * FROM projetos ORDER BY id DESC";
  
  $resultado = $conexao->query($query);
  
  $dados = $resultado->fetch_all(MYSQLI_ASSOC);
  
  close_database($conexao);
  
  return $dados;
}