<?php
session_start();
include_once ("header.php");
include_once ("navbar.php");
include_once ("sidebar.php");
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Index</a>
  </li>
  <li class="breadcrumb-item active">Halaman Utama</li>
</ol>
<!-- Carousel-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="la.jpg" alt="losangeles">
      <div class="carousel-caption d-none d-md-block">
        <h3>We Love You</h3>
        <p>Los Angeles</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="chicago">
      <div class="carousel-caption d-none d-md-block">
        <h3>We Love You</h3>
        <p>Chicago</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="newyork">
      <div class="carousel-caption d-none d-md-block">
        <h3>We Love You</h3>
        <p>New York</p>
      </div>
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
<!-- /.Carousel -->
<?php 
include_once ("footer.php");
include_once ("defaultfunction.php");
?>