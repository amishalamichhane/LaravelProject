@extends('layout') <!-- Extend the existing base layout -->

@section('content')
    <!-- Main Content Section -->
    <div class="publications-container">
        <h1>Publications</h1>
        @foreach ($publications as $publication)
            <div class="publication-item">
                <p>
                    <strong>{{ $publication->authors }}</strong> ({{ $publication->year }}). {{ $publication->title }}.
                    <em>{{ $publication->journal }}</em>.
                </p>
            </div>
        @endforeach
    </div>
@endsection
