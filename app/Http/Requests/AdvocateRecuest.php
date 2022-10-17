<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvocateRecuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:255'],
            'profile_pic' => ['required', 'max:255'],
            'short_bio' => ['required'],
            'long_bio' => ['required'],
            'advocate_years_exp' => ['required', 'max:255'],
            'company_id' => ['required', 'max:255', 'int'],

            'youtube' => ['required', 'max:255'],
            'twitter' => ['required', 'max:255'],
            'github' => ['required', 'max:255'],
        ];
    }
}
