@extends('layout')

@section('content')
    <div class="working-paper-container">
        <h1>Working Papers</h1>

        @foreach($workingPapers as $paper)
            <div class="paper-card">
                <h2>Title: {{ $paper->title }}</h2>
                <p class="author">Authors: {{ $paper->authors }}</p>
                <p class="date">Date: {{ $paper->date->format('F Y') }}</p>
                <p class="summary">{{ $paper->summary }}</p>
                <a href="{{ asset($paper->file_path) }}" class="button">Download Full Paper</a>
            </div>
        @endforeach
    </div>
@endsection
