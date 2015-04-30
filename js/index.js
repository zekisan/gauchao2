function gerarPlacar(){
  $('input').each(function(){
    $(this).val(geraNumeroAleatorio(0,5));
  });
}

function geraNumeroAleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1));
}