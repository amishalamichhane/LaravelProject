@extends('layout')

@section('content')
    <div class="research-body">
        {{-- Research team --}}
        <h1>Research Team</h1>

        <div class="research-team">
            <h2>Principal Investigators </h2>
            <div class="research-member">
                {{-- 1st  --}}
                <div class="polaroid">
                    <img src="/img/natalie.jpg" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>Natalie D. Eggum</p>
                    </div>
                </div>

                {{-- 2nd --}}

                <div class="polaroid">
                    <img src="/img/scott.png" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>Scott Yabiku</p>
                    </div>
                </div>

                {{-- 3rd --}}

                <div class="polaroid">
                    <img src="/img/sarah.jpg" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>Sarah R. Hayford</p>
                    </div>
                </div>

                {{-- 4th --}}

                <div class="polaroid">
                    <img src="/img/jennifer.jpg" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>Jennifer Glick</p>
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
                    <img src="/img/isern.jpg" alt="5 Terre" style="width:100%">
                    <div class="container-txt">
                        <p>ISERN</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
