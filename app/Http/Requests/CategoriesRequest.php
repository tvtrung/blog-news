<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'title' => 'bail|required|unique:categories,title',
            'slug' => 'bail|required|unique:categories,slug',
            'order' => 'bail|required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Bạn chưa nhập Tiêu đề',
            'slug.required' => 'Bạn chưa nhập Slug',
            'order.required' => 'Bạn chưa nhập sắp xếp',
            'title.unique' => 'Tiêu đề bị trùng',
            'slug.unique' => 'Slug bị trùng'
        ];
    }
}
