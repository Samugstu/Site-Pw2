  <style>
    body {
      background-color: black;
      margin: 0;
      padding: 0;
    }

    .carousel-item img {
      object-fit: cover;
      object-position: top center;
      height: 75vh;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      text-align: center;
    }
  </style>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="..\visual\imgs\lucianob.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Gesto de Luciano faz gambazada ir ao delirio</h5>
            <p>Atacante chutou a bandeira dos pobres da ZL e ficaram todos bravinhos</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="..\visual\imgs\cdb.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>A Copa do Brasil chegou de vez! calma</h5>
            <p>São Paulo pela primeira vez levanta o titulo da Copa do Brasil!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="..\visual\imgs\callerig.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Calleri passa por cirurgia na argentina</h5>
            <p>O atacante argentino operou o joelho nessa manhã e só volta no ano que vem</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>


