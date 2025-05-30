@extends('layouts.app')

@section('title', 'Register | Profusion')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h4 class="my-2 fw-semibold">Register</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input id="name" type="text"
                                   class="form-control rounded-pill px-3 py-2 @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input id="email" type="email"
                                   class="form-control rounded-pill px-3 py-2 @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Password</label>
                            <input id="password" type="password"
                                   class="form-control rounded-pill px-3 py-2 @error('password') is-invalid @enderror"
                                   name="password" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label fw-semibold">Confirm Password</label>
                            <input id="password-confirm" type="password"
                                   class="form-control rounded-pill px-3 py-2"
                                   name="password_confirmation" required>
                        </div>

                        <!-- Role -->
                        <div class="mb-3">
                            <label for="role" class="form-label fw-semibold">Role</label>
                            <select name="role" id="role"
                                    class="form-select rounded-pill px-3 py-2 @error('role') is-invalid @enderror" required>
                                <option value="">-- Select Role --</option>
                                <option value="student" {{ old('role') === 'student' ? 'selected' : '' }}>Student</option>
                                <option value="teacher" {{ old('role') === 'teacher' ? 'selected' : '' }}>Teacher</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Teacher Fields -->
                        <div id="teacher-fields" class="border rounded-3 p-3" style="display: {{ old('role') === 'teacher' ? 'block' : 'none' }};">
                            <div class="mb-3">
                                <label for="subject" class="form-label fw-semibold">Subject</label>
                                <input type="text" name="subject" id="subject"
                                       class="form-control rounded-pill px-3 py-2 @error('subject') is-invalid @enderror"
                                       value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="available_time" class="form-label fw-semibold">Available Time</label>
                                <input type="text" name="available_time" id="available_time"
                                       class="form-control rounded-pill px-3 py-2 @error('available_time') is-invalid @enderror"
                                       value="{{ old('available_time') }}"
                                       placeholder="e.g., Mon-Fri 9 AM - 5 PM">
                                @error('available_time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label fw-semibold">Price per Session ($)</label>
                                <input type="number" name="price" id="price"
                                       class="form-control rounded-pill px-3 py-2 @error('price') is-invalid @enderror"
                                       value="{{ old('price') }}" step="0.01">
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="class_type" class="form-label fw-semibold">Class Type</label>
                                <select name="class_type" id="class_type"
                                        class="form-select rounded-pill px-3 py-2 @error('class_type') is-invalid @enderror">
                                    <option value="">-- Select Type --</option>
                                    <option value="online" {{ old('class_type') === 'online' ? 'selected' : '' }}>Online</option>
                                    <option value="physical" {{ old('class_type') === 'physical' ? 'selected' : '' }}>Physical</option>
                                </select>
                                @error('class_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary rounded-pill fw-semibold py-2">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const roleSelect = document.getElementById('role');
        const teacherFields = document.getElementById('teacher-fields');

        roleSelect.addEventListener('change', function () {
            teacherFields.style.display = this.value === 'teacher' ? 'block' : 'none';
        });
    });
</script>
@endsection
