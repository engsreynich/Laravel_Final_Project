@extends('layout.app')

@section('title', $tutor->name . ' - Tutor Profile')

@section('content')
<div class="container-fluid p-0">
    <!-- Enhanced Tutor Profile Header -->
    <div class="profile-hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); padding: 80px 0; position: relative; overflow: hidden;">
        <!-- Animated Background Elements -->
        <div class="floating-particles">
            <div class="particle particle-1"></div>
            <div class="particle particle-2"></div>
            <div class="particle particle-3"></div>
            <div class="particle particle-4"></div>
            <div class="particle particle-5"></div>
        </div>
        
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <!-- Enhanced Profile Image -->
                    <div class="profile-image-wrapper">
                        @if($tutor->profile_image)
                            <img src="{{ $tutor->profile_image }}" alt="{{ $tutor->name }}" class="enhanced-profile-image">
                        @else
                            <div class="enhanced-default-avatar">
                                {{ strtoupper(substr($tutor->name, 0, 1)) }}
                            </div>
                        @endif
                        
                        <!-- Enhanced Badges -->
                        @if($tutor->is_verified)
                            <div class="enhanced-verified-badge">
                                <i class="fas fa-shield-check"></i>
                            </div>
                        @endif
                        
                        <!-- Online Status -->
                        <div class="enhanced-online-status {{ $tutor->is_active ? 'active' : 'inactive' }}">
                            <div class="status-pulse"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="profile-info-card">
                        <h1 class="profile-name">{{ $tutor->name }}</h1>
                        <p class="profile-title">{{ $tutor->education ?: 'Professional Tutor' }}</p>
                        
                        <!-- Enhanced Rating Section -->
                        <div class="rating-showcase">
                            <div class="rating-stars-large">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($tutor->rating))
                                        <i class="fas fa-star"></i>
                                    @elseif($i <= ceil($tutor->rating))
                                        <i class="fas fa-star-half-alt"></i>
                                    @else
                                        <i class="far fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <span class="rating-text">{{ $tutor->formatted_rating }} ({{ $tutor->total_reviews }} reviews)</span>
                        </div>

                        <!-- Enhanced Stats Grid -->
                        <div class="stats-grid">
                            <div class="stat-card">
                                <div class="stat-icon price">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>${{ $tutor->hourly_rate }}</h3>
                                    <p>per hour</p>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon students">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>{{ $tutor->total_students }}</h3>
                                    <p>students taught</p>
                                </div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-icon experience">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="stat-content">
                                    <h3>{{ $tutor->experience_years }}</h3>
                                    <p>years experience</p>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Quick Actions -->
                        <div class="profile-actions">
                            <button class="action-btn primary" onclick="scrollToContact()">
                                <i class="fas fa-envelope"></i>
                                <span>Contact Tutor</span>
                            </button>
                            <button class="action-btn secondary" onclick="bookSession()">
                                <i class="fas fa-calendar-plus"></i>
                                <span>Book Session</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Main Content -->
    <div class="profile-main-content">
        <div class="container">
            <div class="row">
                <!-- Left Column - Main Info -->
                <div class="col-lg-8">
                    <!-- Enhanced About Section -->
                    <div class="content-card about-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <h3>About {{ explode(' ', $tutor->name)[0] }}</h3>
                        </div>
                        <div class="card-content">
                            @if($tutor->bio)
                                <p class="bio-text">{{ $tutor->bio }}</p>
                            @else
                                <p class="bio-text">
                                    {{ $tutor->name }} is an experienced tutor with {{ $tutor->experience_years }} years of teaching experience. 
                                    They specialize in {{ implode(', ', array_slice($tutor->subjects, 0, 3)) }} and have successfully taught {{ $tutor->total_students }} students.
                                </p>
                            @endif
                        </div>
                    </div>

                    <!-- Enhanced Subjects & Expertise -->
                    <div class="content-card subjects-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3>Subjects & Expertise</h3>
                        </div>
                        <div class="card-content">
                            <div class="subjects-section">
                                <h5>Teaching Subjects:</h5>
                                <div class="enhanced-subjects-grid">
                                    @foreach($tutor->subjects as $subject)
                                        <div class="subject-chip">
                                            <i class="fas fa-book-open"></i>
                                            <span>{{ $subject }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="levels-section">
                                <h5>Teaching Levels:</h5>
                                <div class="enhanced-levels-grid">
                                    @foreach($tutor->levels as $level)
                                        <div class="level-chip">
                                            <i class="fas fa-layer-group"></i>
                                            <span>{{ $level }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Education & Experience -->
                    <div class="content-card education-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <h3>Education & Experience</h3>
                        </div>
                        <div class="card-content">
                            <div class="education-item">
                                <div class="education-icon">
                                    <i class="fas fa-diploma"></i>
                                </div>
                                <div class="education-details">
                                    <h6>Education</h6>
                                    <p>{{ $tutor->education ?: 'Education information not provided' }}</p>
                                </div>
                            </div>

                            <div class="experience-item">
                                <div class="experience-icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="experience-details">
                                    <h6>Teaching Experience</h6>
                                    <p>{{ $tutor->experience_text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Availability Calendar -->
                    <div class="content-card availability-card">
                        <div class="card-header">
                            <div class="header-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3>Weekly Availability</h3>
                        </div>
                        <div class="card-content">
                            @if($tutor->availability)
                                <div class="enhanced-availability-grid">
                                    @foreach($tutor->availability as $day => $times)
                                        <div class="day-card">
                                            <div class="day-header">
                                                <h6>{{ ucfirst($day) }}</h6>
                                            </div>
                                            <div class="day-times">
                                                @if(is_array($times) && count($times) > 0)
                                                    @foreach($times as $time)
                                                        <span class="time-chip available">
                                                            <i class="fas fa-clock"></i>
                                                            {{ ucfirst($time) }}
                                                        </span>
                                                    @endforeach
                                                @else
                                                    <span class="time-chip unavailable">
                                                        <i class="fas fa-times"></i>
                                                        Not available
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p class="availability-note">Please contact the tutor to discuss availability.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Right Column - Contact & Booking -->
                <div class="col-lg-4">
                    <!-- Contact Card -->
                    <div class="contact-card mb-4" id="contact-section" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); position: sticky; top: 20px;">
                        <h4 style="color: #333; margin-bottom: 25px; font-weight: 600; text-align: center;">
                            <i class="fa fa-handshake-o" style="color: #667eea;"></i> Connect with {{ explode(' ', $tutor->name)[0] }}
                        </h4>

                        <!-- Pricing Info -->
                        <div class="pricing-info mb-4" style="text-align: center; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                            <h3 style="color: #28a745; margin-bottom: 10px; font-weight: 700;">${{ $tutor->hourly_rate }}/hour</h3>
                            @if($tutor->min_rate && $tutor->max_rate)
                                <p style="color: #666; margin: 0;">Range: ${{ $tutor->min_rate }} - ${{ $tutor->max_rate }}</p>
                            @endif
                        </div>

                        <!-- Tutoring Options -->
                        <div class="tutoring-options mb-4">
                            <h6 style="color: #333; margin-bottom: 15px;">Tutoring Options:</h6>
                            @if($tutor->online_tutoring)
                                <div class="option-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fa fa-globe" style="color: #28a745; margin-right: 10px; width: 20px;"></i>
                                    <span>Online Sessions Available</span>
                                </div>
                            @endif
                            @if($tutor->in_person_tutoring)
                                <div class="option-item mb-2" style="display: flex; align-items: center;">
                                    <i class="fa fa-home" style="color: #007bff; margin-right: 10px; width: 20px;"></i>
                                    <span>In-Person Sessions Available</span>
                                </div>
                            @endif
                        </div>

                        <!-- Location -->
                        <div class="location-info mb-4">
                            <h6 style="color: #333; margin-bottom: 10px;">Location:</h6>
                            <p style="color: #666; margin: 0;">
                                <i class="fa fa-map-marker" style="color: #dc3545; margin-right: 8px;"></i>
                                {{ $tutor->city }}, {{ $tutor->state }}, {{ $tutor->country }}
                            </p>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form id="contactTutorForm" style="margin-bottom: 20px;">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="Your Name" required style="border-radius: 5px; padding: 12px;">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" placeholder="Your Email" required style="border-radius: 5px; padding: 12px;">
                                </div>
                                <div class="form-group mb-3">
                                    <select class="form-control" required style="border-radius: 5px; padding: 12px;">
                                        <option value="">Select Subject</option>
                                        @foreach($tutor->subjects as $subject)
                                            <option value="{{ $subject }}">{{ $subject }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" rows="4" placeholder="Message (optional)" style="border-radius: 5px; padding: 12px;"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block btn-lg" style="background: #667eea; border: none; border-radius: 5px; font-weight: 600; padding: 15px;">
                                    <i class="fa fa-envelope"></i> Send Message
                                </button>
                            </form>

                            <button class="btn btn-success btn-block btn-lg" onclick="bookSession()" style="border-radius: 5px; font-weight: 600; padding: 15px;">
                                <i class="fa fa-calendar"></i> Book Session
                            </button>
                        </div>

                        <!-- Contact Info -->
                        <div class="direct-contact mt-4" style="text-align: center; padding-top: 20px; border-top: 1px solid #eee;">
                            <p style="color: #666; margin-bottom: 10px; font-size: 0.9rem;">
                                <i class="fa fa-phone" style="color: #28a745;"></i> 
                                Last active: {{ $tutor->last_active_at ? $tutor->last_active_at->diffForHumans() : 'Recently' }}
                            </p>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="quick-stats" style="background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <h5 style="color: #333; margin-bottom: 20px; font-weight: 600; text-align: center;">Quick Stats</h5>
                        
                        <div class="stat-row mb-3" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #f0f0f0;">
                            <span style="color: #666;">Response Rate</span>
                            <span style="color: #28a745; font-weight: 600;">{{ rand(85, 99) }}%</span>
                        </div>
                        
                        <div class="stat-row mb-3" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0; border-bottom: 1px solid #f0f0f0;">
                            <span style="color: #666;">Response Time</span>
                            <span style="color: #007bff; font-weight: 600;">{{ rand(1, 4) }} hours</span>
                        </div>
                        
                        <div class="stat-row" style="display: flex; justify-content: space-between; align-items: center; padding: 10px 0;">
                            <span style="color: #666;">Repeat Students</span>
                            <span style="color: #667eea; font-weight: 600;">{{ rand(60, 90) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Profile Hero Section */
.profile-hero-section {
    min-height: 500px;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.floating-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 1;
}

.particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    animation: floatParticle 25s infinite linear;
}

.particle-1 { width: 60px; height: 60px; top: 10%; left: 10%; animation-delay: 0s; }
.particle-2 { width: 40px; height: 40px; top: 70%; right: 20%; animation-delay: 5s; }
.particle-3 { width: 80px; height: 80px; bottom: 20%; left: 30%; animation-delay: 10s; }
.particle-4 { width: 30px; height: 30px; top: 30%; right: 10%; animation-delay: 15s; }
.particle-5 { width: 50px; height: 50px; bottom: 60%; right: 40%; animation-delay: 20s; }

@keyframes floatParticle {
    0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); opacity: 0.3; }
    25% { transform: translateY(-30px) translateX(20px) rotate(90deg); opacity: 0.8; }
    50% { transform: translateY(-60px) translateX(-10px) rotate(180deg); opacity: 0.5; }
    75% { transform: translateY(-30px) translateX(-30px) rotate(270deg); opacity: 0.8; }
}

/* Enhanced Profile Image */
.profile-image-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: 20px;
}

.enhanced-profile-image {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    object-fit: cover;
    border: 6px solid rgba(255,255,255,0.3);
    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    transition: transform 0.3s ease;
}

.enhanced-profile-image:hover {
    transform: scale(1.05);
}

.enhanced-default-avatar {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    border: 6px solid rgba(255,255,255,0.3);
    font-size: 5rem;
    font-weight: 700;
    color: white;
    backdrop-filter: blur(10px);
}

.enhanced-verified-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 12px;
    border-radius: 50%;
    font-size: 1.2rem;
    box-shadow: 0 8px 25px rgba(16,185,129,0.4);
    animation: pulse 2s infinite;
}

.enhanced-online-status {
    position: absolute;
    bottom: 20px;
    right: 20px;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 4px solid white;
    display: flex;
    align-items: center;
    justify-content: center;
}

.enhanced-online-status.active {
    background: #10b981;
}

.enhanced-online-status.inactive {
    background: #ef4444;
}

.status-pulse {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: white;
    animation: statusPulse 2s infinite;
}

@keyframes statusPulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
}

/* Profile Info Card */
.profile-info-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.2);
    border-radius: 25px;
    padding: 40px;
    color: white;
    box-shadow: 0 25px 50px rgba(0,0,0,0.1);
}

.profile-name {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 10px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.3);
}

.profile-title {
    font-size: 1.2rem;
    opacity: 0.9;
    margin-bottom: 25px;
    font-weight: 300;
}

/* Enhanced Rating */
.rating-showcase {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.rating-stars-large {
    color: #fbbf24;
    font-size: 1.5rem;
}

.rating-text {
    font-size: 1.1rem;
    font-weight: 500;
    opacity: 0.9;
}

/* Enhanced Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.stat-card {
    background: rgba(255,255,255,0.1);
    border-radius: 20px;
    padding: 25px;
    text-align: center;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.1);
    transition: transform 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 1.5rem;
}

.stat-icon.price {
    background: linear-gradient(135deg, #10b981, #059669);
}

.stat-icon.students {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
}

.stat-icon.experience {
    background: linear-gradient(135deg, #f59e0b, #d97706);
}

.stat-content h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.stat-content p {
    opacity: 0.8;
    margin: 0;
    font-size: 0.9rem;
}

/* Enhanced Action Buttons */
.profile-actions {
    display: flex;
    gap: 15px;
}

.action-btn {
    flex: 1;
    padding: 15px 25px;
    border: none;
    border-radius: 15px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
    text-decoration: none;
    cursor: pointer;
}

.action-btn.primary {
    background: linear-gradient(135deg, #ff6b6b, #ee5a24);
    color: white;
    box-shadow: 0 8px 25px rgba(255,107,107,0.4);
}

.action-btn.primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(255,107,107,0.6);
}

.action-btn.secondary {
    background: rgba(255,255,255,0.2);
    color: white;
    border: 2px solid rgba(255,255,255,0.3);
    backdrop-filter: blur(10px);
}

.action-btn.secondary:hover {
    background: rgba(255,255,255,0.3);
    transform: translateY(-2px);
}

/* Enhanced Main Content */
.profile-main-content {
    padding: 60px 0;
    background: #f8fafc;
}

.content-card {
    background: white;
    border-radius: 20px;
    margin-bottom: 30px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.08);
    border: 1px solid rgba(0,0,0,0.05);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.content-card:hover {
    transform: translateY(-5px);
}

.card-header {
    background: linear-gradient(135deg, #f8fafc, #e2e8f0);
    padding: 25px 30px;
    display: flex;
    align-items: center;
    gap: 15px;
    border-bottom: 1px solid #e2e8f0;
}

.header-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
}

.card-header h3 {
    margin: 0;
    color: #1e293b;
    font-weight: 700;
    font-size: 1.3rem;
}

.card-content {
    padding: 30px;
}

.bio-text {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #4b5563;
    margin: 0;
}

/* Enhanced Subjects & Levels */
.subjects-section, .levels-section {
    margin-bottom: 30px;
}

.subjects-section:last-child, .levels-section:last-child {
    margin-bottom: 0;
}

.subjects-section h5, .levels-section h5 {
    color: #374151;
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.enhanced-subjects-grid, .enhanced-levels-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 15px;
}

.subject-chip, .level-chip {
    background: linear-gradient(135deg, #f0f4ff, #e0e7ff);
    border: 2px solid #c7d2fe;
    color: #4338ca;
    padding: 15px 20px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.subject-chip:hover, .level-chip:hover {
    background: linear-gradient(135deg, #e0e7ff, #c7d2fe);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(67,56,202,0.2);
}

/* Education & Experience */
.education-item, .experience-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
}

.education-item:last-child, .experience-item:last-child {
    margin-bottom: 0;
}

.education-icon, .experience-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #10b981, #059669);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.education-details h6, .experience-details h6 {
    color: #374151;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 1rem;
}

.education-details p, .experience-details p {
    color: #6b7280;
    margin: 0;
    line-height: 1.6;
}

/* Enhanced Availability */
.enhanced-availability-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 20px;
}

.day-card {
    background: #f8fafc;
    border: 2px solid #e2e8f0;
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.day-card:hover {
    border-color: #667eea;
    transform: translateY(-2px);
}

.day-header {
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    padding: 15px;
    text-align: center;
}

.day-header h6 {
    margin: 0;
    font-weight: 600;
    font-size: 0.9rem;
}

.day-times {
    padding: 15px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.time-chip {
    padding: 8px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 6px;
    text-align: center;
    justify-content: center;
}

.time-chip.available {
    background: #d1fae5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.time-chip.unavailable {
    background: #fee2e2;
    color: #991b1b;
    border: 1px solid #fca5a5;
}

.availability-note {
    color: #6b7280;
    font-style: italic;
    text-align: center;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .profile-name {
        font-size: 2.2rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .profile-actions {
        flex-direction: column;
    }
    
    .enhanced-subjects-grid, .enhanced-levels-grid {
        grid-template-columns: 1fr;
    }
    
    .enhanced-availability-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .education-item, .experience-item {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .enhanced-profile-image, .enhanced-default-avatar {
        width: 180px;
        height: 180px;
    }
    
    .profile-info-card {
        padding: 25px;
    }
    
    .enhanced-availability-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

@section('scripts')
<script>
function scrollToContact() {
    $('html, body').animate({
        scrollTop: $('#contact-section').offset().top - 100
    }, 800);
}

function bookSession() {
    alert('Booking system integration coming soon! Please use the contact form for now.');
}

$(document).ready(function() {
    // Contact form submission
    $('#contactTutorForm').submit(function(e) {
        e.preventDefault();
        alert('Message sent successfully! The tutor will respond within 24 hours.');
        this.reset();
    });

    // Smooth scrolling for internal links
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });
});
</script>
@endsection 