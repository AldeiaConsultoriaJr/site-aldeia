<?php require_once '../config.php'; ?>		
<?php require_once '../funcoes.php'; ?>		
<?php require_once DBAPI; ?>


<?php includeHeader("Projetos", 2) ?>	
<?php $db = open_database(); 
	$projetos = getAllProjects();
?>

<?php
	foreach($projetos as $projeto){
		echo '
		<div class="row projeto">
			<div class="col-md-12">
				<img src="/' . $projeto["img_url"] . '" alt="' . $projeto["titulo"] . '" class="img-responsive img-descricao-projeto">
				<a href="' . $projeto["link_projeto"] .'"><div class="titulo-secundario">' . $projeto["titulo"] . '</div></a>
				<div class="texto-secundario">
					<p class="recuo">' . $projeto["descricao"] . '</p>
				</div>	
			</div>
		</div>';
	}
?>


<?php include(FOOTER_TEMPLATE); ?>	