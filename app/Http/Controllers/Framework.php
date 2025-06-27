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

        $frameworks = $query->get();

        if ($request->ajax()) {
            return view('partials.frameworkPart', compact('frameworks'))->render();
        }

        return view('framework', compact('frameworks'));
    }
}
