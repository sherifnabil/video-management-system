<?php

namespace App\Http\Requests\BackEnd\Pages;

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
            'name'           =>  'required|max:191',
            'des'           =>  'required|min:10',
            'meta_keywords'  =>  'required|max:191',
            'meta_des'       =>  'required|max:191',
        ];
    }
}
