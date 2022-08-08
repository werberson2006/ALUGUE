const email = document.getElementById('email');
const senha = document.getElementById('senha');
const senha2 = document.getElementById('senha2');
const nome = document.getElementById('nome');

//Solicita validação a cada alteração na entrada
email.addEventListener('input', function () {validate(email)});
senha.addEventListener('input', function () {validate(senha)});
senha2.addEventListener('input', function () {validate(senha2)});
nome.addEventListener('input', function () {validate(nome)});

function validate(item){
    item.setCustomValidity('');
    item.checkValidity();

    if(item == senha2) {
        if(item.value === senha.value) item.setCustomValidity('');
        else item.setCustomValidity("As senhas digitadas não são iguais. Verifique e tente novamente!");
    }

    if(item == senha && item == senha2) {
        if(item.value > 6) item.setCustomValidity('');
        else item.setCustomValidity("As senhas devem conter 6 caracteres ou mais.")
    }
}