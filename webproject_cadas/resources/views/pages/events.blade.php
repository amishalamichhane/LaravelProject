@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FAMELO-Events</title>
    </head>

    <body>

        <div class="event-container">
            <h1>Upcoming Events for FAMELO</h1>
            <div class="event-card">
                <div class="event-date">
                    <h2>Oct 10</h2>
                    <p>2024</p>
                </div>
                <div class="event-details">
                    <h3>International Conference on Family Migration</h3>
                    <p><strong>Time:</strong> 9:00 AM - 5:00 PM</p>
                    <p><strong>Location:</strong> University Conference Center</p>
                    <p>A gathering of researchers and practitioners to discuss recent findings and methodologies in family
                        migration studies.</p>
                </div>
            </div>
            <div class="event-card">
                <div class="event-date">
                    <h2>Oct 20</h2>
                    <p>2024</p>
                </div>
                <div class="event-details">
                    <h3>Family Migration and Child Development Workshop</h3>
                    <p><strong>Time:</strong> 10:00 AM - 4:00 PM</p>
                    <p><strong>Location:</strong> Community Hall, Downtown</p>
                    <p>Interactive workshop focusing on the impact of family migration on child development and psychosocial
                        outcomes.</p>
                </div>
            </div>
            <div class="event-card">
                <div class="event-date">
                    <h2>Nov 5</h2>
                    <p>2024</p>
                </div>
                <div class="event-details">
                    <h3>Policy Forum: Family Migration and Integration</h3>
                    <p><strong>Time:</strong> 1:00 PM - 3:00 PM</p>
                    <p><strong>Location:</strong> City Council Chambers</p>
                    <p>A discussion on policy implications for family migration and strategies for effective integration in
                        host communities.</p>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
