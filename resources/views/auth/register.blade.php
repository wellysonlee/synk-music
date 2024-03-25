<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>
<body>
    <div class="background">
        <img src="{{ asset('assets/images/background.png') }}" alt="Imagem de Fundo">
    </div>

    <section id="cadastro-view" class="cadastro">
    <img class="logo" src="{{ asset('assets/images/logosynk.png') }}" alt="Synk Logo">
        <section class="texto">
            <h1><b>Cadastre-se agora e mergulhe em <br>um mundo de sons incríveis!</h1>
        </section>
       
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="campo">
                <input id="name" type="text" name="name" value="{{ old('name') }}"  required placeholder= "Nome Completo">
            </div>
            
            <div class="campo">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="E-mail">
            </div>
            <div class="campo">
                <input id="cpf" type="text" name="cpf" value="{{ old('cpf') }}" required placeholder="CPF">
            </div>
            <div class="campo">
                <input id="telefone" type="tel" name="telefone" value="{{ old('telefone') }}" required placeholder="Telefone">
            </div>
            <div class="campo">
                <input id="password" type="password" name="password" required placeholder="Senha">
            </div>
            <div class="campo">
                <input id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirmar Senha">
            </div>
            <div class="button">
                <button type="submit">Cadastrar</button>
                
            </div>     
        </form> 
        <script>
        document.getElementById('register-button').addEventListener('click', function() {
            window.location.href = '/login';
        });
    </script>
</section>
</body>
