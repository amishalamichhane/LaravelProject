@extends('layout')
@section('content')

    <div class="event-container">
        <h1>Upcoming Events for FAMELO</h1>

        @foreach($events as $event)
            <div class="event-card">
                <div class="event-date">
                    <h2>{{ $event->event_date->format('M d') }}</h2>
                    <p>{{ $event->event_date->format('Y') }}</p>
                </div>
                <div class="event-details">
                    <h3>{{ $event->title }}</h3>
                    <p><strong>Time:</strong> {{ $event->time }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                    <p>{{ $event->description }}</p>
                </div>
            </div>
        @endforeach

    </div>

@endsection
