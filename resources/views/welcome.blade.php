<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PT. KST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
        <!-- Style -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="c-logo" src="{{asset('img/KST Logo2018.JPG')}}" alt="PT. Kreatifitas Sinergisme Teknoindo" height="80" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#our_company">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#what_we_do">Services</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#our_product">Product</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#gallery" id="to_gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="job.html">Career</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container">
            <section id="hero" class="d-flex flex-wrap justify-content-between">
                <div class="col-lg-6 col-sm-12 d-flex flex-column">
                    <div id="kst-tagline">
                        We are provider of quality IT solutions and reliable service in agile software development
                    </div>
                    <div id="kst-caption">
                        With the ever-increasing pace of globalisation and business connectivity, the demand for IT professional is greater than ever. We work closely with our clients to create software solution that helps small and large businesses alike to achieve their goals.
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="img-fluid" src="{{ asset('img/hero_background 2.png') }}" alt="">
                </div>
            </section>
            <hr>
            <section id="services" class="d-flex flex-column">
                <h1 id="section-title" class="text-center mb-5">Solutions</h1>
                <div class="card mb-3 p-3">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 p-3 text-center justify-content-center align-items-center">
                            <img style="max-width:300px" src="{{asset('img/Software Dev.png')}}" alt="Product Development" class="img-fluid">
                        </div>
                        <div class="col-lg-6 flex-column">
                            <h3 id="service-title" class="card-title">Product Development</h3>
                            <h5 class="card-text">Software solutions to improve business productivity</h5>
                            <a class="btn btn-primary" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="card p-3">
                    <div class="d-flex flex-wrap">
                        <div class="col-lg-6 flex-column">
                            <h3 id="service-title">Outsourcing</h3>
                            <h5>We provide the best talent for your development team.</h5>
                            <a class="btn btn-primary" href="#">Learn More</a>
                        </div>
                        <div class="col-lg-6 p-3 text-center justify-content-center align-items-center">
                            <img src="{{asset('img/Outsourcing.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <hr>
            <section id="clients" class="d-flex flex-column mb-5">
                <h1 id="section-title" class="text-center mb-5">Clients</h1>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 d-flex text-center justify-content-center align-items-center">
                        <img src="{{asset('img/gapbuster_logo.gif')}}" alt="GBW" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-sm-6 d-flex text-center justify-content-center align-items-center">
                        <img src="{{asset('img/Gadens-logo.png')}}" alt="Gadens" class="img-fluid">
                    </div>
                </div>
            </section>
        </main>
        <footer class="mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-flex flex-column">
                        <h5 class="mb-2">Solutions</h5>
                        <a href="">Product Development</a>
                        <a href="">Outsourcing</a>
                    </div>
                    <div class="col-lg-6 d-flex flex-column">
                        <h5 class="mb-2">Company</h5>
                        <a href="">About Us</a>
                        <a href="">Career</a>
                    </div>
                    <div class="col-lg-3 d-flex flex-column text-right">
                        <p class="lead">Graha Kas Jl. Raya Kebayoran Baru No.88 Gunung, Kebayoran Baru Jakarta-Selatan</p>
                        <br>
                        <p><i class="fas fa-phone"></i>&nbsp;(+62 21) 2751 4012</p>
                        <p><i class="fas fa-envelope"></i>&nbsp;contact@kst.co.id</p>
                        <p><i class="fas fa-clock"></i>&nbsp;Monday - Friday : 08:30 AM to 5:30 PM</p>
                    </div>
                </div>
                <br>
                <div class="row text-center">
                <p>© PT. Kreatifitas Sinergisme Teknoindo 2019</p> 
                </div>
            </div>
            
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>