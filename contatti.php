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
  <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <a class="navbar-brand" href="#" id="name_agency"><i class="fas fa-user-tie fa-2x"></i>   Liddi&Co.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="nav-item">
        <a class="nav-link" href="index.php">| <i class="fas fa-apple-alt"></i>  Chi siamo |<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="partner.php">| <i class="fas fa-hamburger"></i> I Nostri Partner |</a>
      </li>

      <li class="nav-item  active">
        <a class="nav-link" href="contatti.php">| <i class="fas fa-utensils"></i> Contattaci |</a>
      </li>

    </ul>
    <img src="https://via.placeholder.com/300X80/FF0000/FFFFFF?Text=Down.com" class="rounded float-right" id="name_agency" alt="Responsive image">
</nav>
<!---                                 --->
    

    <!-- CONTAINER -->
    <div class="container">

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
                    <button onclick="myFunction()"  class="btn btn-primary">Invia</button><p id="check"></p>
                </form>
            </div>

        </div>

        <hr>

        <div class="row form-group" id="footer">
            <div class="col-md-4 col-xs-4" > 
            <h3 class="footer">Liddi&Co s.r.l.</h3>
            <hr>
            <p class="footer"> Via Farcito 65, Baretto  </p>
            <p class="footer">  Centro dir. Milanofsdiori, Pucci (MO) </p>
            <p class="footer">  P.IVA: 0273xxxx0363 </p>
            </div>
             
            <div class="col-md-4 col-xs-4" > 
            <h3 class="footer">Quick Links</h3>
            <hr>
            <p class="footer">Chi Siamo</p>
            <p class="footer">I nostri Partner</p>
            <p class="footer">Come Trovarci</p>
            </div>

            <div class="col-md-4 col-xs-4" > 
            <h3 class="footer">Sei un Fornitore?</h3>
            <hr>
            <p class="footer">Vorresti ricevere maggiori informazioni su di noi?</p>
            <p class="footer"><a href="#">Contattaci<a></p> 
            <p class="footer">Telefono : 0985214663</p>
            <p class="footer">Fax : 4521589631</p>
            <p class="footer">Email: afd@dfsdfsdf.comi</p>
            <form class="float-right form-inline my-2 my-lg-0">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
            </div>

        </div>       
           
           
           
       

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="includes/jquery/dist/jquery.slim.min.js"></script>
    <script src="includes/popper.js/dist/popper.min.js"></script>
    <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
   
  </body>
</html>