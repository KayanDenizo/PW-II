<?php 

require 'Aluno.class.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <section class="forms-section">
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form action="login_action.php" class="form form-login">
                    <fieldset>
                        <div class="input-block">
                            <label for="login-email">E-mail</label>
                            <input id="login-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Senha</label>
                            <input id="login-password" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login">Entrar</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form action="signup_action.php" class="form form-signup">
                    <fieldset>
                        <div class="input-block">
                            <label for="signup-email">E-mail</label>
                            <input id="signup-email" type="email" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password">Senha</label>
                            <input id="signup-password" type="password" required>
                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirme sua senha</label>
                            <input id="signup-password-confirm" type="password" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup">Continue</button>
                </form>
            </div>
        </div>
    </section>

    <script src="js/main.js"></script>
</body>

</html>