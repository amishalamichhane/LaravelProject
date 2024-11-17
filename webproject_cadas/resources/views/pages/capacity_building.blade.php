@extends('layout')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Capacity Building</h1>
        <p>
            Capacity building within the FAMELO project was pivotal for enhancing the skills and competencies of research
            staff engaged in data collection and analysis. This multifaceted initiative ensured local researchers were
            well-equipped to execute the study efficiently while maintaining high standards of research quality.
        </p>

        <!-- General Interviewing Technique (GIT) Training -->
        <div class="my-5 d-flex flex-column flex-lg-row align-items-center">
            <div class="w-100 w-lg-50">
                <h2 class="h4">General Interviewing Technique (GIT) Training</h2>
                <p>
                    The General Interviewing Technique (GIT) Training served as the cornerstone of the project’s
                    capacity-building efforts. This foundational program equipped research staff with essential skills for
                    effective interviewing. Participants mastered strategies for:
                </p>
                <ul>
                    <li>Establishing rapport with respondents,</li>
                    <li>Asking open-ended questions, </li>
                    <li>Employing active listening techniques.</li>
                </ul>
                <p>
                    These competencies were instrumental in ensuring high-quality data collection, particularly in
                    navigating the complexities of engaging with diverse and sensitive populations.
                </p>
            </div>

            <div class="w-100 w-lg-50 text-center" style="margin-top: 20px;">
                <!-- Gallery of images with auto-cursor -->
                <div class="cursor-gallery">
                    <img src="{{ asset('img/git.JPG') }}" alt="GIT Training 1" class="img-fluid rounded">
                    <img src="{{ asset('img/git1.JPG') }}" alt="GIT Training 2" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <!-- Study Specific Training (SST) -->
        <div class="my-5 d-flex flex-column flex-lg-row align-items-center">
            <div class="w-100 w-lg-50">
                <h2 class="h4">Study Specific Training (SST)</h2>
                <p>
                    The Study Specific Training (SST) addressed the unique demands of the FAMELO project. It provided
                    research staff with in-depth understanding of the study’s:
                </p>
                <ul>
                    <li>Objectives,</li>
                    <li>Protocols,</li>
                    <li>Data collection instruments.</li>
                </ul>
                <p>
                    Through comprehensive instruction on survey methodologies and ethical considerations, SST enhanced the
                    reliability and validity of the data, aligning staff practices with the study’s overarching goals.
                </p>
            </div>
        </div>

        <!-- Supervisors Training -->
        <div class="my-5 d-flex flex-column flex-lg-row align-items-center">
            <div class="w-100 w-lg-50">
                <h2 class="h4">Supervisors Training</h2>
                <p>
                    Supervisors Training reinforced the overall framework by empowering leaders to oversee data collection.
                    Supervisors were trained to:
                </p>
                <ul>
                    <li>Monitor adherence to protocols,</li>
                    <li>Provide constructive feedback to interviewers,</li>
                    <li>Troubleshoot challenges in the field, </li>
                    <li>Conduct quality assurance checks on collected data.</li>
                </ul>
                <p>
                    By equipping supervisors with these critical skills, the project cultivated an environment of
                    accountability and continuous improvement within research teams.
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cursorGallery = document.querySelector(".cursor-gallery");
            const images = cursorGallery.querySelectorAll("img");
            let currentIndex = 0;

            // Function to move to the next image
            function moveToNextImage() {
                images[currentIndex].style.display = 'none'; // Hide the current image
                currentIndex = (currentIndex + 1) % images.length; // Move to the next image
                images[currentIndex].style.display = 'block'; // Show the next image
            }

            // Initially hide all images except the first one
            images.forEach((img, index) => {
                if (index !== 0) {
                    img.style.display = 'none';
                }
            });

            // Auto-cursor effect every 3 seconds
            setInterval(moveToNextImage, 3000); // 3-second gap between images
        });
    </script>
@endsection
