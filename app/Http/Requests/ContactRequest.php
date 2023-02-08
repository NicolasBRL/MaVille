<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(){
        return [
            'firstName' => 'Le prénom est requis.',
            'lastName' => 'Le nom est requis.',
            'email' => 'L\'email est requis.',
            'phone' => 'Le numéro de téléphone est requis.',
            'message' => 'Le message est requis.'
        ];
    }
}
