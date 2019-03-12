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
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/carosello.php" ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php include "components/carosello.php" ?>
                </div>
            </div>
        </div>
        <!---   end content   --->
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