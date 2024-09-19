<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAMELO</title>
    <link rel="stylesheet" href="/css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <div class="header">
            {{-- <img src="/img/header_original.jpg" alt="Famelo Logo" class="img-fluid"> --}}
            <img src="/img/famelo.png" alt="Famelo Logo" class="img-fluid">
            {{-- <div class="header-content">
                <h2><br><b>Family Migration and early life outcomes</b><br></h2>
            </div> --}}
        </div>
        <nav class="navbar navbar-expand-lg custom-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        {{-- <a class="nav-link" href="/publications">PUBLICATION</a> --}}


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PUBLICATION
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/publications">articles</a></li>
                              <li><a class="dropdown-item" href="#">dissertation</a></li>                         
                              <li><a class="dropdown-item" href="#">Books</a></li>                         
                              {{-- <li><hr class="dropdown-divider">Board member</li> --}}
                              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                          </li>

                        {{-- <a class="nav-link" href="/about">STUDY</a> --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Study
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/about">About</a></li>
                              <li><a class="dropdown-item" href="/data">Data</a></li>
                              {{-- <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                          </li>

                        {{-- <a class="nav-link" href="/researcher">RESEARCHER</a> --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                RESEARCHER
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/researcher">RESEARCHER</a></li>
                              <li><a class="dropdown-item" href="#">STAFF</a></li>                         
                              <li><a class="dropdown-item" href="#">Board member</a></li>                         
                              {{-- <li><hr class="dropdown-divider">Board member</li> --}}
                              {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                            </ul>
                          </li>

                        {{-- <a class="nav-link" href="/data">DATA</a> --}}
                        <a class="nav-link" href="/contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <!-- Inline JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.navbar-nav .nav-link');
            const currentPath = window.location.pathname;

            links.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        });
    </script>

</body>

</html>
