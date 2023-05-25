<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
       
        return [
            'title' => 'required|max:255',
            'description' => 'nullable|max:65000',
            'link' => 'nullable|url|max:255',
            'preview_image' => 'nullable|url|max:255',
        ];
    }
}
