<?php require_once '../config.php'; ?>
<?php require_once '../funcoes.php'; ?>
<?php require_once DBAPI; ?>


<?php includeHeader("IF Portas Abertas", 2) ?>
<?php $db = open_database();
	$projeto = getProjeto("IF Portas Abertas");
?>

<?php

	echo '
	<div class="row projeto">
		<div class="col-md-12">
			<img src="' . URL_BASE . $projeto[0]["img_url"] . '" alt="' . $projeto[0]["titulo"] . '" class="img-responsive img-descricao-projeto">
			<div class="titulo-secundario">' . $projeto[0]["titulo"] . '</div>
			<div class="texto-secundario">
				<p class="recuo">' . $projeto[0]["descricao"] . '</p>
			</div>
		</div>
	</div>';

?>


<?php include(FOOTER_TEMPLATE); ?>
