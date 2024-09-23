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


        <div class="data-page">
            <!-- First section -->
            <div class="data-item">
                <img src="/img/data1.jpg" alt="Data Image 1">
                <h2>Dataset 1</h2>
                <div class="data-links">
                    <a href="#">Data</a>
                    <a href="#">Codebook</a>
                    <a href="#">Questions</a>
                </div>
            </div>

            <!-- Second section -->
            <div class="data-item">
                <img src="/img/data2.jpg" alt="Data Image 2">
                <h2>Dataset 2</h2>
                <div class="data-links">
                    <a href="#">Data</a>
                    <a href="#">Codebook</a>
                    <a href="#">Questions</a>
                </div>
            </div>

            <!-- Third section -->
            <div class="data-item">
                <img src="/img/data3.jpg" alt="Data Image 3">
                <h2>Family Migration Context and Socio-emotional Competence</h2>
                <div class="data-links">
                    <a href="#">Data</a>
                    <a href="#">Codebook</a>
                    <a href="#">Questions</a>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
