<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReplacementOrderRequest extends FormRequest
{
    /**
     * Authorize this request.
     */
    public function authorize(): bool
    {
        return true; // ✅ Set to true to allow requests
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [
            'item_name' => 'required|string|max:255',
            'quantity'  => 'required|integer|min:1',
            'notes'     => 'nullable|string|max:1000',
        ];
    }
}

