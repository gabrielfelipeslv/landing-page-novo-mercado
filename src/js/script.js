const body              = document.querySelector('body');
const duvidas           = document.querySelectorAll('#container-topicos .pergunta');
const containerPopUp    = document.querySelector('#container-pop-up');
const formularioPopUp   = document.querySelector('#pop-up-formulario');

const inputNome     = document.querySelector('#input-nome');
const inputEmail    = document.querySelector('#input-email');
const inputTelefone = document.querySelector('#input-telefone');

function calcularHeightDropdown(elemento){
    let perguntaAlvo = elemento.parentElement;
    if(perguntaAlvo.classList.contains('ativa')){
        elemento.nextElementSibling.style.height = `${elemento.nextElementSibling.firstElementChild.scrollHeight}px`;
    }
}

[inputNome, inputEmail, inputTelefone].forEach(function(x){
    x.addEventListener('keyup', function(){
        this.parentElement.classList.remove('input-invalido');
    });
})

function validarForm(){
    inputNome.value.length < 1 ?
        inputNome.parentElement.classList.add('input-invalido')
        :
        inputNome.parentElement.classList.remove('input-invalido');

    const regexEmail = /^\S+@\S+$/;
    inputEmail.value.length < 1 || !regexEmail.test(inputEmail.value) ?
        inputEmail.parentElement.classList.add('input-invalido')
        :
        inputEmail.parentElement.classList.remove('input-invalido');

    const regexTelefone = /^(?:(?:\+|00)?(55)\s?)?(?:\(?([1-9][0-9])\)?\s?)(?:((?:9\s?\d|[2-9])\d{3})\-?(\d{4}))$/;
    inputTelefone.value.length < 10 || !regexTelefone.test(inputTelefone.value) ?
        inputTelefone.parentElement.classList.add('input-invalido')
        :
        inputTelefone.parentElement.classList.remove('input-invalido');

    if(document.querySelectorAll('.input-invalido').length < 1){
        formularioPopUp.submit();
    }
}

duvidas.forEach(function(x){
    const duvida = x.parentElement;
    x.addEventListener('click', function(){
        if(duvida.classList.contains('ativa')){
            duvida.classList.remove('ativa');
            x.nextElementSibling.style.height = '0';
        }else{
            const duvidaAberta = document.querySelector('.duvida.ativa');
            if(duvidaAberta){
                duvidaAberta.classList.remove('ativa');
                duvidaAberta.querySelector('.resposta').style.height = '0';
            }
            duvida.classList.add('ativa');
            x.nextElementSibling.style.height = `${x.nextElementSibling.scrollHeight}px`;
        }
    });
    setTimeout(function(){
        calcularHeightDropdown(x);
    }, 1000);
});

window.addEventListener("resize", function(){
    duvidas.forEach(function(x){
        calcularHeightDropdown(x);
    });
}, true);

document.querySelectorAll('.btn-inscricao').forEach(function(x){
    x.addEventListener('click', function (){
        body.classList.add('sombra-total');
        containerPopUp.className = 'show';
    });
});

document.querySelector('#btn-continuar').addEventListener('click', function (){
    validarForm();
})

containerPopUp.addEventListener('click', function (e){
    if(!formularioPopUp.contains(e.target)){
        containerPopUp.className = '';
        body.classList.remove('sombra-total');
    }
})

formularioPopUp.addEventListener('submit', function (e) {
    e.preventDefault();
    validarForm();
});


