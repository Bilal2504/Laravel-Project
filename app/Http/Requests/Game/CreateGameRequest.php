<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'genre_id' => 'required|exists:genres,id',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'summary' => 'nullable|string',
            'release_date' => 'required|date',
            'developer' => 'nullable|string',
            'score' => 'nullable|numeric',
        ];
    }
}
