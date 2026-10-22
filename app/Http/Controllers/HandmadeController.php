<?php

namespace App\Http\Controllers;

use App\Models\Handmade;
use Illuminate\Http\Request;

class HandmadeController extends Controller
{
    public function home()
    {
        $featured = Handmade::query()->latest()->take(3)->get();
        $productCount = Handmade::count();

        return view('home', compact('featured', 'productCount'));
    }

    public function index(Request $request)
    {
        $query = Handmade::query();

        if ($request->filled('q')) {
            $search = $request->string('q')->toString();
            $query->where(function ($builder) use ($search) {
                $builder->where('name', 'like', "%{$search}%")
                    ->orWhere('artisan', 'like', "%{$search}%")
                    ->orWhere('material', 'like', "%{$search}%");
            });
        }

        if ($request->filled('material')) {
            $query->where('material', $request->string('material')->toString());
        }

        $handmades = $query->orderBy('name')->paginate(9)->withQueryString();
        $materials = Handmade::query()->select('material')->distinct()->orderBy('material')->pluck('material');

        return view('handmades.index', compact('handmades', 'materials'));
    }

    public function show(Handmade $handmade)
    {
        $related = Handmade::query()
            ->where('id', '!=', $handmade->id)
            ->where('material', $handmade->material)
            ->take(3)
            ->get();

        return view('handmades.show', compact('handmade', 'related'));
    }
}
