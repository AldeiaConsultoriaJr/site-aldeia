<?php require_once 'config.php'; ?>
<?php require_once 'funcoes.php'; ?>
<?php require_once DBAPI; ?>


<?php includeHeader("Null", 1) ?>
<?php
	$db = open_database();
	$posts = getLastThreePosts();
	$projetos = getLastThreeProjects();
?>


	<!-- Sobre nós -->
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titulo-secao">Sobre Nós</div>
					<div class="subtitulo-secao">Como trabalhamos e quem somos</div>
				</div>
			</div>
			<div class="row espaco">
				<div class="col-md-4">
					<div class="box-sobre">
						<div class="titulo-box">MISSÃO</div>
						<div class="line-box"></div>
						<div class="texto-box">
						Prestar consultoria em diversas áreas com foco na excelência dos serviços prestados e satisfação dos clientes. Impactar a sociedade, cultivar o espírito empreendedor e desenvolver seus colaboradores por meio de capacitação, projetos e gestão.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-sobre">
						<span class="titulo-box">VALORES</span>
						<div class="line-box"></div>
						<div class="texto-box">
						Sinergia, comprometimento, espírito de equipe, ética, responsabilidade socioambiental, transparência, pró-atividade, inovação, profissionalismo.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-sobre">
						<span class="titulo-box">VISÃO</span>
						<div class="line-box"></div>
						<div class="texto-box">
						Tornar-se referência em serviços de consultoria empresarial com credibilidade e profissionalismo, sendo o principal mecanismo de integração mercado instituição até 2021.
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Sobre nós -->

	<section id="projetos">
		<div class="container">
			<div class="row cabecalho-secao">
				<div class="col-md-12">
					<a href="/projetos"><div class="titulo-secao">Projetos</div>
					<div class="subtitulo-secao">Clique para ver todos os nossos Projetos</div></a>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-md-4">
				<a href="<?= $projetos[0]['link_projeto'] ?>">
				<div class="img-projeto">
					<img class="img-responsive" src="<?= $projetos[0]['img_url']; ?>" alt="<?= $projetos[0]['titulo']; ?>">
				</div>
				<div class="descricao-projeto">
					<div class="titulo-projeto"><?= $projetos[0]['titulo']; ?></div>
				</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="<?= $projetos[1]['link_projeto'] ?>">
				<div class="img-projeto">
					<img class="img-responsive" src="<?= $projetos[1]['img_url']; ?>" alt="<?= $projetos[1]['titulo']; ?>">
				</div>
				<div class="descricao-projeto">
					<div class="titulo-projeto"><?= $projetos[1]['titulo']; ?></div>
				</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="<?= $projetos[2]['link_projeto'] ?>">
				<div class="img-projeto">
					<img class="img-responsive" src="<?= $projetos[2]['img_url']; ?>" alt="<?= $projetos[2]['titulo']; ?>">
				</div>
				<div class="descricao-projeto">
					<div class="titulo-projeto"><?= $projetos[2]['titulo']; ?></div>
				</div>
				</a>
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<div class="row cabecalho-secao">
				<div class="col-md-12">
					<div class="titulo-secao">Serviços Oferecidos</div>
					<div class="subtitulo-secao">Veja as soluções que oferecemos</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="servico servico-engenharia">
						<i class="fa fa-desktop icone-servico" aria-hidden="true"></i>
						<span class="titulo-servico">&nbsp;&nbsp;ENGENHARIA DE COMPUTAÇÃO</span>
						<ul class="lista-servicos">
							<li>-&nbsp;&nbsp;Montagem e Manutenção de Eletrônicos em Geral</li>
							<li>-&nbsp;&nbsp;Projeto e implantação de Sistemas Eletrônicos</li>
							<li>-&nbsp;&nbsp;Desenvolvimento de Websites e Aplicativos</li>
							<li>-&nbsp;&nbsp;Projeto e Execução de Instalações Elétricas</li>
							<li>-&nbsp;&nbsp;Projeto e Execução de Redes de Computadores</li>
							<li>-&nbsp;&nbsp;Projetos de Automação Industrial e Agropecuária</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="servico">
						<i class="fa fa-briefcase icone-servico" aria-hidden="true"></i>
						<span class="titulo-servico">&nbsp;&nbsp;GESTÃO COMERCIAL</span>
						<ul class="lista-servicos">
							<li>-&nbsp;&nbsp;Marketing</li>
							<li>-&nbsp;&nbsp;Gestão de Projetos</li>
							<li>-&nbsp;&nbsp;Análise de Mercado</li>
							<li>-&nbsp;&nbsp;Assessoria Fiscal e Tributária</li>
							<li>-&nbsp;&nbsp;Assessoria Financeira e RH</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="servico">
						<i class="fa fa-globe icone-servico" aria-hidden="true"></i>
						<span class="titulo-servico">&nbsp;&nbsp;BIOLOGIA, GESTÃO AMBIENTAL E GEOGRAFIA</span>
						<ul class="lista-servicos">
							<li>-&nbsp;&nbsp;Sistema de Gestão Ambiental (SGA)</li>
							<li>-&nbsp;&nbsp;Geoprocessamento e Sensoriamento Remoto</li>
							<li>-&nbsp;&nbsp;Gerenciamento de Resíduos Sólidos</li>
							<li>-&nbsp;&nbsp;Recuperação de Áreas Degradadas</li>
							<li>-&nbsp;&nbsp;Educação e Sensibilização Ambiental</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="atualizacoes">
		<div class="container">
			<div class="row cabecalho-secao">
				<div class="col-md-12">
					<div class="titulo-secao">Atualizações</div>
					<div class="subtitulo-secao">Inscreva-se e fique por dentro</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form class="form-atualizacoes" method="post" action="processa-newsletter.php">
						<label for="email-atualizacoes" class="label-input hidden-xs">EMAIL</label>
						<input type="email" class="input" id="email-atualizacoes" name="email-atualizacoes" placeholder="Insira seu email aqui">
						<input type="submit" class="btn btn-atualizacoes" value="Assinar">
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="contato">
		<div class="container">
			<div class="row cabecalho-secao">
				<div class="col-md-12">
					<div class="titulo-secao">Contato</div>
					<div class="subtitulo-secao">Deseja um orçamento? Tem alguma dúvida? Nos mande uma mensagem!</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contato-area pagination-centered">
						<form class="form-horizontal" method="post" action="processa-contato.php">
							<div class="form-group">
								<label for="nome" class="col-sm-2 control-label">NOME</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">EMAIL</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="assunto" class="col-sm-2 control-label">ASSUNTO</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
								</div>
							</div>
							<div class="form-group">
								<label for="mensagem" class="col-sm-2 control-label">MENSAGEM</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10 text-center">
									<input type="submit" class="btn">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php include(FOOTER_TEMPLATE); ?>
