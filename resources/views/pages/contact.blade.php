<!-- resources/views/pages/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact | Profusion')

@section('content')
    <!-- Contact Section Start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_taital">Get In Touch</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact_main layout_padding">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt" placeholder="Email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </form>
                           <div class="send_bt"><a href="#">Send Now</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection