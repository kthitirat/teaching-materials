<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateSubjectRequest extends FormRequest
{
    public function rules()
    {
        $rules = [
            'code' => ['required'],
            'name_th' => ['required'],
            'name_en' => ['required'],
            'unit' => ['required'],
            'published_at' => ['nullable', 'date'],
            'description' => ['required'],
            'professors' => ['required', 'array', 'min:1'],
            'professors.*.id' => ['required', 'exists:professors,id'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:102400'],
            'documents.*' => ['required', 'mimes:pdf,ppt,pptx,doc,docx,xls,xlsx', 'max:102400'],
        ];
        return $rules;
    }
}