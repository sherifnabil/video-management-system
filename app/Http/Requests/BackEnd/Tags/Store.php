<?php

namespace App\Http\Requests\BackEnd\Tags;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'  => 'required|max:191'
        ];
    }
}
