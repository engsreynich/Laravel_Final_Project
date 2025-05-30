@extends('layouts.app')

@section('title', 'Contact | Profusion')

@section('content')
<!-- Contact Section Start -->
<div class="contact_section layout_padding py-5 bg-light">
    <div class="container">
        <h1 class="text-center text-primary fw-bold mb-4" style="letter-spacing: 1px;">Get In Touch</h1>

        @if (session('success'))
            <div class="alert alert-success text-center rounded-pill">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="bg-white p-5 rounded-4 shadow-lg">
                    <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                        @csrf

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" id="name" name="name" class="form-control rounded-pill px-4 py-2 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="phone_number" class="form-label fw-semibold">Phone Number</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control rounded-pill px-4 py-2 @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" id="email" name="email" class="form-control rounded-pill px-4 py-2 @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-semibold">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control rounded-4 px-4 py-3 @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 fw-semibold shadow-sm">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->
@endsection
