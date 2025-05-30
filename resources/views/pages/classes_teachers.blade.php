@extends('layouts.app')

@section('title', 'Classes | Profusion')

@section('content')
    <div class="container">
        <h2>{{ ucfirst($type) }} Classes</h2>
        @if ($teachers->isEmpty())
            <p>No teachers available for this type.</p>
        @else
            @foreach ($teachers as $teacher)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $teacher->name }}</h5>
                        <p class="card-text"><strong>Subject:</strong> {{ $teacher->subject }}</p>
                        <p class="card-text"><strong>Available Time:</strong> {{ $teacher->available_time }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($teacher->price, 2) }}</p>
                        <p class="card-text"><strong>Class Type:</strong> {{ ucfirst($teacher->class_type) }}</p>
                        @if (auth()->guard('web')->check())
                            <form action="{{ route('book', $teacher->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="time_slot">Select Time Slot</label>
                                    <input type="text" name="time_slot" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Login to Book</a>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection