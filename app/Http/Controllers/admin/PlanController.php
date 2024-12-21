<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plans = Plan::all(); // Fetch all plans from the database
        return view('admin.plan.index', compact('plans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|min:0',
            'min_profit' => 'required|numeric|min:0',
            'max_profit' => 'required|numeric|min:0',
            'status' => 'nullable|boolean', 
        ]);

        // Create a new Plan instance
        $plan = new Plan();
        $plan->name = $request->input('name'); 
        $plan->min_price = $request->input('min_price');
        $plan->max_price = $request->input('max_price');
        $plan->min_profit = $request->input('min_profit');
        $plan->max_profit = $request->input('max_profit');
        $plan->status = $request->input('status', true); 
        $plan->save();

        
        return redirect()->route('admin.plan.index')->with('success', 'Plan created successfully!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $plan = Plan::findOrFail($id);

        // Pass the plan data to the view
        return view('admin.plan.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|min:0',
            'min_profit' => 'required|numeric|min:0',
            'max_profit' => 'required|numeric|min:0',
            'status' => 'nullable|boolean', // Optional, defaults to true if not provided
        ]);

        // Find the plan by ID
        $plan = Plan::findOrFail($id); // If plan not found, it will throw a 404 error

        // Update the plan with validated input
        $plan->name = $request->input('name');
        $plan->min_price = $request->input('min_price');
        $plan->max_price = $request->input('max_price');
        $plan->min_profit = $request->input('min_profit');
        $plan->max_profit = $request->input('max_profit');
        $plan->status = $request->input('status', $plan->status); // Default to current status if not provided

        // Save the updated plan
        $plan->save();;

        return redirect()->route('admin.plan.index')->with('success', 'Plan updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
