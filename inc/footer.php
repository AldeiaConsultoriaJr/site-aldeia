			
		</div> <!-- Container -->
	</div> <!-- Content -->	
	<footer id="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-6">
					<div class="titulo-rodape">Mais sobre a Aldeia</div>
					<ul class="menu-rodape list-unstyled">
						<li><a href="<?php URL_BASE ?>projetos">Projetos</a></li>
						<li><a href="<?php URL_BASE ?>orientadores.php">Orientadores</a></li>
						<li><a href="<?php URL_BASE ?>blog/">Blog</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 margem">
					<div class="titulo-rodape">Localização</div>
					<div class="localizacao-rodape">
						IFSULDEMINAS - Campus Poços de Caldas
						Avenida Dirce Pereira Rosa, 300, Jardim Esperança
					</div>
				</div>
				<div class="col-md-7 col-sm-6">
					<div class="fb-page" data-href="https://www.facebook.com/aldeiajunior/" data-tabs="timeline" data-height="150" data-width="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/aldeiajunior/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aldeiajunior/">Aldeia Consultoria Júnior</a></blockquote></div>
				</div>
			</div>
		</div>
	</footer>
	
	<section id="creditos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="texto-creditos">© Aldeia Consultoria Júnior. Desenvolvido por Rodrigo Araújo Marinho Franco</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- JS Base de todas as páginas -->
    <script src="js/base.js"></script>

    <?php
    	$pagina = basename($_SERVER['PHP_SELF'],'.php'); 
    	if($pagina == "index"){
    		echo "<!-- JS Página Home -->";
    		echo "<script src='js/home.js'></script>";
    	}
    ?>
</body>
</html>
