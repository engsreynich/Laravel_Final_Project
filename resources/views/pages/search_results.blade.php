@extends('layouts.app')

@section('title', 'Search Results | Profusion')

@section('content')
    <div class="container">
        <h2>Search Results</h2>
        <form method="GET" action="{{ route('search') }}" class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="query" class="form-control" value="{{ $query ?? '' }}" placeholder="Search teachers by name or subject..." required>
                </div>
                <div class="col-md-3">
                    <select name="class_type" class="form-control">
                        <option value="">All Types</option>
                        <option value="online" {{ $class_type === 'online' ? 'selected' : '' }}>Online</option>
                        <option value="physical" {{ $class_type === 'physical' ? 'selected' : '' }}>Physical</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </div>
        </form>

        @if ($teachers->isEmpty())
            <p>No teachers found matching your search.</p>
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