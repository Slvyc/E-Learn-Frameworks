<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frameworks;
use App\Models\Chapters;
use App\Models\Progress;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Ambil semua progress user
        $progress = Progress::where('user_id', $user->id)->get();

        // Framework yang diikuti user (ada progress)
        $frameworkIds = $progress->pluck('framework_id')->unique()->filter();
        $tutorialCount = $frameworkIds->count();

        // Hitung total chapter yang sudah selesai dan total chapter yang tersedia
        $completedChapters = $progress->where('is_completed', true)->count();
        $totalChapters = Chapters::whereIn('framework_id', $frameworkIds)->count();

        // Persentase completed
        $completedPercent = $totalChapters > 0 ? round(($completedChapters / $totalChapters) * 100) : 0;

        // Ambil progress terakhir user
        $lastProgress = $progress->sortByDesc('updated_at')->first();
        $lastFramework = null;
        $lastChapter = null;
        $lastPercent = 0;

        if ($lastProgress) {
            $lastFramework = Frameworks::find($lastProgress->framework_id);
            $lastChapter = Chapters::find($lastProgress->chapter_id);

            // Hitung persentase progress framework ini
            if ($lastFramework) {
                $chapterIds = $lastFramework->chapters->pluck('id');
                $total = $chapterIds->count();
                $completed = $progress->where('framework_id', $lastFramework->id)->where('is_completed', true)->count();
                $lastPercent = $total > 0 ? round(($completed / $total) * 100) : 0;
            }
        }

        // Ambil 4 framework terbaru yang baru ditambahkan admin
        $recommendedFrameworks = Frameworks::orderBy('created_at', 'desc')->take(4)->get();

        return view('user.dashboard', compact(
            'tutorialCount',
            'completedPercent',
            'lastFramework',
            'lastChapter',
            'lastPercent',
            'recommendedFrameworks'
        ));
    }
}
