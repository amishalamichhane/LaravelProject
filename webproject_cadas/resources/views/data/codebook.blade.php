{{-- @extends('layout')
@section('content')

<div class="codebook-container">
    <p class="codebook-intro">CODEBOOK</p>
    <ol class="codebook-links">
        <li><a href="/codebook/MergeFamelo2_Nepal_AdultCodebook.pdf" target="_blank">Adult Codebook</a></li>
        <li><a href="/codebook/MergeFamelo2.Nepal.Child1Codebook.pdf" target="_blank">Child Codebook</a></li>
        <li><a href="/codebook/MergeFamelo2.Nepal.Screener.Codebook.pdf" target="_blank">Screener Codebook</a></li>
    </ol>
</div>

@endsection --}}

@extends('layout')
@section('content')
    <div class="codebook-container">
        
        {{ $study->codebook_link }}
    </div>
@endsection
