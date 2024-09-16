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
            <div id="imageSlider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#imageSlider" data-slide-to="1"></li>
                    <li data-target="#imageSlider" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/famelo-abt.png') }}" class="d-block w-100" alt="Image 1">
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
                        <img src="{{ asset('/img/header_original.jpg') }}" class="d-block w-100" alt="Image 3"
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

            </div>
            <div class="intro">
                {{-- <h2>About</h2> --}}
                <p>
                    Guided by a novel model combining migration and child development perspectives, this project explores
                    how family migration affects left-behind children's social competence and psychological adjustment. By
                    understanding migration's impacts, we aim to support families and inform policies addressing mental
                    health challenges like depression, anxiety, and aggression.
                </p>
                <p>
                <ul>
                    <li>Reciprocal effects of caregivers' practices and children's socio-emotional development.</li>
                    <li>Impact of family migration on socio-emotional outcomes and moderating factors.</li>
                    <li>Fathers' roles in children's socio-emotional outcomes and comparison of migrating vs. non-migrating
                        fathers' practices.</li>
                </ul>

                </p>

                <p>
                    The Survey Research Center at the University of Michigan developed the FAMELO sampling plan for Nepal,
                    targeting households with children aged 5-17 years. We used a multi-stage sampling approach and
                    collected data from 2,341 diverse households.
                </p>

                <p>
                    Data collection will be managed by ISER-N, led by Dr. Ghimire, with in-home interviews for children,
                    caregivers, and fathers (if present). Migrating fathers will be interviewed by phone. Interviews will be
                    short, verbal, and use visual aids for clarity. Data will be recorded directly into software to minimize
                    errors. Special measures will ensure privacy and confidentiality, with follow-up interviews to manage
                    attrition. Interviews will be adapted for age and include both self-reports and other-reports to capture
                    accurate information.
                </p>

            </div>
        </div>
    @endsection
</body>
