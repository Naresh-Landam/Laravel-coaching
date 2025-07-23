<?php

namespace App\Repositories;

use App\Models\ReplacementOrder;
use Illuminate\Support\Facades\Log;

class ReplacementOrderRepository implements ReplacementOrderRepositoryInterface

{
    public function all()
    {
        return ReplacementOrder::all();
    }

    public function create(array $data)
    {
        Log::info('ReplacementOrderRepository@create called with', $data);
        return ReplacementOrder::create($data);
    }

    public function find($id)
    {
        return ReplacementOrder::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $order = ReplacementOrder::findOrFail($id);
        $order->update($data);
        return $order;
    }

    public function delete($id)
    {
        $order = ReplacementOrder::findOrFail($id);
        return $order->delete();
    }
}
