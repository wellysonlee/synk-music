<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>

<body>
    <header>
        <img src="{{ asset('assets/images/logosynk.png') }}" alt="logo" class="logo">
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Coluna para a navegação -->
            <nav class="col-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-search"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-cog"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-heart"></i></a></li>
                </ul>
            </nav>
            <!-- Div para o conteúdo -->
            <div class="col-md-10">
                <!-- Coluna para o texto -->
                <div class="row mb-5">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/images/es.jpg') }}" class="img-album" alt="Eternal Sushine">
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="apresentacao">
                            <h1>Eternal Sunshine</h1>
                            <h5>ÁLBUM • 2024</h5>
                            <div class="botoes">
                                <button class="btn btn-outline-custom" title="Clique para reproduzir"><i class="fas fa-play"></i></button>
                                <button class="btn btn-outline-custom" title="Adicionar aos favoritos"><i class="fas fa-heart"></i> </button>
                                <button class="btn btn-outline-custom" title="Reproduzir aleatoriamente"><i class="fas fa-random"></i> </button>
                            </div>
                            <div class="artist-profile">
                                <img src="{{ asset('assets/images/ariana.jpg') }}" class="img-artist" alt="Eternal Sushine">
                                <h6> • Ariana Grande</h6>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Lista de músicas -->
                <div class="row mb-3">
                    <div class="col-md-1">#</div>
                    <div class="col-md-10">Título</div>
                    <div class="col-md-1">Duração</div>
                </div>
                
                <div class="row mb-0">
                    <div class="col-md-1">1</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">intro (end of the world)</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">1:32</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">2</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">bye</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:44</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">3</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">don't wanna break up again</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:54</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">4</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Saturn Returns Interlude</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">0:42</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">5</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">eternal sunshine</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">3:30</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">6</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">supernatural (with Troye Sivan)</h5>
                                <p class="artist-name">Ariana Grande, Troye Sivan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:43</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">7</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">true story</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:43</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">8</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">the boy is mine</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:53</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">9</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">yes, and?</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">3:34</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">10</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">we can't be friends (wait for your love)</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">3:48</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">11</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">i wish i hated you</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:33</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1">12</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">imperfect for you</h5>
                                <p class="artist-name">Ariana Grande</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">3:02</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-1 ">13</div> <!-- Espaço para o número -->
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">ordinary things (feat. Nonna)</h5>
                                <p class="artist-name">Ariana Grande, Nonna</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title duracao">2:48</h5>
                            </div>
                        </div>
                    </div>
                </div>


<!-- Adicione mais linhas conforme necessário para mais músicas -->

</div>
</div>
</div>
</body>
</html>
