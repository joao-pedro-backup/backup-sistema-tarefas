<?php
include_once"templates/partials/head.php";
?>
<body class="index-body">
    <main>
        <div class="page-title">
            <h1>Bem-vindo, ao sistema!</h1>
        </div>
    
        <div class="login-area">
            <p>Faça Login</p>
    
            <div class="login-form">
                <form action="login.php" method="POST">
                    <input type="email" id="loginEmailInput" name="email" placeholder="E-mail" autocomplete="on" required >

                    <span class="password-eye" id="passwordEye"><i id="eyeIcon" class="fa-solid fa-eye-slash"></i></span>
                    <input type="password" id="loginpPasswordInput" name="password" placeholder="Senha" autocomplete="on" required>
                    
                    <div class="login-form-warning" id="loginFormWarnings"></div>
                    <button class="submit-btn" id="submitBtn" type="submit">Enviar</button>
                </form>
            </div>

            <div class="signin-btn">
                <p>Ainda não possui conta? Crie uma agora mesmo, rapido e facil! <a href="templates/signin.php" class="signin-link">Criar Conta</a></p>
            </div>
        </div>
    </main>
</body>
</html>