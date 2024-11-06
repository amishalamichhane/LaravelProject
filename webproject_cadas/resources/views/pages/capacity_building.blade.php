@extends('layout')

@section('content')
    <div class="container_capacitybuilding">
        @foreach ($capacity_building as $section)
            <div class="capacity-section">
                <div class="text-section">
                    <h2>{{ $section->section_title }}</h2>
                    <p>{{ Str::limit($section->section_content, 200)}}<a href="{{ route('capacity_building', $section->slug) }}">Read More</a></p>

                    <!-- "Read More" link to the show page -->
                    
                </div>
                
                {{-- <div class="image-gallery">
                    @php
                        $imageUrls = json_decode($section->image_urls);
                    @endphp
                    @if (is_array($imageUrls) && count($imageUrls) > 0)
                        @foreach ($imageUrls as $image_url)
                            <img src="{{ asset($image_url) }}" alt="Image" class="capacity-image" />
                        @endforeach
                    @else
                        <p>No images available.</p>
                    @endif
                </div> --}}
            </div>
        @endforeach
    </div>
@endsection
