<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApprenantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'userId' => 'required|exists:users,id',
            'name' => 'required|string',
            'email' => 'required|email|unique:apprenants,email',
            'portfolio' => 'nullable|string',
            'videoDemo' => 'nullable|string',
            'cohorteId' => 'required|exists:cohortes,id',
            'domaineId' => 'required|exists:domaines,id',
        ];
    }
}
