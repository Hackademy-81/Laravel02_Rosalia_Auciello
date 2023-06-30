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
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route("welcome")}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route("chisiamo")}}">Chi Siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route("servizi")}}">Servizi</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="container">
        <div class="row justify-content-around align-items-center">
          <div class="col-12">
            <h2 class="text-center display-2 py-5">{{$dettagliohotel}}</h2>
          </div>
          <div class="col-12 col-md-6">
            <img src="https://picsum.photos/700" class="img-fluid" alt="">
          </div>
          <div class="col-12 col-md-6">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium molestiae nemo veritatis, quae blanditiis animi recusandae cumque eveniet ullam dicta modi aperiam optio quos inventore earum assumenda nam laborum impedit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit debitis, illum mollitia tenetur rerum quia ab suscipit fuga facere, atque dolor adipisci assumenda culpa vitae exercitationem illo! Sit, expedita veniam?</p>
          </div>
        
        </div>
      </section>

      
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>