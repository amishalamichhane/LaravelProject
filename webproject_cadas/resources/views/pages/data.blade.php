@extends('layout')

@section('content')
    <div class="data">
        <div class="data-heading">
            <h1>Data</h1>
        </div>
        <div class="data-page">
            
            @foreach($studies as $study)
            <div class="data-item">
                <img src="{{ $study->image }}" alt="{{ $study->title }}">
                <h2>{{ $study->title }}</h2>
                {{-- <div class="data-links">
                    <a href="{{ $study->data_link }}">Data</a>
                    <a href="{{ $study->codebook_link }}">Codebook</a>
                    <a href="{{ $study->questions_link }}">Questions</a>
                    <a href="{{ $study->report_link }}" target="_blank">Report</a>
                </div> --}}

                <div class="data-links">
                    <a href="{{ route('datas') }}">Data</a>
                    <a href="{{ route('codebooks') }}">Codebook</a>
                    <a href="/question">Questions</a>
                    <a href="{{ asset('report/wave2.pdf') }}" target="_blank">Report</a>
                </div>



            </div>
            @endforeach
        </div>
    </div>
@endsection
