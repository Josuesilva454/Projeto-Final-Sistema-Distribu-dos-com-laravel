
     @extends("layout")
     @section("conteudo")
     <link rel="stylesheet" href=" /resources/app.css">
     
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<footer class="footer">
        <h2> Melhores Preços </h2>
    </footer>
         @include("produtos", ['$lista' => $lista])
         @endsection
 