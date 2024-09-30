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
            <div id="imageSlider" class="carousel slide" data-ride="carousel" data-interval="5000"> <!-- Set interval to 2000ms (5 seconds) -->

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#imageSlider" data-slide-to="1"></li>
                    <li data-target="#imageSlider" data-slide-to="2"></li>
                    <li data-target="#imageSlider" data-slide-to="3"></li>
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
                        <img src="{{ asset('/img/migration.jpg') }}" class="d-block w-100" alt="Image 4" {{-- style="width: 100%; height: auto;" --}}>
                        <div class="carousel-caption d-none d-md-block">
                            {{-- <h5>Second Slide Title</h5> --}}
                            {{-- <p>Second Slide Description.</p> --}}
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
                <a class="readmore" href="/about">
                    Read More
                  </a>


            </div>
        </div>


        {{--  Data --}}

        <div class="data">
            <div class="data-heading">
                <h1>Data</h1>
            </div>
            <div class="data-page">
                
                <!-- First section -->
                <div class="data-item">
                    <img src="/img/data1.jpg" alt="Data Image 1">
                    <h2>Family Migration Context & Socio-emotional Competence. Study-2017</h2>
                    <div class="data-links">
                        <a href="/datas">Data</a>
                        <a href="/codebooks">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
    
                <!-- Second section -->
                <div class="data-item">
                    <img src="/img/data2.jpg" alt="Data Image 2">
                    <h2>Family Migration Context and Socio-emotional Competence. Study-2021</h2>
                    <div class="data-links">
                        <a href="/datas">Data</a>
                        <a href="/codebooks">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
    
                <!-- Third section -->
                <div class="data-item">
                    <img src="/img/data3.jpg" alt="Data Image 3">
                    <h2>Family Migration Context and Socialization & Children's Socio-emotional Development. Study-2024</h2>
                    <div class="data-links">
                        <a href="/datas">Data</a>
                        <a href="/codebooks">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
            </div>
        </div>



        {{-- Contact Page --}}

        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact</h2>
                <p>
                    ISER | University of Michigan<br>
                    Bharatpur-15, Fulbari, Chitwan, Nepal<br>
                    977-56-591054 , 977-56-592406<br>
                    E-mail: iser.nepal@outlook.com
                </p>
            </div>
            <div class="contact-map">
                {{-- <h2>Our Location</h2> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3469.704041271277!2d84.36665447538937!3d27.651503376214634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fa3c167e33df%3A0xdc393700902f9460!2sInstitute%20for%20Social%20and%20Environmental%20Research-Nepal!5e1!3m2!1sen!2snp!4v1726064665443!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        {{--  --}}
        
    @endsection
    
    
</body>
