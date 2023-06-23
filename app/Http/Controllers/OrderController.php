<?php

namespace App\Http\Controllers;

use App\Imports\LinksImport;
use App\Models\Order;
use App\Models\Project;
use App\Models\Platform;
use App\Models\Contractor;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['links', 'contractor', 'project'])->get();
        return Inertia::render('Orders/Index', [
            'orders' => $orders
        ]);
    }

    public function show(Order $order)
    {
    }

    public function edit(Order $order)
    {
        $order->load(['links']);
        $projects = Project::all();
        $platforms = Platform::all();
        $contractors = Contractor::all();
        return Inertia::render('Orders/Form', [
            'order' => $order,
            'projects' => $projects,
            'platforms' => $platforms,
            'contractors' => $contractors
        ]);
    }

    public function create()
    {
        $projects = Project::all();
        $platforms = Platform::all();
        $contractors = Contractor::all();
        return Inertia::render('Orders/Form', [
            'order' => [],
            'projects' => $projects,
            'platforms' => $platforms,
            'contractors' => $contractors
        ]);
    }


    public function store(Request $request)
    {
        $attributes = $request->only('project_id', 'contractor_id', 'platform_id', 'price');
        // Log::info($attributes);
        $attributes['team_id'] = auth()->user()->ownedTeams()->first()->id;
        $order = Order::create($attributes);
        $import = new LinksImport( $attributes['team_id'], $attributes['project_id'], $attributes['contractor_id'],  $order->id);

        Excel::import($import, request()->file('file'));

        return redirect()->route('orders.index');
    }

    public function update(Order $order, Request $request)
    {
        $order->update($request->all());

        // Log::info($request->all());
        // $platform->update($request->except('id'));
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
