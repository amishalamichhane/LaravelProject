@extends('layout')

@section('content')
    <div class="gallery-container">
        <!-- Gallery with auto-cursor -->
        <div class="gallery">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery-slider">
                <img src="/img/DSC00144.JPG" alt="Image 2">
                <img src="/img/DSC02223.JPG" alt="Image 3">
                <img src="/img/DSC02224.JPG" alt="Image 4">
                <img src="/img/DSC00110.JPG" alt="Image 1">
                <img src="/img/git.JPG" alt="Image 5">
                <img src="/img/git1.JPG" alt="Image 6">
                <img src="/img/nagarpalika.JPG" alt="Image 7">
            </div>
        </div>

        <!-- Static Git Section -->
        <div class="git">
            <h2 class="section-title">Git Images</h2>
            <div class="img-section">
                <img src="/img/git.JPG" alt="Git Image 1">
                <img src="/img/git1.JPG" alt="Git Image 2">
            </div>
        </div>

        <!-- Static PI Visit Section -->
        <div class="pi-visit">
            <h2 class="section-title">PI Visit to Nepal</h2>
            <div class="img-section">
                <img src="/img/DSC02223.JPG" alt="PI Visit Image 1">
                <img src="/img/DSC00144.JPG" alt="PI Visit Image 2">
                <img src="/img/DSC02224.JPG" alt="PI Visit Image 3">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slider = document.querySelector(".gallery-slider");
            const slides = slider.querySelectorAll("img");
            let currentIndex = 0;
            const totalImages = slides.length;
            const imagesToShow = 4; // Number of images to show at a time
            const slideWidth = 100 / imagesToShow; // Calculate width for each image when showing 3 at a time

            // Adjust width of the gallery slider based on the number of images
            slider.style.width = `${slideWidth * totalImages}%`;

            // Clone the first image and append it to the end for infinite looping
            const firstImage = slides[0].cloneNode(true);
            slider.appendChild(firstImage);

            // Function to move to the next image instantly, but with 3-second interval
            function moveToNextImage() {
                currentIndex = (currentIndex + 1) % totalImages; // Cycle through images
                slider.style.transition = "transform 0.3s ease-in-out"; // Apply transition for smooth sliding
                slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`; // Move to the next image
            }

            // Start the slider
            setInterval(() => {
                // Instantly jump to the first image when reaching the end
                if (currentIndex === totalImages - 1) {
                    slider.style.transition = "none"; // Disable transition for instant change
                    slider.style.transform = `translateX(0%)`; // Instantly show the first image
                    currentIndex = 0;
                    setTimeout(moveToNextImage, 50); // Wait a moment and then apply transition
                } else {
                    moveToNextImage();
                }
            }, 3000); // 3-second gap between images
        });
    </script>
@endsection
