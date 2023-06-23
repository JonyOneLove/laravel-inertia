<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlatformController extends Controller
{
    //
    public function index()
    {
        $platforms = Platform::all();
        return Inertia::render('Platforms/Index', [
            'platforms' => $platforms,
        ]);
    }

    public function show(Platform $platform)
    {
    }

    public function edit(Platform $platform)
    {
        return Inertia::render('Platforms/Form', [
            'platform' => $platform,
        ]);
    }

    public function create()
    {
        return Inertia::render('Platforms/Form', [
            'platform' => [],
        ]);  
    }


    public function store(Request $request)
    {
        $attributes = $request->all();
        // Log::info($attributes);
        $attributes['team_id'] = auth()->user()->ownedTeams()->first()->id;
        $platform = Platform::create($attributes);
        return redirect()->route('platforms.index');
    }

    public function update(Platform $platform, Request $request)
    {
        $platform->update($request->all());

        // Log::info($request->all());
        // $platform->update($request->except('id'));
        return redirect()->route('platforms.index');
    }

    public function destroy(Platform $platform)
    {   
        $platform->delete();
        return redirect()->route('platforms.index');
    }
}
