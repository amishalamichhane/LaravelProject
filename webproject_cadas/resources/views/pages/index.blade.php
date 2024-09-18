@extends('layout')

<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
    @section('content')
        {{-- ----------------------------------------------------- --}}
        <div class="container-fluid mt-5 img_slider"> <!-- Use container-fluid to allow full width -->
            <!-- Image Slider -->
            <div id="imageSlider" class="carousel slide" data-ride="carousel" data-interval="2500"> <!-- Set interval to 2000ms (2 seconds) -->

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#imageSlider" data-slide-to="1"></li>
                    <li data-target="#imageSlider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/header_original.jpg') }}" class="d-block w-100" alt="Image 1">
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5>First Slide Title</h5 --}}
                            {{-- <p>First Slide Description.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/group.jpg') }}" class="d-block w-100" alt="Image 2" {{-- style="width: 100%; height: auto;" --}}>
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5>Second Slide Title</h5> --}}
                            {{-- <p>Second Slide Description.</p> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/famelo-abt.png') }}" class="d-block w-100" alt="Image 3"
                            {{-- style="width: 100%; height: auto;" --}}>
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5>Third Slide Title</h5> --}}
                            {{-- <p>Third Slide Description.</p> --}}
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        {{-- ----------------------------------------------------- --}}

        <div class="abt-container">
            <div class="abt-img">
                {{-- <img src="/img/famelo-abt.png"> --}}
                <H2>
                    What we study </H2>
                <h4>… and how</h4>


            </div>
            <div class="intro">
                {{-- <h2>About</h2> --}}
                <p>
                    Guided by a model combining migration and child development perspectives, the study explores how
                    family migration influences left-behind children's social competence and psychological adjustment.
                    The goal is to support families and inform policies addressing mental health challenges like
                    depression, anxiety, and aggression.
                </p>
                <p><b>Key areas of focus include:</b>
                <ul>
                    <li>Caregivers' practices and children's socio-emotional development.</li>
                    <li>Impact of family migration on socio-emotional outcomes and moderating factors.</li>
                    <li>Comparison of migrating and non-migrating fathers' roles in children's development.
                    </li>
                </ul>
                </p>

                <p>
                    The FAMELO sampling plan, created by the University of Michigan's Survey Research Center, targets
                    2,341 households in Nepal with children aged 5-17. Data collection, led by ISER-N under Dr. Ghimire,
                    involves in-home interviews with children, caregivers, and fathers (migrating fathers interviewed by
                    phone). Privacy measures and tailored interviews, using self-reports and other-reports, ensure data
                    accuracy.
                </p>


            </div>
        </div>
    @endsection
</body>
