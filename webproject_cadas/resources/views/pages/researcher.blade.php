@extends('layout')

@section('content')
    <div class="research-body">
        {{-- Research team --}}
        <h1>Research Team</h1>

        <div class="research-team">
            <h2>Principal Investigators</h2>
            <div class="research-member">
                {{-- 1st --}}


                {{-- 3rd --}}
                <div class="polaroid">
                    <img src="/img/dhirgha.jpg" alt="Dirgha Ghimire">
                    <div class="container-txt">
                        <a href="/dirgha">Dirgha Jibi Ghimire</a>
                        <p>Principal Director & <br>Principle Investigator</p>
                    </div>
                </div>

                <div class="polaroid">
                    <img src="/img/natalie.jpg" alt="Natalie D. Eggum">
                    <div class="container-txt">
                        <a href="/natalie">Natalie D. Eggum</a>
                        <p>Principal Investigator</p> <!-- Added info -->
                    </div>
                </div>
        
                {{-- 2nd --}}
                <div class="polaroid">
                    <img src="/img/scott.png" alt="Scott Yabiku">
                    <div class="container-txt">
                        <a href="/scott">Scott Yabiku</a>
                        <p>Data Collection and Data<br>Management Core Director</p> <!-- Added info -->
                    </div>
                </div>
        
                
                {{-- 4th --}}
                <div class="polaroid">
                    <img src="/img/jennifer.jpg" alt="Jennifer Glick">
                    <div class="container-txt">
                        <a href="/jennifer">Jennifer Glick</a>
                        <p>Principal Investigator </p>
                    </div>
                </div>
            </div>
        </div>
        


        {{-- Institutions --}}

        <div class="research-team">

            <h2>Institutions</h2>

            <div class="research-member">
                {{-- 1st  --}}

                <div class="polaroid">
                    <img src="/img/penn_state.png" alt="5 Terre" style="width:83%">
                    <div class="container-txt">
                        <p>Pennsylvania State University</p>
                    </div>
                </div>

                {{-- 2nd --}}

                <div class="polaroid">
                    <img src="/img/arizona.png" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>Arizona State University</p>
                    </div>
                </div>

                {{-- 3rd --}}
                <div class="polaroid">
                    <img src="/img/michigan.png" alt="5 Terre" style="width:106%">
                    <div class="container-txt">
                        <p>University of Michigan</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Site Partners --}}
        <div class="research-team">

            <h2>Site Partners</h2>

            <div class="research-member">
                {{-- 1st  --}}
                <div class="polaroid">
                    <a href="https://isernepal.org.np/">
                        <img src="/img/isern.jpg" alt="5 Terre" style="width:100%">
                    </a>
                    <div class="container-txt">
                        <p>ISERN</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
