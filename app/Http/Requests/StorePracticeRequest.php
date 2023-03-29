<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePracticeRequest extends FormRequest
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

// public function messages()
// {
//     return [
//         'plate.required' => 'La targa è obbligatoria.',
//         'plate.unique:practices' => 'La targa esiste già',

//         'email.required' => 'L\'email è obbligatoria.',
//         'email.min' => 'L\'email deve essere lunga almeno :min caratteri.',
//         'email.max' => 'L\'email non può superare i :max caratteri.',
//         'email.unique:practices' => 'L\'email esiste già',

//         'residence.required' => 'L\'indirizzo è obbligatorio.',
//         'residence.min' => 'L\'indirizzo deve essere lungo almeno :min caratteri.',
//         'residence.max' => 'L\'indirizzo non può superare i :max caratteri.',

//         'phone_number.required' => 'Il numero di telefono è obbligatorio.',
//         'phone_number.size' => 'Il numero di telefono deve essere lungo esattamente :size caratteri.',
//         'phone_number.regex' => 'Il numero di telefono può contenere solo numeri.',
//         'phone_number.unique:practices' => 'Il numero di telefono esiste già',
//     ];
// }
}