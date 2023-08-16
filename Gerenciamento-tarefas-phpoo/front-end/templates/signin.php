<?php
include_once"partials/head.php"
?>
<body class="signin-body">
    <main>
        <div class="page-title">
            <h1>Bem-vindo!</h1>
        </div>
    
        <div class="signin-area">
            <p>Crie sua conta, de forma rapida e facil!
            </p>
    
            <div class="signin-form">
                <form id="signinForm" action="aaaa.php" method="POST">
                    <input type="text" id="nameInput" name="name" placeholder="Nome completo" required >

                    <input type="email" id="signinEmailInput" name="email" placeholder="E-mail" autocomplete="on" required>

                    <input type="password" id="signinPasswordInput" name="password" placeholder="Senha" autocomplete="on" required>

                    <input type="password" id="passwordConfirmationInput" name="passwordConfirmation" placeholder="Confirmar senha" required>

                    <div class="signin-form-warning" id="signingFormWarnings"></div>

                    <button class="submit-btn" id="submitBtn" type="submit">Enviar</button>
                </form>
            </div>

            <div class="login-btn">
                <p>Ja possui uma conta? Então faça o login! <a href="../../front-end/index.php" class="login-link">Acessar Conta</a></p>
            </div>
        </div>
    </main>
</body>
</html>