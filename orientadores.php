<?php require_once 'config.php'; ?>		
<?php require_once 'funcoes.php'; ?>		
<?php require_once DBAPI; ?>


<?php includeHeader("Orientadores", 2) ?>	

<?php
	$orientadores[0]['titulo'] = "Alexandre Carvalho de Andrade";
	$orientadores[0]['texto'] = "Licenciado e Bacharel em Geografia (2001), Especialista em Geografia do Turismo (2003), Mestre em Geografia (2005) e Doutor em Geografia: Organização do Espaço (2014), cursados na UNESP – Campus de Rio Claro. Tem experiência em pesquisas e docência nas áreas de organização dos espaços urbanos e rurais, turismo, análise populacional e dinâmicas econômicas regionais. É professor do Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas (IFSULDEMINAS) – Campus de Poços de Caldas e coordenador do curso de Geografia desta referida instituição.";

	$orientadores[1]['titulo'] = "Allan Arantes Pereira";
	$orientadores[1]['texto'] = "Engenheiro Florestal, Mestre e Doutor em Ciências Florestais pela Universidade Federal de Lavras (UFLA), desenvolvendo parte da pesquisa de doutorado na Universidade de Lisboa / Centro de Estudos Florestais e no Instituto Nacional de Pesquisas Espaciais (INPE). Tem experiência profissional como Analista de Florestas e Biodiversidade (agosto/2005 - jul/2006) no projeto Inventário Florestal de Minas Gerais, realizado pela UFLA . Entre ago/2006 e dez/2010, exerceu a função de Analista Ambiental no Instituto Estadual de Florestas de Minas Gerais trabalhando no setor de incêndios florestais e no desenvolvimento de pesquisas em técnicas de sensoriamento remoto e geoprocessamento, como instrumento de política, planejamento e gestão ambiental do Governo do Estado de Minas Gerais. Em janeiro de 2011 ingressou na carreira de Professor EBTT pelo Instituto Federal de Ciência e Tecnologia do Sul de Minas,onde atua principalmente nos seguintes temas: geoprocessamento e sensoriamento remoto aplicado ao monitoramento da vegetação, aprendizagem de máquinas para classificação de áreas queimadas em imagens orbitais. ";

	$orientadores[2]['titulo'] = "Carlos Alberto Turati";
	$orientadores[2]['texto'] = "Possui graduação em Letras (Licenciatura Plena) pela Fundação de Ensino Octávio Bastos (2003), Mestrado em Linguística pela Universidade Federal de São Carlos (2012) e Doutorado em Linguística pela Universidade Federal de São Carlos (2016). Tem experiência na área de Linguística, atuando principalmente nos seguintes temas: gênero do discurso, discurso político, discurso citado, ideologia, notícia, fotojornalismo. Tem experiência docente principalmente nos seguintes temas: leitura e produção textual, gêneros de textos acadêmicos, análise linguística, filosofia da linguagem e enunciação. No Mestrado, desenvolveu pesquisa abordando o tema do discurso citado e da fotografia de imprensa como enunciado reproduzido (financiamento FAPESP). No Doutorado, desenvolveu pesquisa abordando os sentidos da pobreza na sociedade brasileira contemporânea a partir da análise do discurso político e midiático (financiamento FAPESP). Participa dos grupos de pesquisa GEGe (Grupo de Estudos dos Gêneros do Discurso) e LABOR (Laboratório de Estudos do Discurso). Foi professor do curso de Letras da Universidade do Estado de Minas Gerais – Campus Passos, em 2016. Atualmente, é professor do Instituto Federal Sul de Minas Gerais – Campus Poços de Caldas.";

	$orientadores[3]['titulo'] = "Cássio Henrique Garcia Costa";
	$orientadores[3]['texto'] = "Professor no Instituto Federal do Sul de Minas (IFSULDEMINAS) – Campus Poços de Caldas, doutor em Administração pela Universidade Federal de Lavras. Coordenador de projetos no Centro de Inteligência em Mercados (CIM-UFLA). Atua nas áreas de Economia, Controladoria e Finanças, Gestão de Riscos, Dinâmica e Gestão de Cadeias Produtivas e Estratégia Empresarial.";

	$orientadores[4]['titulo'] = "Maria Sirlene do Lago";
	$orientadores[4]['texto'] = "Bacharel em Administração, Economia e Direito, especialista em Docência para o Ensino Superior pelo Centro Universitário Fundação de Ensino Octávio Bastos. Experiência na área de Gestão de Pessoas e advocacia trabalhista, empresarial, tributária. Atualmente, é professora da Prefeitura Municipal de Poços de Caldas no Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas (IFSULDEMINAS) – Câmpus Poços de Caldas.";

	$orientadores[5]['titulo'] = "Marielle Rezende de Andrade";
	$orientadores[5]['texto'] = "Graduação em Engenharia Ambiental (2011) e mestrado em Engenharia de Energia (2016) pela Universidade Federal de Itajubá - UNIFEI. Durante o período acadêmico, desenvolveu trabalhos que deram origem a uma premiação internacional e um artigo científico. Desde 2012, atua nas áreas de gestão de projetos e equipes, comunicação social, administração de empresas e planejamento estratégico, além de desenvolver estudos técnicos de saneamento básico e consultorias ambientais em diversas áreas. Faz parte do Conselho Diretor e Técnico do Instituto Fernando Bonillo, ONG de atuação ambiental no Sul de MG, com sede em Pouso Alegre/MG.  Educadora e ambientalista, está sempre a disposição para buscar soluções e garantir um futuro melhor à nossa Mãe Natureza.";

	$orientadores[6]['titulo'] = "Rogério Coli da Cunha";
	$orientadores[6]['texto'] = "Bacharel e Licenciado em Geografia e Meio Ambiente (2006), Mestre em Engenharia da Energia (2012) e Especialista em Gestão de pessoas e Projetos  Sociais (2012). Possui experiências em projetos e docência na área de geoprocessamento, cartografia/topografia, gestão ambiental e gerenciamento de bacias hidrográficas, realizando diversos mapeamentos e caracterização do meio físico para pequenas centrais Hidrelétricas por meio de SIG. Atuou no instituto GAMA, sendo membro fundador e ex-presidente, viabilizando a responsabilidade socioambiental corporativa por meio das ferramentas do terceiro setor e renúncia fiscal. Atualmente, é professor efetivo do Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais (IFSULDEMINAS) – Campus Poços de Caldas.";

	$orientadores[7]['titulo'] = "Rony Mark da Silva";
	$orientadores[7]['texto'] = "Atualmente é Professor do CEFET-MG e do SENAC-MG. É Engenheiro Eletricista e Mestre em Eletrônica e Comunicações pela Universidade Estadual de Campinas (UNICAMP). Lecionou no curso de Engenharia Elétrica da PUC-MINAS por 6 anos em disciplinas relacionadas a Telecomunicações, Eletrônica e Circuitos Elétricos. É também Diretor da Mark Treinamento e Desenvolvimento Humano Ltda e Professor contratado no MBA do SENAC-MG na área de Liderança e Gestão Estratégica de Pessoas.";

	$orientadores[8]['titulo'] = "Sylvana Cardoso da Silva e Almeida";
	$orientadores[8]['texto'] = "Graduada em Administração pela Pontifícia Universidade Católica de Minas Gerais – Câmpus Poços de Caldas, especialista em Engenharia de Produção pelo Centro Universitário Internacional – UNINTER, aluna regular do programa de Mestrado em Desenvolvimento Sustentável e Qualidade de Vida no Centro Universitário de São João da Boa Vista – UNIFAE onde desenvolve pesquisa na área de Qualidade de Vida. Iniciou sua carreira docente como instrutora no SENAI Poços de Caldas, onde lecionou nos cursos Técnico em Alimentos e Aprendizagem Industrial de Laticínios.  Atualmente, é professora do Ensino Básico, Técnico e Tecnológico na área de Administração no Instituto Federal de Educação, Ciência e Tecnologia do Sul de Minas Gerais – Câmpus Poços de Caldas.";

	$orientadores[9]['titulo'] = "Thiago de Sousa Santos";
	$orientadores[9]['texto'] = "Thiago de Sousa Santos é formado em Administração pela Universidade Federal de São João Del Rei, Mestre em Administração pela Universidade Federal de Lavras, possui experiência em Gestão de Micro e pequenas empresas e também em consultoria, com atuação no SEBRAE-MG.  Iniciou a carreira docente na Unidade Integrada e Técnica de Ensino (UNITEN), atuando também na graduação em instituições como IFMG, PUC-MG, Faculdade Pitágoras e na Pós-graduação presencial e a distância da UFSJ e UFLA. Atualmente, é professor do Instituto Federal do Sul de Minas Gerais – Câmpus Poços de Caldas.";

	foreach($orientadores as $orientador){
		echo '
		<div class="row orientador">
			<div class="col-md-12">
				<div class="titulo-secundario">' . $orientador["titulo"] . '</div>
				<div class="texto-secundario">
					<p class="recuo">' . $orientador["texto"] . '</p>
				</div>	
			</div>
		</div>';
	}
?>


<?php include(FOOTER_TEMPLATE); ?>	