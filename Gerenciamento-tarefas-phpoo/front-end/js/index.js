let loginpPasswordInput=document.getElementById('loginpPasswordInput');
let eyeSpan=document.getElementById("passwordEye");
let eyeIcon=document.getElementById("eyeIcon");

eyeSpan.addEventListener("click", function(){
    if(loginpPasswordInput.getAttribute("type")==="password"){
        loginpPasswordInput.setAttribute("type", "text");
        eyeIcon.classList.remove("fa-solid", "fa-eye-slash");
        eyeIcon.classList.add("fa-solid", "fa-eye");
    }else{
        eyeIcon.classList.remove("fa-solid", "fa-eye");
        eyeIcon.classList.add("fa-solid", "fa-eye-slash");
        loginpPasswordInput.setAttribute("type", "password");
    }
});

