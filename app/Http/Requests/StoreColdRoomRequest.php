<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreColdRoomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sensorId'    => 'required|string',
            'title'       => 'required|string',
            'temp'        => 'required|numeric',
            'humidity'    => 'required|numeric',
            'co2'         => 'required|numeric',
        ];
    }
}
