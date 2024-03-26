<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<<body>
    <header>
        <img src="{{ asset('assets/images/logosynk.png') }}" alt="logo" class="logo">
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-search"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-cog"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-heart"></i></a></li>
                </ul>
            </nav>
            <main class="col">
                <h1><b>Ouça.</b> Explore. <b>Sinta.</b> <br> Bem-vindo ao seu novo espaço musical.</h1>
                <h4>Escolha o <b>artista</b> que você quer ouvir:</h4>
            <!-- Aqui começam os cards dos artistas -->
            <div class="row d-flex align-items-stretch">
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/ariana.jpg') }}" class="card-img-top" alt="Ariana Grande">
                        <div class="card-body">
                            <h6 class="card-title">Ariana Grande</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/theweeknd.jpg') }}" class="card-img-top" alt="The Weeknd">
                        <div class="card-body">
                            <h6 class="card-title">The Weeknd</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/taylor.jpg') }}" class="card-img-top" alt="Taylor Swift">
                        <div class="card-body">
                            <h6 class="card-title">Taylor Swift</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/troye.jpg') }}" class="card-img-top" alt="Troye Sivan">
                        <div class="card-body">
                            <h6 class="card-title">Troye Sivan</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/dua.jpg') }}" class="card-img-top" alt="Dua Lipa">
                        <div class="card-body">
                            <h6 class="card-title">Dua Lipa</h6>
                        </div>
                    </div>
                </div>
            </div>
                <!--<div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/imagine.jpg') }}" class="card-img-top" alt="Imagine Dragons">
                        <div class="card-body">
                            <h6 class="card-title">Imagine Dragons</h6>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row d-flex align-items-stretch">
            <!--<div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/riha nna.jpg') }}" class="card-img-top" alt="Rihanna">
                        <div class="card-body">
                            <h6 class="card-title">Rihanna</h6>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/edd.jpg') }}" class="card-img-top" alt="Ed Sheeran">
                        <div class="card-body">
                            <h6 class="card-title">Ed Sheeran</h6>
                        </div>
                    </div>
                </div>  
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/doja.jpg') }}" class="card-img-top" alt="Doja Cat">
                        <div class="card-body">
                            <h6 class="card-title">Doja Cat</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/malone.jpg') }}" class="card-img-top" alt="Post Malone">
                        <div class="card-body">
                            <h6 class="card-title">Post Malone</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/billie.jpg') }}" class="card-img-top" alt="Billie Eilish">
                        <div class="card-body">
                            <h6 class="card-title">Billie Eilish</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/justin.jpg') }}" class="card-img-top" alt="Justin Bieber">
                        <div class="card-body">
                            <h6 class="card-title">Justin Bieber</h6>
                        </div>
                    </div>
                </div>
                <!-- Adicione mais colunas com cards aqui -->
            </div>
            <button class="btn-explore" onclick="location.href='/mais-artistas'">>>> <br> mais</button>
        </div>

    </main>
</body>
</html>
