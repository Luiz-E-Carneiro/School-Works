var form = document.querySelector('form');
const verifyNumber = /[0-9]/g;
const verifyLetter = /[a-zA-Z]/g; 
const verifyEspecialCharacters = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

let inputName = document.getElementById('nome');
let inputPassord = document.getElementById('senha');
let inputLogin = document.getElementById('login');
let inputCPF = document.getElementById('cpf');
let spanCPF = document.querySelector('span');

var problemsArea = document.querySelector('.problems');

form.addEventListener('submit', function (e) {
    e.preventDefault();
    let problems = [];
    if(inputName.value.length < 3){
        problems.push('Nome precisa de, no mínimo, 3 caracteres');
        inputName.value = '';
        inputName.parentNode.classList.add('error');
    } else if(verifyEspecialCharacters.test(inputName.value)){
        problems.push('Nome não pode haver caracteres especiais');
        inputName.value = '';
        inputName.parentNode.classList.add('error');
        submit = false;
    }
    
    if(inputCPF.value.length != 11) {
        problems.push('CPF é composto por 11 dígitos');
        inputCPF.value = '';
        inputCPF.parentNode.classList.add('error');  
        submit = false;
    } else if(verifyLetter.test(inputCPF.value)) {
        problems.push('CPF é composto por apenas dígitos');
        inputCPF.value = '';
        inputCPF.parentNode.classList.add('error');    
        submit = false;
    }
    
    if(inputLogin.value.length < 3){
        problems.push('Login precisa de, no mínimo, 3 caracteres');
        inputLogin.value = '';
        inputLogin.parentNode.classList.add('error')
        submit = false;
    }
    
    if(inputPassord.value.length < 8){
        problems.push('Senha precisa de, no mínimo, 8 caracteres');
        inputPassord.value = '';
        inputPassord.parentNode.classList.add('error');
        submit = false;
    }
    console.log(problems);
    if(problems.length === 0) this.submit();
    else {
        let ul = document.createElement('ul');
        problems.forEach(p => {
            let li = document.createElement('li');
            li.innerText = p;
            ul.appendChild(li);
        });
        problemsArea.style.display = 'flex';
        problemsArea.appendChild(ul);
    }
});

inputCPF.addEventListener("focus", function() {
    spanCPF.style.opacity = "1";
});

inputCPF.addEventListener("blur", function() {
    spanCPF.style.opacity = "0";
});