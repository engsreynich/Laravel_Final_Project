@extends('layouts.app')

@section('title', 'Verify Email | Profusion')

@section('content')
    <div class="container">
        <h2>Email Verification</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <p>Before proceeding, please check your email for a verification link.</p>
        <p>If you did not receive the email, you can request another one below.</p>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Resend Verification Email</button>
        </form>
    </div>
@endsection