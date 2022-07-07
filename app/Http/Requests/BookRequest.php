<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "author" => "required",
            "image" => "mimes:jpg,jpeg,png|nullable",
            "ISBN" => "required",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Bu alan zorunludur.",
            "author.required" => "Bu alan zorunludur.",
            "ISBN.required" => "Bu alan zorunludur.",
            "image.mimes" => "Sadece .jpg, .jpeg, .png uzantılı dosyalar yüklenebilir.",
        ];
    }
}
