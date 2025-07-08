<?php

namespace App\Http\Controllers;

use App\Model\Frameworks;
use App\Models\Frameworks as ModelsFrameworks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Framework extends Controller
{
    public function index(Request $request)
    {
        $query = ModelsFrameworks::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                ->orWhere('language', 'LIKE', "%{$search}%")
                ->orWhere('tech_stack', 'LIKE', "%{$search}%");
        }

        // Filter berdasarkan tech_stack jika ada
        if ($request->filled('tech_stack')) {
            $query->where('tech_stack', $request->input('tech_stack'));
        }

        $frameworks = $query->get();

        // Hitung jumlah framework per tech_stack
        $frontendCount = ModelsFrameworks::where('tech_stack', 'frontend')->count();
        $backendCount = ModelsFrameworks::where('tech_stack', 'backend')->count();
        $mobileCount = ModelsFrameworks::where('tech_stack', 'mobiledev')->count();

        if ($request->ajax()) {
            return view('partials.frameworkPart', compact('frameworks'))->render();
        }

        return view('framework', compact('frameworks', 'frontendCount', 'backendCount', 'mobileCount'));
    }
}
