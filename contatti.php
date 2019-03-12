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

    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <?php 
    $liActive1 = "";
    $liActive2 = "";
    $liActive3 = "active";
    include_once "components/navbar.php"; ?>
    <!---   end navbar   --->
    <!---   container   --->
    <div class="container">
        <hr>

        <!-- BREADCRUMBS -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Come trovarci

                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home\ </a></li>
                    <li class="active"> Contatti</li>
                </ol>
            </div>
        </div>

        <!-- PRIMA RIGA -->
        <div class="row">
            <!-- MAPPA -->
            <div class="col-md-8">
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- CONTATTI -->
            <div class="col-md-4">
                <h3>La nostra Sede</h3>
                <p>3481 Melrose Place<br>Beverly Hills, CA 90210<br></p>
                <hr>
                <p>
                    <i class="fa fa-phone"></i>(123) 456-7890
                </p>
                <p>
                    <i class="far fa-envelope-open"></i>Email <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p>
                    <i class="fa fa-clock-o"></i><abbr title="Hours">orario di lavoro</abbr>: lunedi - venerdi: 9:00 - 17:00 <br> sabato : 10:00 - 12:00
                </p>
                <h3>Seguici su</h3>
                <ul class="list-unstyled inline">
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- FORM -->
        <div class="row">
            <div class="col-md-8">
                <h3>Lascia un messaggio, ti ricontatteremo !</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome&Cognome:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefono:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button onclick="myFunction()" class="btn btn-primary">Invia</button>
                    <p id="check"></p>
                </form>
            </div>

        </div>

        <hr>

        <?php include_once "components/footer.php" ?>

    </div>





    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="includes/jquery/dist/jquery.slim.min.js"></script>
    <script src="includes/popper.js/dist/popper.min.js"></script>
    <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html> 