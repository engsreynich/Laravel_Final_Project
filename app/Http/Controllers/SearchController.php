<?php
namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $class_type = $request->input('class_type');

        $teachers = Teacher::query()
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'LIKE', "%{$query}%")
                         ->orWhere('subject', 'LIKE', "%{$query}%");
            })
            ->when($class_type, function ($q) use ($class_type) {
                return $q->where('class_type', $class_type);
            })
            ->get();

        return view('pages.search_results', compact('teachers', 'query', 'class_type'));
    }
}