<?php
include_once "logo.php";
echo '<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <a class="navbar-brand" href="#" id="name_agency">'.$logo.'</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item '.$liActive1.' ">
                    <a class="nav-link" href="index.php">| <i class="fas fa-apple-alt"></i> Home |<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item '.$liActive2.'  ">
                    <a class="nav-link" href="partner.php">| <i class="fas fa-hamburger"></i> Gallery |</a>
                </li>
                <li class="nav-item '.$liActive3. '   ">
                    <a class="nav-link" href="contatti.php">| <i class="fas fa-utensils"></i> Contatti |</a>
                </li>
                <li class="nav-item '.$liActive3. '   ">
                    <a class="nav-link" href="contatti.php">| <i class="fas fa-utensils"></i> Download |</a>
                </li>
            </ul>
            <img src="https://via.placeholder.com/200X60/FF0000/FFFFFF?Text=Down.com" class="rounded float-right" id="name_agency" alt="Responsive image">
        </div>
    </nav>';
    ?>