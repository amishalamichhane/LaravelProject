@extends('layout')

@section('content')
    <div class="container">
        @foreach ($capacity_building as $section)
            <div class="capacity-section">
                <h2>{{ $section->section_title }}</h2>
                <p>{{ $section->section_content }}</p>
            </div>
        @endforeach
    </div>
@endsection
