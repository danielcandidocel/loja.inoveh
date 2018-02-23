function calcularFrete() {
  
    var cep = $('.frete').find('form').find('input[name=cep]').val();
    var frete_qt = $('.frete_qt').find('form').find('input[name=qt]').val();
    var id_produto = $('input[name=id_produto]').val();
    
    $.ajax({                        
            url:BASE_URL+"produto/consultarFrete/",
            type:'POST',
            data:{
                id_produto:id_produto,
                cep:cep,
                frete_qt:frete_qt
            },
            dataType:'json',
            success:function(res) {
           
            if (res.erro != '0'){
                var html = '';
                html = '<span>Erro: Cep Incorreto ou Serviço não disponível. <strong>';
                $(".freteModal").html(html); 
            } else {
                var html = '';
                html = '<span>Valor do frete é <strong>R$ '+res.preco+'</strong>\n\
                </span><br/><span>Prazo Estimado para Entrega é de <strong>'+res.prazo+' dias</strong></span><br/>';
                $(".freteModal").html(html); 
            }
            $('#modalFrete').modal('show'); 

            },
            error:function(){
                alert('ERRO aqui');
            }
            
         });
 }
function fechar_modalCep() {
     $('#modalFrete').modal('hide');
 }


