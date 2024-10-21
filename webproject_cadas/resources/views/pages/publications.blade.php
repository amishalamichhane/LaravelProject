@extends('layout')

@section('content')
    <div class="publications-container">
        <div class="publication-header">
            <h1>Publications</h1>
        </div>
        <div class="publications-content">
            @foreach ($publications as $publication)
                <div class="publication-item">
                    <div class="publication-details">
                        {{ $publication->authors }} ({{ $publication->year }}).
                        <a href="{{ $publication->url }}" target="_blank">{{ $publication->title }}</a>.
                        <em>{{ $publication->journal }}</em>.
                    </div>

                    <div class="citation-buttons">
                        <a href="{{ $publication->doi }}" target="_blank">
                            <button>DOI</button>
                        </a>
                        <a href="{{ $publication->url }}" target="_blank">
                            <button>URL</button>
                        </a>
                        <button onclick="showCitation('{{ $publication->citation }}')">CITE</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-container">
            {{ $publications->links() }}
        </div>
    </div>

    <!-- Custom Modal -->
    <div id="citation-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeCitation()">&times;</span>
            <p id="citation-text"></p>
        </div>
    </div>

    <script>
        function showCitation(citation) {
            document.getElementById('citation-text').innerText = citation;
            document.getElementById('citation-modal').style.display = 'block';
        }

        function closeCitation() {
            document.getElementById('citation-modal').style.display = 'none';
        }

        window.onclick = function(event) {
            var modal = document.getElementById('citation-modal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
