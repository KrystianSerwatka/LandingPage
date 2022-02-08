<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krystian Serwatka - Projekt</title>
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="public/fonts/fontawesome/css/all.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbarOne">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Strona główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-me">O mnie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#offer">Oferta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Slider -->
    <div id="home"></div>
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/images/slide-1.jpg" class="d-block w-100" alt="niedźwiedź przy zachodzie słońca">
            </div>
            <div class="carousel-item">
                <img src="public/images/slide-2.jpg" class="d-block w-100" alt="miasto nocą">
            </div>
            <div class="carousel-item">
                <img src="public/images/slide-3.jpg" class="d-block w-100" alt="góry">
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
    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-10 text-center text-sm-left">
                <h1>Witaj na stronie!</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis impedit, velit debitis
                    laborum inventore magni id amet distinctio, minima expedita optio illo, est laudantium dicta nulla
                    aperiam? Consequatur, velit ipsam!</p>
            </div>
            <div class="d-flex align-items-center justify-content-center col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <button type="button" class="btn btn-outline-secondary btn-lg" data-toggle="tooltip"
                        data-placement="top" title="W przyszłości będę przekierowywać do jakiegoś miejsca...">Kliknij
                    tutaj!
                </button>
            </div>
        </div>
    </div>
    <!-- About me -->
    <div class="container-fluid padding" id="about-me">
        <div class="row text-center">
            <div class="col-12">
                <h1>O mnie</h1>
            </div>
            <div class="col-12">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas?</p>
                <div class="container">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <!-- About me - technologies -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-6 col-md-4">
                <i class="fas fa-code"></i>
                <i class="fab fa-css3"></i>
                <h3>HTML5/CSS</h3>
                <p>Lorem ipsum dolor.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                <i class="fab fa-js-square"></i>
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor.</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fab fa-php"></i>
                <h3>PHP</h3>
                <p>Lorem ipsum dolor.</p>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
    </div>
    <!-- Offers -->
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-12 mt-4 mb-4">
                <h2>Oferta</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas? Lorem ipsum dolor.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary text-white" id="offer">
        <div class="row text-center">
            <div class="col-lg-6 nopadding">
                <img class="w-100" src="public/images/offer-1.jpg" alt="laptop na stole">
            </div>
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center">
                <h3 class="mt-4 mb-4">Stworzę stronę!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas?</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center order-1 order-sm-1 order-lg-0">
                <h3 class="mt-4 mb-4">Wypozycjonuję ją!</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas? Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Eveniet omnis saepe illo sint
                    necessitatibus dolores. Ea error ab ullam magnam debitis accusamus inventore enim ipsum, quidem,
                    voluptatum dignissimos quam voluptas?</p>
            </div>
            <div class="col-lg-6 nopadding order-0 order-sm-0 order-lg-1">
                <img class="w-100" src="public/images/offer-2.jpg" alt="laptop na stole">
            </div>
        </div>
    </div>
    <!-- Parallax background -->
    <div class="parallax"></div>
    <!-- Contact form -->
    <div class="container-fluid mt-2 mb-5" id="contact">
        <div class="row">
            <div class="col-12">
                <div class="col-12 text-center mt-5 mb-5">
                    <h3>Skontaktuj się ze mną!</h3>
                </div>
                <form id="form" method="POST" action="/?sendmail.php">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-4">
                            <label for="inputName">Imię i nazwisko</label>
                            <input type="text" name="name" class="form-control" id="inputName"
                                   placeholder="np: Marcin Kowalski" pattern="[a-zA-Z'-'\s]*" required>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label for="inputEmail">Adres e-mail</label>
                            <input type="email" name="email" class="form-control" id="inputEmail"
                                   placeholder="np: test@gmail.com" required>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label for="inputPhone">Telefon</label>
                            <input type="tel" name="phone" class="form-control" id="inputPhone"
                                   placeholder="np: 123-456-789" title="Podaj numer telefonu w formacie: 123-123-123"
                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Wyrażam zgodę na przetwarzanie moich danych osobowych.
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="submitBtn" name="submit">Wyślij formularz</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid bg-dark text-white">
        <div class="row text-center pt-3">
            <div class="col-12">
                <p>© 2021 Projekt i realizacja Krystian Serwatka</p>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<!-- JS -->
<script src="public/js/main.js"></script>
</body>
</html>