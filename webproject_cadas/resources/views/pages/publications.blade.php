@extends('layout') <!-- Extend the existing base layout -->

@section('content')
    <div class="publications-container">
        <div class="publication-header">
            <h1>Publications</h1>
        </div>
        <div class="publications-content">
            @foreach ($publications as $publication)
                <div class="publication-item">
                    <p>
                        <strong>{{ $publication->authors }}</strong> ({{ $publication->year }}). 
                        <a href="{{ $publication->url }}" target="_blank">{{ $publication->title }}</a>.
                        <br>
                        <em>{{ $publication->journal }}</em>.
                    </p>
                    <div class="citation-buttons">
                        <a href="{{ $publication->doi }}" target="_blank">
                            <button>DOI</button>
                        </a>
                        <a href="{{ $publication->url }}" target="_blank">
                            <button>URL</button>
                        </a>
                        <button>{{ $publication->cite }}CITE</button>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- <div class="pagination-container">
            {{ $publications->links() }}
        </div> --}}
    </div>
@endsection
