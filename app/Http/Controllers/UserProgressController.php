<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Frameworks;
use App\Models\Chapters;
use App\Models\Progress;

class UserProgressController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        $search = $request->query('search'); // Ambil query pencarian

        $frameworks = Frameworks::with('chapters')->get();
        $progress = Progress::where('user_id', $user->id)->get();

        $frameworkProgress = [];
        foreach ($frameworks as $framework) {
            $chapterIds = $framework->chapters->pluck('id');
            $totalChapters = $chapterIds->count();
            $completedChapters = $progress->whereIn('chapter_id', $chapterIds)->where('is_completed', true)->count();

            // Tampilkan framework yang sudah pernah dipelajari (ada progress)
            if ($completedChapters > 0) {
                // Cek apakah sudah complete
                $isCompleted = $completedChapters == $totalChapters && $totalChapters > 0;

                // Cari progress terakhir user di framework ini
                $lastProgress = $progress->whereIn('chapter_id', $chapterIds)
                                         ->sortByDesc('updated_at')
                                         ->first();
                $lastChapter = $lastProgress
                    ? Chapters::find($lastProgress->chapter_id)
                    : null;

                $frameworkProgress[] = [
                    'framework' => $framework,
                    'total_chapters' => $totalChapters,
                    'completed_chapters' => $completedChapters,
                    'percentage' => $totalChapters > 0 ? round(($completedChapters / $totalChapters) * 100) : 0,
                    'is_completed' => $isCompleted,
                    'last_learned_chapter_slug' => $lastChapter ? $lastChapter->slug : null,
                ];
            }
        }

        // Filtering berdasarkan nama framework jika ada pencarian
        if ($search) {
            $frameworkProgress = collect($frameworkProgress)->filter(function ($item) use ($search) {
                return stripos($item['framework']->name, $search) !== false;
            })->values()->all();
        }

        // Framework yang sudah dipelajari (ada progress)
        $learnedFrameworks = $frameworkProgress
            ? collect($frameworkProgress)->filter(fn($f) => $f['completed_chapters'] > 0)->pluck('framework')
            : collect();

        return view('user.progress', compact('frameworkProgress', 'learnedFrameworks'));
    }
}
