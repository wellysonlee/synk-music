
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/artist.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
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
            <div class="apresentacao col-md-6">
                <h1>Você selecionou <br><b>Ariana Grande</b></h1>
                <img src="{{ asset('assets/images/ariana.jpg') }}" class="img-artist" alt="Ariana Grande">
            </div>
            <div class="conteudo col-md-6">
                <h4>Explore a coleção completa de álbuns deste artista: </h4>
                <!-- Aqui começam os cards dos álbuns -->
                <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/fav.png') }}" class="card-img-top" alt="Favoritas de Ariana Grande">
                        <div class="card-body">
                            <h6 class="card-title">Favoritas de <br>Ariana Grande</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/yt.jpg') }}" class="card-img-top" alt="Yours Trully">
                        <div class="card-body">
                            <h6 class="card-title">Yours Trully</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/me.jpg') }}" class="card-img-top" alt="My Everything">
                        <div class="card-body">
                            <h6 class="card-title">My Everything</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/dw.png') }}" class="card-img-top" alt="Dangerous Woman">
                        <div class="card-body">
                            <h6 class="card-title">Dangerous Woman</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda linha de cards -->
            <div class="row">
                <!-- Adicione mais cards aqui -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/swt.jpg') }}" class="card-img-top" alt="Sweetener">
                        <div class="card-body">
                            <h6 class="card-title">Sweetener</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/tun.jpg') }}" class="card-img-top" alt="Thank U, Next">
                        <div class="card-body">
                            <h6 class="card-title">Thank U, Next</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/pos.png') }}" class="card-img-top" alt="Positions">
                        <div class="card-body">
                            <h6 class="card-title">Positions</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/es.jpg') }}" class="card-img-top" alt="Eternal Sunshine">
                        <div class="card-body">
                            <h6 class="card-title">Eternal Sunshine</h6>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

