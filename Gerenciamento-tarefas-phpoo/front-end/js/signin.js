let signinPasswordInput=document.getElementById("signinPasswordInput");
let passwordConfirmationInput=document.getElementById("passwordConfirmationInput");
let signingFormWarnings=document.getElementById("signingFormWarnings");
let signinForm=document.getElementById("signinForm");


function inputChecker(e){
    if(signinPasswordInput.value.length < 8){
        signingFormWarnings.innerText="Senha deve conter no minimo 8 caracteres!";
        e.preventDefault();
        signinPasswordInput.value="";
        return
    }

    if(!/([!@#$%¨&*])/.test(signinPasswordInput.value)){
        signingFormWarnings.innerText="A senha deve conter no minimo um caracter especial, como: !, @, #, $, %, &!";
        e.preventDefault();
        signinPasswordInput.value="";
        return
    }

    if(!/([A-Z])/.test(signinPasswordInput.value)){
        signingFormWarnings.innerText="Senha deve conter no minimo uma letra maiuscula!";
        e.preventDefault();
        signinPasswordInput.value="";
        return
    }
}
/* 
function clearWarning(){
    if(!signingFormWarnings.innerText==""){
        signingFormWarnings.innerText=""
    }
}

signinPasswordInput.addEventListener("click",clearWarning) */
signinForm.addEventListener("submit",inputChecker);
