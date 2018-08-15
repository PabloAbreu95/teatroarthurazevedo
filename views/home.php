<!-- Área do carousel -->
<section class="bgred container-fluid">
  <div class="row">
    <!-- Caroulsel -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="<?php echo BASE_URL;?>assets/images/2018.02.27-ID.494.IMG.jpg" alt="Primeiro slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<?php echo BASE_URL;?>assets/images/2018.04.27-not_joao.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 rounded" src="<?php echo BASE_URL;?>assets/images/2018.04.30-ID.497.IMG.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fim da área do carousel -->

<!-- Área dos espetaculos -->
<section class="container-fluid text-center">
  <h1>Espetáculos</h1>
  <p class="mt-4">Programação - Maio 2018</p>
  <div class="row">
    <div class="container">
      <div class="row mt-5">
        <?php for ($i = 1; $i <= 8; $i++): ;?>

          <div class="col-md-4 mb-5">
            <article class="card">
              <img class="card-img-top" src="<?php echo BASE_URL;?>assets/images/DQIILBWW4AEt8Eo.jpg" alt="Foto do evento">
              <div class="card-body text-left grad" >
                <p class="h4 font-weight-bold text-white">Nome do Evento </p>
              </div>
            </article>
          </div>
        <?php endfor;?>
      </div>
    </div>
  </div>
</section>


<!-- Fim da área dos espetáculos -->
