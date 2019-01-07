// Menu mobile, para fechar ao clicar
jQuery('#barra-navegacao').on('click', 'ul li a', function() {
	$('.menu-principal .in').collapse('hide');
});