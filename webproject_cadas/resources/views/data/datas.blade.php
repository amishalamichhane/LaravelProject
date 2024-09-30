@extends('layout')
@section('content')

<div class="data-container">
    <h1>Data</h1>
    <ul class="data-list">
        @foreach($studies as $study)
            <li>
                <h2>{{ $study->title }}</h2>
                <a href="{{ $study->data_link }}" target="_blank">Download Data</a>
            </li>
        @endforeach
    </ul>
</div>

@endsection
