<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <img src="{{ asset('assets/images/background.png') }}" alt="Imagem de Fundo">
    </div>

    <section class="texto">
        <h1><b>Desbloqueie</b> o  acesso <br>e deixe a  <b>música</b><br> tomar conta.</h1>
    </section>

    <section id="conteudo-view" class="login">
    <img class="logo" src="{{ asset('assets/images/logosynk.png') }}" alt="Synk Logo">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="campo">
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail ou usuário">
        </div>
        <div class="campo">
            <input id="password" type="password" name="password" required placeholder="Senha">
        </div>
        <div>
         <button id="login-button" type="submit">Entrar</button>

        </div>
        <div class="cadastro">
            <p>Não tem conta? <br><a href="{{ route('register') }}">Cadastre-se</a></p>
        </div>

    </form>
</section>
    <script>
        document.getElementById('login-button').addEventListener('click', function() {
            window.location.href = '/home';
        });
    </script>
</body>
</html>
