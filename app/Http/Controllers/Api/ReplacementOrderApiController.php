<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ReplacementOrder;
use Illuminate\Http\Request;
use App\Http\Resources\ReplacementOrderResource;
use App\Http\Requests\StoreReplacementOrderRequest;

class ReplacementOrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ReplacementOrderResource::collection(ReplacementOrder::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplacementOrderRequest $request)
    {
        $order = ReplacementOrder::create($request->validated());
        return new ReplacementOrderResource($order);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = ReplacementOrder::findOrFail($id);
        return new ReplacementOrderResource($order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReplacementOrderRequest $request, $id)
    {
        $order = ReplacementOrder::findOrFail($id);
        $order->update($request->validated());
        return new ReplacementOrderResource($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = ReplacementOrder::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}
