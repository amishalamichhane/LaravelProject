@extends('layout')

@section('content')
    <div class="staff-page">
        @foreach($staff as $member)
            <div class="staff-item">
                <img src="{{ asset('img/' . $member->image) }}" alt="Staff Image">
                <h3 class="staff-name">{{ $member->name }}</h3>
                <p class="staff-role">{{ $member->role }}</p>
            </div>
        @endforeach
    </div>
@endsection
