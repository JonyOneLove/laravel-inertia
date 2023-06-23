<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Platform;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContractorController extends Controller
{
    public function index()
    {
        $contractors = Contractor::with(['orders'])->get();

        return Inertia::render('Contractors/Index', [
            'contractors' => $contractors
        ]);
    }

    public function show(Contractor $contractor)
    {
    }

    public function edit(Contractor $contractor)
    {
        $platforms = Platform::all();
        return Inertia::render('Contractors/Form', [
            'contractor' => $contractor,
            'platforms' => $platforms
        ]);
    }

    public function create()
    {
        $platforms = Platform::all();
        return Inertia::render('Contractors/Form', [
            'contractor' => [],
            'platforms' => $platforms
        ]);
    }


    public function store(Request $request)
    {
        $attributes = $request->all();
        // Log::info($attributes);
        $attributes['team_id'] = auth()->user()->ownedTeams()->first()->id;
        $contractor = Contractor::create($attributes);
        return redirect()->route('contractors.index');
    }

    public function update(Contractor $contractor, Request $request)
    {
        $contractor->update($request->all());
        return redirect()->route('contractors.index');
    }

    public function destroy(Contractor $contractor)
    {
        $contractor->delete();
        return redirect()->route('contractors.index');
    }
}
