$(function(){
//  Funcçoes de mudança de quantidade do carrinho no produto  
$('.addtocartform button').on('click', function(e){
    e.preventDefault();
       
    var qt = parseInt($('.addtocart_qt').val());
    var action = $(this).attr('data-action');
       
       if(action == 'decrease') {
           if(qt-1 >= 1) {
               qt = qt - 1;
           }
       } else  if(action == 'increase') {
                if(qt+1 <= 10) {
               qt = qt + 1;
           }
        }
        
    $('.addtocart_qt').val(qt);//muda o valor visual da quantidade
    $('input[name=qt_produto]').val(qt);//muda o campo input para o envio do formulario
  
});

$('.qt input[id="ok"]').on('click', function(e){
    var qt = parseInt($('.addtocart_qt').val());
    $('input[name=frete_qt]').val(qt);
});

//Ação de clique para trocar a foto do produto
$('.photo-item').on('click', function(){
    var url = $(this).find('img').attr('src');
    $('.mainphoto').find('img').attr('src', url);
});
});
window.onload = function() {
    var f = $('.calculo-frete').find('input[id=freteFinalizar]').val();
    var frete = parseFloat(f.replace(",", "."));
    var frete1 = frete.toFixed(2).replace('.',',');
   
    var t = $('.total-produtos').find('input[id=valorCompra]').val();
    var valor = parseFloat(t.replace(",", "."));
    
    if(frete < 0) {
        var frete = 0;
        var totalCompra = valor;
    } else {
        var total = frete + valor;
        var totalCompra = total.toFixed(2).replace('.',',');
        
    }
    var html = '';
        html = 'R$ '+frete1;
        $("#freteTotal").html(html); 
    var total = '';
        total = 'RS '+totalCompra;
        $("#totalCompra").html(total);
    
    $('input[name=finalizarFrete]').val(frete1);
    $('input[name=finalizarTotal]').val(totalCompra);
}
