<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Progress;
use App\Models\Frameworks;
use App\Models\Chapters;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $user = Auth::user();
            $lastFramework = null;
            $lastPercent = 0;

            if ($user) {
                $progress = Progress::where('user_id', $user->id)->get();
                $lastProgress = $progress->sortByDesc('updated_at')->first();

                if ($lastProgress) {
                    $lastFramework = Frameworks::find($lastProgress->framework_id);
                    if ($lastFramework) {
                        $chapterIds = $lastFramework->chapters->pluck('id');
                        $total = $chapterIds->count();
                        $completed = $progress->where('framework_id', $lastFramework->id)->where('is_completed', true)->count();
                        $lastPercent = $total > 0 ? round(($completed / $total) * 100) : 0;
                    }
                }
            }

            $view->with('lastFramework', $lastFramework)
                 ->with('lastPercent', $lastPercent);
        });
    }
}
