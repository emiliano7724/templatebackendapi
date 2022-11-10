<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    protected $stopOnFirstFailure = false;
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],

        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'El nombre de usuario es un campo es obligatorio',
        'email.required' => 'El email es un campo es obligatorio',
        'email.email' => 'Debe ingresar un email válido',

        ];
    }
}
