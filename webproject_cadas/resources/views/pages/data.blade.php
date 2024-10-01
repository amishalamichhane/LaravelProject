@extends('layout')

@section('content')
    <div class="data">
        <div class="data-heading">
            <h1>Data</h1>
        </div>
        <div class="data-page">
            @foreach ($studies as $study)
                <div class="data-item">
                    <img src="{{ $study->image }}" alt="{{ $study->title }}">
                    <h2>{{ $study->title }}</h2>

                    <div class="data-links">
                        <!-- Links generated dynamically by passing the study's slug -->
                        <a href="{{ route('datas', $study->slug) }}">Data</a>
                        <a href="{{ route('codebooks', $study->slug) }}">Codebook</a>
                        <a href="{{ route('questions', $study->slug) }}">Questions</a>
                        <a href="{{ $study->report_link }}" target="_blank">Report</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
