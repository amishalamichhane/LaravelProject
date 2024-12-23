@extends('layout')
@section('content')
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <div class="container">

        <div class="first-para d-flex">
            <!-- Carousel Images -->
            <div class="carousel w-50">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/about.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/abt2.jpeg" alt="Second slide">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content -->
            <div class="carousel-text w-50 pl-4">
                <p>
                    <strong>FAMELO</strong> examines how family migration impacts children’s socio-psychological
                    development.
                    Using a model that blends migration and child development perspectives, the study explores how migration
                    affects left-behind children's social skills and psychological well-being, and how different
                    environments influence their outcomes. The goal is to help families adapt and guide policymakers in
                    supporting mental
                    health and addressing issues like depression, anxiety, aggression, and substance use.
                </p>
                <p>
                    We initially designed the study to span five years (2015-2020), but it was delayed until 2022 due to the
                    COVID-19 pandemic. In Wave 1, we began data collection on July 5, 2017, and completed it on July 9,
                    2018.Similarly, in Wave 2, we started data collection on April 8, 2021, and completed it on December 23,
                    2021.
                </p>
            </div>
        </div>
        <div class="second-para">

            <p>
                We covered 12 Village Development Committees and one Municipality in Western Chitwan, Nepal. Out of the
                total
                wards present in the study area, we randomly selected 54 sample sub-wards. Based on a listing of households,
                these 54 wards were divided into 119 sub-wards, with approximately 250 households in each sub-ward. From
                this
                listing and household count, we chose 54 sub-wards for our study.

                In Wave 1, we initially selected a sample of 2268 households (42 households per sub-ward). Later, to
                increase
                the number of children aged 14 to 17 years, we sampled an additional 378 households (7 households in each of
                the 54 sub-wards). In total, we sampled 2646 households for the Wave 1 survey.
            </p>

        </div>
    </div>


    <div class="timeline">
        <div class="container" id="flex-content">
            <div class="content">
                <h3>Project Background </h3>
                <p>This project explores how family migration impacts the social and emotional development of left-behind
                    children,
                    focusing on both the costs and benefits. While migration may bring financial resources that can benefit
                    children, it often disrupts family dynamics, affecting their psychological well-being and social
                    competence.
                    Research on these children, especially in specific sending communities, is limited, and this study aims
                    to
                    fill
                    that gap.
                </p>
                <h3>Purpose of Data Collection </h3>
                <p>
                    Focusing on children in Nepal, where labor migration is common, the project examines how migration
                    affects
                    family relationships, caregiving, and household resources. The findings aim to guide policymakers in
                    addressing
                    challenges like depression, anxiety, and behavioral issues among left-behind children.

                </p>
                <h3>Scope </h3>
                <p>
                    Data was collected in three waves (2017, 2020, and 2023) from children and their caregivers in Nepal's
                    Western
                    Chitwan Valley. This study includes interviews with fathers to assess migration's long-term effects on
                    children's expectations as they grow. The goal is to provide insights that can inform better policies
                    around
                    parent-child separation and protect children's rights.
                </p>
            </div>
            <div class="imp-link">
                <div class="data-details">
                    <h3>Data Collection Process</h3>
                    <ul>
                        <li>Timeline: 2015-2023</li>
                        <li>Location: Western Chitwan Valley, Nepal</li>
                        <li>Participants/Subjects: Children and their families.</li>
                        <li>Challenges Encountered:
                            Challenges included timing<br>interviews, switching to phone surveys,contact issues,<br> and
                            adding COVID-19 questions in Wave 2.</li>
                    </ul>
                </div>

                <div class="data-links">
                    <h3>Important Links</h3>
                    {{-- @foreach ($studies as $study) --}}
                    <div class="dl-container"> <!-- Add a wrapper for better control -->
                        <dl>
                            <dt>Wave 1</dt>
                            <dd><a
                                    href="/codebook/family-migration-context-socio-emotional-competence-study-2017">Codebook</a>
                            </dd>
                            <dd><a href="/datas/family-migration-context-socio-emotional-competence-study-2017">Data</a>
                            </dd>
                            <dd><a
                                    href="/questions/family-migration-context-socio-emotional-competence-study-2017">Questions</a>
                            </dd>
                            <dd><a href="/report/wave1.pdf" target="_blank">Report</a></dd>
                        </dl>
                        <dl>
                            <dt>Wave 2</dt>
                            <dd><a
                                    href="/codebook/family-migration-context-and-socio-emotional-competence-study-2021">Codebook</a>
                            </dd>
                            <dd><a href="/datas/family-migration-context-and-socio-emotional-competence-study-2021">Data</a>
                            </dd>
                            <dd><a
                                    href="/questions/family-migration-context-and-socio-emotional-competence-study-2021">Questions</a>
                            </dd>
                            <dd><a href="/report/wave2.pdf" target="_blank">Report</a></dd>
                        </dl>
                        <dl>
                            <dt>Wave 3</dt>
                            <dd><a
                                    href="/codebook/family-migration-context-and-socialization-childrens-socio-emotional-development-study-2024">Codebook</a>
                            </dd>
                            <dd><a
                                    href="datas/family-migration-context-and-socialization-childrens-socio-emotional-development-study-2024">Data</a>
                            </dd>
                            <dd><a
                                    href="questions/family-migration-context-and-socialization-childrens-socio-emotional-development-study-2024">Question</a>
                            </dd>
                            <dd><a href="/report/wave3.pdf">Report</a></dd>
                        </dl>
                        {{-- @endforeach --}}
                    </div>
                </div>



            </div>
        </div>
    </div>




    <div class="study-section">
        <div class="study-content">
            <h3>Study Area</h3>
            <div class="study-img">
                <img src="/img/studyarea.png" alt="Study Image" align ="right">
            </div>
            <ul>
                <li>
                    For this study, initially, 2,646 households from the 54 selected communities with children aged 5 to 17
                    were selected in the first phase (2074 B.S.).
                </li>
                <li>
                    From these households, a scientific method was used to ensure equal representation of various
                    ethnicities, religions, genders, regions, ages, and occupations. Children aged 5 to 17, along with their
                    caregivers, were chosen, and they became the respondents of this study.
                </li>
                <li>
                    Now, those children are between 10 and 23 years old, and information for the third phase will be
                    gathered from them.
                </li>
                <li>Accordingly, there is a plan to collect data from approximately 2,200 households
                    involving around 2,200 children and their fathers and mothers.</li>
            </ul>
        </div>
    </div>
@endsection
