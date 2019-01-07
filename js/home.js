// Clique no menu para descer para seção com animação suave
var menu_principal = $("#barra-navegacao ul li"),
tamanho_menu_principal = 80;

// offset
menu_principal.click(function(e){  
    // pega os links
    var href = $(this).children().attr("href");
    // divide a string presente nos links
    var temp = href.split('#');
    // deixa apenas a div alvo, para encontrar o offset certo
    var href = "#" + temp[1];
    // distância do offset
    if(href == "#"){
        var offset = 0;
    }else{
        var offset = $(href).offset().top-tamanho_menu_principal;
    }

    jQuery('html, body').stop().animate({
        scrollTop: offset
    }, 1500)
    e.preventDefault();
    
});


// Cadastra email ou mensagem no bd e retorna para o usuário se tudo ocorreu bem
var frm = $('.form-atualizacoes');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('Inscrição realizada com sucesso!');
            },
            error: function (data) {
                alert('Ops! Parece que ocorreu um erro');
            },
        });
    });

var frm2 = $('.form-horizontal');

    frm2.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm2.attr('method'),
            url: frm2.attr('action'),
            data: frm2.serialize(),
            success: function (data) {
                alert('Email enviado com sucesso!');
            },
            error: function (data) {
                alert('Ops! Parece que ocorreu um erro');
            },
        });
    });