@extends('template')
    
@section('lol')

<div class="container-fluid">
  <div id="demo" class="carousel slide" data-ride="carousel">


    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://assets.mubicdn.net/images/film/228/image-w1280.jpg?1610998586" alt="d'arc">
        <div class="carousel-caption text-warning">
          <h3>A Paixão de Joana D'arc</h3>
          <p>Carl Theodor Dreyer, 1928</p>
        </div>
    </div>
      <div class="carousel-item">
        <img src="https://a.ltrbxd.com/resized/sm/upload/wp/57/y1/l8/strike-1200-1200-675-675-crop-000000.jpg?k=9fe11fe6d9" alt="strike">
        <div class="carousel-caption text-warning">
          <h3>A Greve</h3>
          <p>Serguei Eisenstein, 1925</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://aventurasnahistoria.uol.com.br/media/_versions/entretenimento/nosferatu_2_widelg.jpg" alt="nosferlouco" >
        <div class="carousel-caption text-warning">
            <h3>Nosferatu</h3>
            <p>F. W. Murnau, 1922</p>
        </div>
    </div>
    </div>
    
 
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
    
    
  
@endsection
