@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="/css/contact.css"> <!-- Link to your CSS file -->
</head>

<body>

    @section('contact')
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
    @endsection

</body>

</html>
