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
 
 function addCart(id) {
     $.ajax({                        
            url:BASE_URL+"produto/getProdutoCart/",
            type:'POST',
            data:{
                id:id,                
            },
            dataType:'json',
            success:function(res) {
               
                var html = '';
                html = '<div class="addCartImage">\n\
                <img src="'+BASE_URL+'/assets/images/produtos/'+res.imagem+'" alt=""/></div>\n\
                <div class="description">'+res.nome+'</div>';
                $(".infomodal").html(html); 
                
                $('input[name=id_produto]').val(res.id); 
                $('#modalAddCart').modal('show'); 

            },
            error:function(){
                alert('ERRO aqui');
            }
            
         });
 }
 function fechar_modalAddCart() {
     $('#modalAddCart').modal('hide'); 
 }


