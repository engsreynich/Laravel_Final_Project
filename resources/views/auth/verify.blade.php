@extends('layouts.app')

@section('title', 'Verify Email | Profusion')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h4 class="my-2">{{ __('Verify Your Email Address') }}</h4>
                </div>

                <div class="card-body p-4">
                    @if (session('resent'))
                        <div class="alert alert-success fw-semibold" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p class="mb-2">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                    </p>
                    <p class="mb-3">
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                                {{ __('click here to request another') }}
                            </button>.
                        </form>
                    </p>

                    <div class="mt-4 text-center">
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary rounded-pill px-4">
                            Back to Login
                        </a>
                    </div>
                </div>

            </div>
        @endif
        <p>Before proceeding, please check your email for a verification link.</p>
        <p>If you did not receive the email, you can request another one below.</p>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Resend Verification Email</button>
        </form>
    </div>

