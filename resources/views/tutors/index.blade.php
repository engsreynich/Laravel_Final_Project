@extends('layout.app')

@section('title', 'Find Tutors - Advanced Search & Discovery')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="tutor_banner" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 80px 0; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 20px;">Find Your Perfect Tutor</h1>
                    <p style="font-size: 1.2rem; margin-bottom: 40px;">Search, Discover & Match with Expert Tutors</p>
                    
                    <!-- Quick Search Bar -->
                    <div class="quick-search" style="max-width: 600px; margin: 0 auto;">
                        <form action="{{ route('tutors.index') }}" method="GET" id="quickSearchForm">
                            <div class="input-group" style="background: white; border-radius: 50px; padding: 10px;">
                                <input type="text" name="search" class="form-control" placeholder="Search by subject, tutor name, or keywords..." 
                                       value="{{ $filters['search'] ?? '' }}" style="border: none; font-size: 1.1rem;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" style="border-radius: 50px; padding: 10px 30px;">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters & Results Section -->
    <div class="container" style="margin-top: 40px; margin-bottom: 60px;">
        <div class="row">
            <!-- Filters Sidebar -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="filters-section" style="background: #f8f9fa; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="color: #333; margin-bottom: 25px; font-weight: 600;">
                        <i class="fa fa-filter" style="color: #667eea;"></i> Advanced Filters
                    </h4>
                    
                    <form action="{{ route('tutors.index') }}" method="GET" id="filterForm">
                        <input type="hidden" name="search" value="{{ $filters['search'] ?? '' }}">
                        
                        <!-- Subject Filter -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">Subject</label>
                            <select name="subject" class="form-control filter-select">
                                <option value="">All Subjects</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject }}" {{ ($filters['subject'] ?? '') == $subject ? 'selected' : '' }}>
                                        {{ $subject }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Level Filter -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">Level</label>
                            <select name="level" class="form-control filter-select">
                                <option value="">All Levels</option>
                                @foreach($levels as $level)
                                    <option value="{{ $level }}" {{ ($filters['level'] ?? '') == $level ? 'selected' : '' }}>
                                        {{ $level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Price Range -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">Price Range ($/hour)</label>
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="min_price" class="form-control" placeholder="Min" 
                                           value="{{ $filters['min_price'] ?? '' }}" min="0">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="max_price" class="form-control" placeholder="Max" 
                                           value="{{ $filters['max_price'] ?? '' }}" min="0">
                                </div>
                            </div>
                        </div>

                        <!-- Location Filter -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">City</label>
                            <select name="city" class="form-control filter-select">
                                <option value="">All Cities</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city }}" {{ ($filters['city'] ?? '') == $city ? 'selected' : '' }}>
                                        {{ $city }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">Minimum Rating</label>
                            <select name="min_rating" class="form-control filter-select">
                                <option value="">Any Rating</option>
                                <option value="4.5" {{ ($filters['min_rating'] ?? '') == '4.5' ? 'selected' : '' }}>4.5+ Stars</option>
                                <option value="4.0" {{ ($filters['min_rating'] ?? '') == '4.0' ? 'selected' : '' }}>4.0+ Stars</option>
                                <option value="3.5" {{ ($filters['min_rating'] ?? '') == '3.5' ? 'selected' : '' }}>3.5+ Stars</option>
                                <option value="3.0" {{ ($filters['min_rating'] ?? '') == '3.0' ? 'selected' : '' }}>3.0+ Stars</option>
                            </select>
                        </div>

                        <!-- Availability Type -->
                        <div class="filter-group mb-4">
                            <label class="filter-label">Availability</label>
                            <div class="form-check">
                                <input type="checkbox" name="online_only" value="1" class="form-check-input" 
                                       {{ ($filters['online_only'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label">Online Tutoring</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="in_person_only" value="1" class="form-check-input" 
                                       {{ ($filters['in_person_only'] ?? false) ? 'checked' : '' }}>
                                <label class="form-check-label">In-Person Tutoring</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="background: #667eea; border: none; padding: 12px; border-radius: 5px; font-weight: 600;">
                            Apply Filters
                        </button>
                        
                        <a href="{{ route('tutors.index') }}" class="btn btn-outline-secondary btn-block mt-2">
                            Clear All Filters
                        </a>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="col-lg-9 col-md-8">
                <!-- Results Header -->
                <div class="results-header mb-4" style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h3 style="margin: 0; color: #333;">
                                {{ $tutors->total() }} Tutors Found
                                @if(!empty(array_filter($filters)))
                                    <small style="color: #666;">(filtered results)</small>
                                @endif
                            </h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="sort-options">
                                <select class="form-control d-inline-block" style="width: auto;" onchange="applySorting(this.value)">
                                    <option value="rating">Sort by Rating</option>
                                    <option value="price_low">Price: Low to High</option>
                                    <option value="price_high">Price: High to Low</option>
                                    <option value="experience">Experience</option>
                                    <option value="newest">Newest First</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tutors Grid -->
                <div class="tutors-grid">
                    @if($tutors->count() > 0)
                        <div class="row">
                            @foreach($tutors as $tutor)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="tutor-card" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                                        <!-- Tutor Image -->
                                        <div class="tutor-image" style="height: 200px; background: linear-gradient(45deg, #667eea, #764ba2); position: relative;">
                                            @if($tutor->profile_image)
                                                <img src="{{ $tutor->profile_image }}" alt="{{ $tutor->name }}" 
                                                     style="width: 100%; height: 100%; object-fit: cover;">
                                            @else
                                                <div class="default-avatar" style="display: flex; align-items: center; justify-content: center; height: 100%; color: white; font-size: 3rem; font-weight: bold;">
                                                    {{ strtoupper(substr($tutor->name, 0, 1)) }}
                                                </div>
                                            @endif
                                            
                                            <!-- Verified Badge -->
                                            @if($tutor->is_verified)
                                                <div class="verified-badge" style="position: absolute; top: 10px; right: 10px; background: #28a745; color: white; padding: 5px 10px; border-radius: 20px; font-size: 0.8rem;">
                                                    <i class="fa fa-check"></i> Verified
                                                </div>
                                            @endif

                                            <!-- Rating Badge -->
                                            <div class="rating-badge" style="position: absolute; bottom: 10px; left: 10px; background: rgba(0,0,0,0.8); color: white; padding: 5px 10px; border-radius: 20px;">
                                                <i class="fa fa-star" style="color: #ffc107;"></i> {{ $tutor->formatted_rating }}
                                                <small>({{ $tutor->total_reviews }})</small>
                                            </div>
                                        </div>

                                        <!-- Tutor Info -->
                                        <div class="tutor-info" style="padding: 20px;">
                                            <h5 style="margin-bottom: 10px; color: #333; font-weight: 600;">{{ $tutor->name }}</h5>
                                            
                                            <!-- Subjects -->
                                            <div class="subjects mb-2">
                                                @foreach(array_slice($tutor->subjects, 0, 3) as $subject)
                                                    <span class="badge badge-primary" style="background: #667eea; margin-right: 5px; margin-bottom: 5px;">{{ $subject }}</span>
                                                @endforeach
                                                @if(count($tutor->subjects) > 3)
                                                    <span class="badge badge-light">+{{ count($tutor->subjects) - 3 }} more</span>
                                                @endif
                                            </div>

                                            <!-- Experience & Location -->
                                            <div class="details mb-3" style="color: #666; font-size: 0.9rem;">
                                                <div><i class="fa fa-graduation-cap"></i> {{ $tutor->experience_text }}</div>
                                                <div><i class="fa fa-map-marker"></i> {{ $tutor->city }}, {{ $tutor->state }}</div>
                                                <div><i class="fa fa-users"></i> {{ $tutor->total_students }} students taught</div>
                                            </div>

                                            <!-- Price & Availability -->
                                            <div class="price-availability mb-3">
                                                <div class="price" style="font-size: 1.2rem; font-weight: 600; color: #28a745;">
                                                    ${{ $tutor->hourly_rate }}/hour
                                                </div>
                                                <div class="availability" style="font-size: 0.9rem; color: #666;">
                                                    @if($tutor->online_tutoring && $tutor->in_person_tutoring)
                                                        <i class="fa fa-globe"></i> Online & In-Person
                                                    @elseif($tutor->online_tutoring)
                                                        <i class="fa fa-globe"></i> Online Only
                                                    @else
                                                        <i class="fa fa-home"></i> In-Person Only
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Action Buttons -->
                                            <div class="action-buttons">
                                                <a href="{{ route('tutors.show', $tutor) }}" class="btn btn-primary btn-block" 
                                                   style="background: #667eea; border: none; border-radius: 5px; font-weight: 600;">
                                                    View Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="pagination-wrapper text-center mt-5">
                            {{ $tutors->links() }}
                        </div>
                    @else
                        <!-- No Results -->
                        <div class="no-results text-center" style="padding: 60px 20px;">
                            <i class="fa fa-search" style="font-size: 4rem; color: #ccc; margin-bottom: 20px;"></i>
                            <h3 style="color: #666; margin-bottom: 15px;">No Tutors Found</h3>
                            <p style="color: #999; margin-bottom: 25px;">Try adjusting your search criteria or filters to find more tutors.</p>
                            <a href="{{ route('tutors.index') }}" class="btn btn-primary">Browse All Tutors</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tutor-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

.filter-label {
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
}

.filter-select, .form-control {
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
}

.filter-select:focus, .form-control:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

.badge-primary {
    background-color: #667eea !important;
}

.pagination .page-link {
    color: #667eea;
    border-color: #667eea;
}

.pagination .page-item.active .page-link {
    background-color: #667eea;
    border-color: #667eea;
}
</style>
@endsection

@section('scripts')
<script>
// Auto-submit filters when changed
$(document).ready(function() {
    $('.filter-select, input[type="checkbox"]').change(function() {
        $('#filterForm').submit();
    });
});

// Sorting function
function applySorting(sortType) {
    const url = new URL(window.location);
    url.searchParams.set('sort', sortType);
    window.location.href = url.toString();
}

// Smooth scrolling for results
function scrollToResults() {
    $('html, body').animate({
        scrollTop: $('.results-header').offset().top - 100
    }, 500);
}
</script>
@endsection