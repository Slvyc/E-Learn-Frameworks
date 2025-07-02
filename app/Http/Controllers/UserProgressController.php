<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Frameworks;
use App\Models\Chapters;
use App\Models\Progress;

class UserProgressController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil semua framework
        $frameworks = Frameworks::with('chapters')->get();

        // Ambil progress user
        $progress = Progress::where('user_id', $user->id)->get();

        // Hitung persentase progress per framework
        $frameworkProgress = [];
        foreach ($frameworks as $framework) {
            $chapterIds = $framework->chapters->pluck('id');
            $totalChapters = $chapterIds->count();
            $completedChapters = $progress->whereIn('chapter_id', $chapterIds)->where('is_completed', true)->count();

            $frameworkProgress[] = [
                'framework' => $framework,
                'total_chapters' => $totalChapters,
                'completed_chapters' => $completedChapters,
                'percentage' => $totalChapters > 0 ? round(($completedChapters / $totalChapters) * 100) : 0,
            ];
        }

        // Framework yang sudah dipelajari (ada progress)
        $learnedFrameworks = $frameworkProgress
            ? collect($frameworkProgress)->filter(fn($f) => $f['completed_chapters'] > 0)->pluck('framework')
            : collect();

        return view('user.progress', compact('frameworkProgress', 'learnedFrameworks'));
    }
}
