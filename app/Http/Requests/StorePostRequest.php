<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "title" => 'required|string|max:255',
            "slug" => 'required|string|max:255',
            "thumb_path" => 'required|image|max:10240',
            "content" => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre doit être rempli',
            'slug.required' => 'Le slug doit être rempli',
            'thumb_path.required' => 'L\'image de prévisualisation doit être rempli',
            'content.required' => 'Le contenu doit être rempli',

            'thumb_path.max' => 'L\'image est trop lourde (Maximum: 10Mo)'
        ];
    }
}