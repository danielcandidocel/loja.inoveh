$(function(){
    
    document.querySelector(".menuMobile").addEventListener("click", function(){
        if(document.querySelector(".menu nav ul").style.display == 'flex'){
            document.querySelector(".menu nav ul").style.display = 'none';
            document.getElementById("fundo").style.display = 'none';
        }else {
            document.querySelector(".menu nav ul").style.display = 'flex';
            document.getElementById("fundo").style.display = 'block';
        }
    });
    document.querySelector(".titulo-categoria").addEventListener("click", function(){
        if(document.querySelector(".menu nav ul").style.display == 'flex'){
            document.querySelector(".menu nav ul").style.display = 'none';
            document.getElementById("fundo").style.display = 'none';
        }else {
            document.querySelector(".menu nav ul").style.display = 'flex';
            document.getElementById("fundo").style.display = 'block';
        }
    });

});
