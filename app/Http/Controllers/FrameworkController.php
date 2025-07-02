<?php

namespace App\Http\Controllers;
use App\Models\Frameworks;
use App\Models\Chapters;
use App\Models\Progress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    /**
     * Method untuk menangani klik tombol "Learn more"
     * Redirect langsung ke Chapter 1 dari framework yang dipilih
     */
    public function startLearning($frameworkSlug)
    {
        // Ambil framework berdasarkan slug
        $framework = Frameworks::where('slug', $frameworkSlug)->firstOrFail();

        // Cek progress terakhir user di framework ini
        $lastProgress = null;
        if (Auth::check()) {
            $chapterIds = Chapters::where('framework_id', $framework->id)->pluck('id');
            $lastProgress = Progress::where('user_id', Auth::id())
                ->whereIn('chapter_id', $chapterIds)
                ->orderByDesc('updated_at')
                ->first();
        }

        if ($lastProgress) {
            // Redirect ke chapter terakhir yang dipelajari user
            $chapter = Chapters::find($lastProgress->chapter_id);
            if ($chapter) {
                return redirect()->route('chapter.show', [
                    'framework' => $framework->slug,
                    'chapter' => $chapter->slug
                ]);
            }
        }
        
        // Ambil chapter pertama (order = 1) dari framework tersebut
        $firstChapter = Chapters::where('framework_id', $framework->id)
                              ->orderBy('order', 'asc')
                              ->first();
        
        // Jika tidak ada chapter, redirect ke halaman framework
        if (!$firstChapter) {
            return redirect()->route('framework.show', $framework->slug)
                           ->with('error', 'Belum ada chapter tersedia untuk framework ini.');
        }
        
        // Redirect ke chapter pertama
        return redirect()->route('chapter.show', [
            'framework' => $framework->slug,
            'chapter' => $firstChapter->slug
        ]);
    }
    
    /**
     * Method untuk menampilkan chapter
     */
    public function showChapter($frameworkSlug, $chapterSlug)
    {
        // Ambil framework
        $framework = Frameworks::where('slug', $frameworkSlug)->firstOrFail();
        
        // Ambil chapter
        $chapter = Chapters::where('slug', $chapterSlug)
                          ->where('framework_id', $framework->id)
                          ->with('sections')
                          ->firstOrFail();

        // Cek jika user sudah login
        if (Auth::check()) {
            Progress::firstOrCreate(
                [
                    'user_id' => Auth::id(),
                    'chapter_id' => $chapter->id,
                ],
                [
                    'is_completed' => true, // Atau false jika ingin manual selesai
                ]
            );
        }
        
        // Ambil semua chapters untuk navigasi
        $allChapters = Chapters::where('framework_id', $framework->id)
                              ->orderBy('order', 'asc')
                              ->get();
        
        return view('learning.chapter', compact('framework', 'chapter', 'allChapters'));
    }
    
    /**
     * Method alternatif: langsung ke section pertama dari chapter pertama
     */
    public function startLearningDirect($frameworkSlug)
    {
        $framework = Frameworks::where('slug', $frameworkSlug)->firstOrFail();
        
        // Ambil chapter pertama dengan sections
        $firstChapter = Chapters::where('framework_id', $framework->id)
                              ->with('sections')
                              ->orderBy('order', 'asc')
                              ->first();
        
        if (!$firstChapter) {
            return redirect()->route('framework.show', $framework->slug)
                           ->with('error', 'Belum ada chapter tersedia.');
        }
        
        // Jika ada sections, langsung ke section pertama
        if ($firstChapter->sections->count() > 0) {
            $firstSection = $firstChapter->sections->sortBy('order')->first();
            
            return redirect()->route('learning.section', [
                'framework' => $framework->slug,
                'chapter' => $firstChapter->slug,
                'section' => $firstSection->id
            ]);
        }
        
        // Jika tidak ada section, ke chapter saja
        return redirect()->route('chapter.show', [
            'framework' => $framework->slug,
            'chapter' => $firstChapter->slug
        ]);
    }
}
