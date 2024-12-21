<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $wallets = Wallet::all();
        return view('admin.wallet.index', compact('wallets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.wallet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $request->validate([
        'symbol' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'fees' => 'required|string|max:255',
        'status' => 'nullable|boolean',  // status is nullable and must be a boolean
    ]);

    // Manually assign request data to a new Wallet instance
    $wallet = new Wallet();
    $wallet->symbol = $request->input('symbol');
    $wallet->name = $request->input('name');
    $wallet->address = $request->input('address');
    $wallet->icon = $request->input('icon');
    $wallet->fees = $request->input('fees');
    $wallet->status = $request->has('status') ? true : false;

    // Save the new wallet
    $wallet->save();

    // Redirect back with success message
    return redirect()->route('admin.wallet.index')->with('success', 'Wallet created successfully.');
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
    public function edit(Wallet $wallet)
    {
        return view('admin.wallet.edit', compact('wallet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {
        // Validate the request input
        $request->validate([
            'symbol' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'fees' => 'required|string|max:255',
            'status' => 'nullable|boolean',  // status is nullable and must be a boolean
        ]);
    
        // Manually assign request data to the existing Wallet instance
        $wallet->symbol = $request->input('symbol');
        $wallet->name = $request->input('name');
        $wallet->address = $request->input('address');
        $wallet->icon = $request->input('icon');
        $wallet->fees = $request->input('fees');
        $wallet->status = $request->has('status') ? true : false;  // Handle checkbox status
    
        // Save the updated wallet instance
        $wallet->save();
    
        // Redirect with success message
        return redirect()->route('admin.wallet.index')->with('success', 'Wallet updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
