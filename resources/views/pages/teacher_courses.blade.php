@extends('layouts.app')

@section('title', 'My Courses | Profusion')

@section('content')
    <div class="container">
        <h2>My Courses</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('teacher.update') }}">
            @csrf
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ auth()->guard('teacher')->user()->subject }}" required>
            </div>
            <div class="form-group">
                <label for="available_time">Available Time</label>
                <input type="text" name="available_time" id="available_time" class="form-control" value="{{ auth()->guard('teacher')->user()->available_time }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price per Session</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ auth()->guard('teacher')->user()->price }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="class_type">Class Type</label>
                <select name="class_type" id="class_type" class="form-control" required>
                    <option value="online" {{ auth()->guard('teacher')->user()->class_type === 'online' ? 'selected' : '' }}>Online</option>
                    <option value="physical" {{ auth()->guard('teacher')->user()->class_type === 'physical' ? 'selected' : '' }}>Physical</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>

        <h3>Bookings</h3>
        @if ($bookings->isEmpty())
            <p>No bookings found.</p>
        @else
            @foreach ($bookings as $booking)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Booking #{{ $booking->id }}</h5>
                        <p class="card-text"><strong>Student:</strong> {{ $booking->user->name ?? 'Unknown Student' }}</p>
                        <p class="card-text"><strong>Time Slot:</strong> {{ $booking->time_slot }}</p>
                        <p class="card-text"><strong>Status:</strong> {{ ucfirst($booking->status) }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection