<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

            return [
                'name'=> 'required|max:30|unique:types,name',

            ];

    }
}
