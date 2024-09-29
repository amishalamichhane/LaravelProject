@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DATA</title>
    </head>

    <body>


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
                        <a href="#">Data</a>
                        <a href="#">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
    
                <!-- Second section -->
                <div class="data-item">
                    <img src="/img/data2.jpg" alt="Data Image 2">
                    <h2>Family Migration Context and Socio-emotional Competence. Study-2021</h2>
                    <div class="data-links">
                        <a href="#">Data</a>
                        <a href="#">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
    
                <!-- Third section -->
                <div class="data-item">
                    <img src="/img/data3.jpg" alt="Data Image 3">
                    <h2>Family Migration Context and Socialization & Children's Socio-emotional Development. Study-2024</h2>
                    <div class="data-links">
                        <a href="#">Data</a>
                        <a href="#">Codebook</a>
                        <a href="/question">Questions</a>
                        <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
