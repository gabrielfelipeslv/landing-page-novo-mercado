document.querySelectorAll('#container-topicos .pergunta').forEach(function(x){
    const duvida = x.parentElement;
    x.addEventListener('click', function(){
        if(duvida.classList.contains('ativa')){
            duvida.classList.remove('ativa');
            x.nextElementSibling.style.height = '0';
        }else{
            duvida.classList.add('ativa');
            x.nextElementSibling.style.height = `${x.nextElementSibling.scrollHeight + 16}px`;
        }
    });
    setTimeout(function(){
        if(duvida.classList.contains('ativa')){
            x.nextElementSibling.style.height = `${x.nextElementSibling.scrollHeight}px`;
        }else{
            x.nextElementSibling.style.height = '0';
        }
    }, 1000);
});