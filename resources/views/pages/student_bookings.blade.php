@extends('layouts.app')

@section('title', 'My Bookings | Profusion')

@section('content')
    <div class="container">
        <h2>My Bookings</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if ($bookings->isEmpty())
            <p>No bookings found.</p>
        @else
            @foreach ($bookings as $booking)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Booking #{{ $booking->id }}</h5>
                        <p class="card-text"><strong>Teacher:</strong> {{ $booking->teacher->name ?? 'Unknown Teacher' }}</p>
                        <p class="card-text"><strong>Subject:</strong> {{ $booking->teacher->subject }}</p>
                        <p class="card-text"><strong>Time Slot:</strong> {{ $booking->time_slot }}</p>
                        <p class="card-text"><strong>Class Type:</strong> {{ ucfirst($booking->teacher->class_type) }}</p>
                        <form action="{{ route('cancel', $booking->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel this booking?')">Cancel</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
