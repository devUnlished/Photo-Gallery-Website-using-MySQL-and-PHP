<!DOCTYPE html>
<html lang="en">
<head>
    <title>PhotoGallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PhotoGallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#acrchitecture">Architecture</a>
          <a class="dropdown-item" href="#travel">Travel</a>
          <a class="dropdown-item" href="#food">Food</a>
          <a class="dropdown-item" href="#cars">Cars</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/Slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>Breath taking Experience.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/Slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>Nature at it's best.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Images/Slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>The only way to live is to bond with nature.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h3 class="text-center">Nature</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Nature1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Nature2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Nature3.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="architecuture">
<section class="my-4">
    <div class="py-4">
        <h3 class="text-center">Architecture</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Architecture1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Architecture2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Architecture3.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="travel">
<section class="my-4">
    <div class="py-4">
        <h3 class="text-center">Travel</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Travel1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Travel2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Travel3.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="food">
<section class="my-4">
    <div class="py-4">
        <h3 class="text-center">French Food</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/French1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/French2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/French3.jpg" class="img-fluid pb-3">
    </div>
    </div>

    <div class="py-4">
        <h3 class="text-center">Italian Food</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Itralian1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Italian2.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Italian3.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="cars">
<section class="my-4">
    <div class="py-4">
        <h3 class="text-center">Cars</h3>
    </div>
    <div class="contain-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Car1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <img src="Images/Car4.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="Images/Car3.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
    <form action="about.php" method="post">
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>
</a>

<a id="about">
    <section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About Us</h2>
        </div>
        <div class="container-fluid">
            <h3 class="text-center">Tysen Mutelembi</h3>
            <p class="text-center">I am a passionate photographer who's passionate about nature, architectutre and travel.</p>
        </div>
</section>
</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>