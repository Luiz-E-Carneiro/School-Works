var form = document.querySelector('form');
const verifyNumber = /[0-9]/g;
const verifyLetter = /[a-zA-Z]/g; 
const verifyEspecialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

let inputName = document.getElementById('nome');
let inputPassord = document.getElementById('senha');
let inputLogin = document.getElementById('login');
let inputCPF = document.getElementById('cpf');

let spanCPF = document.querySelector('span')

form.addEventListener('submit', function (e) {
    e.preventDefault();
    let submit = true
    
    if(inputName.value.length < 3){
        alert('Nome precisa de, no mínimo, 3 caracteres');
        inputName.value = '';
        inputName.parentNode.classList.add('error');
    } else if(verifyEspecialCharacters.test(inputName.value)){
        alert('Nome não pode haver caracteres especiais');
        inputName.value = '';
        inputName.parentNode.classList.add('error');
        submit = false;
    }
    
    if(inputCPF.value.length != 11) {
        alert('CPF é composto por 11 dígitos');
        inputCPF.value = '';
        inputCPF.parentNode.classList.add('error');  
        submit = false;
    } else if(verifyLetter.test(inputCPF.value)) {
        alert('CPF é composto por apenas dígitos');
        inputCPF.value = '';
        inputCPF.parentNode.classList.add('error');    
        submit = false;
    }
    
    if(inputLogin.value.length < 3){
        alert('Login precisa de, no mínimo, 3 caracteres');
        inputLogin.value = '';
        inputLogin.parentNode.classList.add('error')
        submit = false;
    }
    
    if(inputPassord.value.length < 8){
        alert('Senha precisa de, no mínimo, 8 caracteres');
        inputPassord.value = '';
        inputPassord.parentNode.classList.add('error');
        submit = false;
    }

    submit && this.submit();
    
});

inputCPF.addEventListener("focus", function() {
    spanCPF.style.opacity = "1";
});

inputCPF.addEventListener("blur", function() {
    spanCPF.style.opacity = "0";
});
