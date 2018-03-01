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
    
  
};