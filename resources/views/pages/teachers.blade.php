@extends('layouts.app')

@section('title', 'Online Classes | Profusion')

@section('content')
    <div class="service_section layout_padding">
        <div class="container">
            <h1 class="service_taital">Online Classes</h1>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $teacher->subject }}</h5>
                                <p class="card-text"><strong>Teacher:</strong> {{ $teacher->user->name ?? 'Unknown Teacher' }}</p>
                                <p class="card-text"><strong>Available Time:</strong> {{ $teacher->available_time }}</p>
                                <p class="card-text"><strong>Price:</strong> ${{ $teacher->price }}</p>
                                <p class="card-text"><strong>Type:</strong> {{ ucfirst($teacher->class_type) }}</p>
                                @auth
                                    @if (auth()->user()->role === 'student')
                                        <form action="{{ route('book', $teacher->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Book</button>
                                        </form>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection