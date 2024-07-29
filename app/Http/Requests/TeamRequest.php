<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'name' => ['required', 'max:255'],
            'position' => ['required', 'max:255'],
            'image' => ['image', 'mimes:png,jpg,jpeg,svg', 'max:2048']
        ];
    }

    public function messages(): array {
        $required = ' boş buraxıla bilməz.';
        $max = ' :max simvoldan az olmalıdır.';
        return [
            'name.required' => 'Ad' . $required,
            'name.max' => 'Ad' . $max,
            'position.required' => 'Vəzifə' . $required,
            'position.max' => 'Vəzifə' . $max,
            'image.image' => 'Şəkil şəkil olmalıdır.',
            'image.mimes' => 'Şəkil jpg, jpeg, png və ya svg formatında olmalıdır.',
            'image.max' => 'Şəkil maksimum 2MB olmalıdır.',
        ];
    }
}
