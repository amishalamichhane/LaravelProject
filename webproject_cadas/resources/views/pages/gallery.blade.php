@extends('layout')

@section('content')
<h1 class="text-center">Gallery</h1> <!-- Main title for the gallery page -->

<div class="gallery-page">
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <div class="gallery-list">
        @foreach($galleries as $gallery)
            <div class="gallery-item">
                <h3 class="gallery-title">{{ $gallery->title }}</h3> <!-- Title above the images -->
                <div class="images-container"> <!-- Container for multiple images -->
                    @foreach($gallery->images as $image) <!-- Assuming each gallery has a collection of images -->
                        <img src="{{ $image->image_url }}" alt="{{ $gallery->title }}" class="img-fluid"> <!-- Display each image -->
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
