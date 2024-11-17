@extends('layout')

@section('content')
    <div class="working-paper-container">
        <h1><b>Working Papers</b></h1>
        <div>
            <p>
                The Working Papers section contains preliminary research outputs that are still in development. These papers are
            part of an ongoing effort to explore key questions in the field of family migration and its impact on children's
            socio-psychological competence. Shared here for the purpose of gathering feedback, these papers aim to engage
            with the wider academic and research community, fostering collaboration and further development of ideas.

            </p>

        </div>

        @foreach ($workingPapers as $paper)
            <div class="paper-card">
                <h2> {{ $paper->title }}</h2>
                {{-- <p class="author">Authors: {{ $paper->authors }}</p> --}}
                {{-- <p class="date">Date: {{ $paper->date->format('F Y') }}</p> --}}
                <p class="summary">{{ $paper->summary }}</p>
                <a href="{{ asset($paper->file_path) }}" target="_blank" class="button">Download Full Paper</a>
            </div>
        @endforeach
    </div>
@endsection
