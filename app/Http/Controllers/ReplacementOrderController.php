<?php

namespace App\Http\Controllers;

use App\Models\ReplacementOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReplacementOrderController extends Controller
{
    public function index()
    {
        $orders = ReplacementOrder::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'notes'    => 'nullable|string',
        ], [
            'item_name.required' => 'Item name is required!',
            'quantity.required'  => 'Please enter a quantity.',
        ]);

        Log::info('Creating new order with data:', $validated);
        ReplacementOrder::create($validated);

        return redirect()->route('orders.index')->with('success', 'Order created!');
    }

    public function edit($id)
    {
        $order = ReplacementOrder::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = ReplacementOrder::findOrFail($id);

        $validated = $request->validate([
            'item_name' => 'required|string',
            'quantity'  => 'required|integer|min:1',
            'notes'     => 'nullable|string',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'Order updated!');
    }

    public function destroy($id)
    {
        $order = ReplacementOrder::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted!');
    }
}

