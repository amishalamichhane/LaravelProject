@extends('layout') <!-- Extend the existing base layout -->

@section('content')
      <!-- Main Content Section -->
   <div class="publication-cls">
    <h3><br>Publications :<br></h3>
    <div class="pub-container">
        @foreach ($publications as $publication)
            <div class="publication">
                <h2>{{ $publication->title }}</h2>
                <p class="date">Published: {{ $publication->published_date->format('F d, Y') }}</p>
                <p>{{ Str::limit($publication->content, 150) }}</p>
                <a href="#">Read More</a> <!-- Add dynamic link if needed -->
            </div>
        @endforeach
   </div>
</div>
@endsection