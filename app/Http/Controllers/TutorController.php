<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TutorController extends Controller
{
    /**
     * Display the main tutor search page
     */
    public function index(Request $request)
    {
        $filters = $request->only([
            'search', 'subject', 'level', 'min_price', 'max_price', 
            'city', 'state', 'min_rating', 'online_only', 'in_person_only'
        ]);

        $tutors = Tutor::active()
            ->search($filters)
            ->orderBy('rating', 'desc')
            ->orderBy('total_reviews', 'desc')
            ->paginate(12)
            ->appends($filters);

        // Get unique subjects and levels for filter options
        $subjects = $this->getUniqueSubjects();
        $levels = $this->getUniqueLevels();
        $cities = $this->getUniqueCities();

        return view('tutors.index', compact('tutors', 'subjects', 'levels', 'cities', 'filters'));
    }

    /**
     * Show individual tutor profile
     */
    public function show(Tutor $tutor)
    {
        if (!$tutor->is_active || !$tutor->is_available) {
            abort(404);
        }

        return view('tutors.show', compact('tutor'));
    }

    /**
     * API endpoint for tutor search (for AJAX requests)
     */
    public function search(Request $request): JsonResponse
    {
        $filters = $request->only([
            'search', 'subject', 'level', 'min_price', 'max_price', 
            'city', 'state', 'min_rating', 'online_only', 'in_person_only'
        ]);

        $tutors = Tutor::active()
            ->search($filters)
            ->orderBy('rating', 'desc')
            ->orderBy('total_reviews', 'desc')
            ->paginate(12)
            ->appends($filters);

        return response()->json([
            'tutors' => $tutors->items(),
            'pagination' => [
                'current_page' => $tutors->currentPage(),
                'last_page' => $tutors->lastPage(),
                'per_page' => $tutors->perPage(),
                'total' => $tutors->total(),
                'has_more' => $tutors->hasMorePages()
            ]
        ]);
    }

    /**
     * Get filter options for the search form
     */
    public function getFilterOptions(): JsonResponse
    {
        return response()->json([
            'subjects' => $this->getUniqueSubjects(),
            'levels' => $this->getUniqueLevels(),
            'cities' => $this->getUniqueCities(),
            'price_range' => [
                'min' => Tutor::active()->min('hourly_rate') ?? 0,
                'max' => Tutor::active()->max('hourly_rate') ?? 100
            ]
        ]);
    }

    /**
     * Get trending/featured tutors for homepage
     */
    public function featured(Request $request): JsonResponse
    {
        $tutors = Tutor::active()
            ->verified()
            ->where('rating', '>=', 4.5)
            ->orderBy('total_students', 'desc')
            ->orderBy('rating', 'desc')
            ->limit(8)
            ->get();

        return response()->json($tutors);
    }

    /**
     * Get tutors by subject
     */
    public function bySubject(string $subject)
    {
        $tutors = Tutor::active()
            ->whereJsonContains('subjects', $subject)
            ->orderBy('rating', 'desc')
            ->paginate(12);

        $subjects = $this->getUniqueSubjects();
        $levels = $this->getUniqueLevels();
        $cities = $this->getUniqueCities();

        $filters = ['subject' => $subject];

        return view('tutors.index', compact('tutors', 'subjects', 'levels', 'cities', 'filters'));
    }

    /**
     * Helper method to get unique subjects
     */
    private function getUniqueSubjects(): array
    {
        $allSubjects = Tutor::active()
            ->pluck('subjects')
            ->flatten()
            ->unique()
            ->filter()
            ->sort()
            ->values()
            ->toArray();

        return $allSubjects;
    }

    /**
     * Helper method to get unique levels
     */
    private function getUniqueLevels(): array
    {
        $allLevels = Tutor::active()
            ->pluck('levels')
            ->flatten()
            ->unique()
            ->filter()
            ->sort()
            ->values()
            ->toArray();

        return $allLevels;
    }

    /**
     * Helper method to get unique cities
     */
    private function getUniqueCities(): array
    {
        return Tutor::active()
            ->whereNotNull('city')
            ->pluck('city')
            ->unique()
            ->filter()
            ->sort()
            ->values()
            ->toArray();
    }
}
