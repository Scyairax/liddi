<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.min.css">
    <!--- mio css--->
    <link rel="stylesheet" href="css/stile.css">
    <title>Cyairax Technology</title>
</head>

<body>
    <!-- navbar -->
    <?php
    $liActive1 = "active";
    $liActive2 = "";
    $liActive3 = "";
    include_once "components/navbar.php"; ?>
    <!---   end navbar   --->
    <!---   container   --->
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="delay1 carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://www.italiafruit.net/Public/Upload/News/Images/46587/frutta-verdura-4.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://www.meteoweb.eu/wp-content/uploads/2017/02/pesce-640x447.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://2.citynews-trevisotoday.stgy.ovh/~media/original-hi/38318609774681/pizza-3-2.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="delay1 carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://www.italiafruit.net/Public/Upload/News/Images/46587/frutta-verdura-4.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://www.meteoweb.eu/wp-content/uploads/2017/02/pesce-640x447.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-responsive" id="item-c" src="http://2.citynews-trevisotoday.stgy.ovh/~media/original-hi/38318609774681/pizza-3-2.jpg" alt="Responsive image">
                            <div class="carousel-caption d-none d-md-block"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---   end container   --->
        <hr>
        <!---   footer   --->
        <?php include_once "components/footer.php" ?>
        <!--  chiude il footer -->
    </div>
    <!---   end container   --->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="includes/jquery/dist/jquery.slim.min.js"></script>
    <script src="includes/popper.js/dist/popper.min.js"></script>
    <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/delay_carosello.js"></script>
</body>

</html> 