@extends('layout')

@section('content')
    <div class="staff-page">
        <h1>Staff Members</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="staff-list">
            @foreach($staff as $member)
                <div class="staff-item">
                    <img src="{{ ($member->image) }}" alt="{{ $member->name }}">
                    {{-- Img ko url dini  --}}
                    
                    <h3 class="staff-name">{{ $member->name }}</h3>
                    <p class="staff-role">{{ $member->role }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
