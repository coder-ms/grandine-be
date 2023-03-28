<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePracticeRequest extends FormRequest
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
            'number_plate' => 'required|unique:practices|size:7',
            'model' => 'required|max:255|min:3',
            'color' => 'required|max:255|min:3',
            'immatricolation' => 'required',
            'owner' => 'required|max:255|min:3',
            'tax_id_code' => 'required|size:16',
            'birthplace' => 'required|max:255|min:3',
            'birth' => 'required|max:10|min:10',
            'residence' => 'required|max:255|min:3',
            'phone_number' => 'required|regex:/^([0-9]*)$/|size:10',
            'email' => 'required|email|max:100|min:3',
        ];
    }
}