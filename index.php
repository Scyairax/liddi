<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.min.css">
    <!--- mio css--->
    <link rel="stylesheet" href="css/stile.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Chi siamo<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">I Nostri Partner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contattaci</a>
      </li>
    </ul>
  </div>
</nav>
<!---         end nav                        --->
    <div class="container">
        <div class="row">
        <div class="carousel slide carosello1" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
    </div>
  </div>
</div>

<div class="carousel slide carosello2" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
    </div>
  </div>
</div>
        </div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="includes/jquery/dist/jquery.slim.min.js"></script>
    <script src="includes/popper.js/dist/popper.min.js"></script>
    <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function () {
    $('.carosello1').carousel({
        interval: 2000
    });
    $(document).ready(function () {
    $('.carosello2').carousel({
        interval: 1500
    });

  
</script>   
</body>
</html>
