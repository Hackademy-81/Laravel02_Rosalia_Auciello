<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisan Viaggi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Electrolize&family=Gabriela&family=Nova+Square&family=Orbitron:wght@400;600;800&family=Philosopher:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Artisan Viaggi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('chisiamo')}}">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <header>
        <section class="container-fluid vh-100 container-header d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center display-1 text-white">Benvenuti nel sito di Artisan Viaggi</h1>
                </div>
            </div>
        </section>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-around py-5 vh-100">
                <div class="col-12">
                    <h2 class="text-center display-3">
                        Le nostre Proposte
                    </h2>
                </div>
                @foreach($viaggi as $viaggio)
                <div class="col-12 col-md-3">
                    <div class="card">
                        <img src="{{$viaggio["img"]}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$viaggio["name"]}}</h5>
                          <p class="card-text">Notti: {{$viaggio["notti"]}}</p>
                          <p class="card-text">Costo: {{$viaggio["costo"]}}</p>
                          <a href="{{route('tourDescription', ['idTour'=>$viaggio['id']])}}" class="btn btn-primary">Descrizione</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
      

      
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>