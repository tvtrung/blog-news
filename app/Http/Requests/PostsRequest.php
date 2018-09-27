<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PostsRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'title' => 'bail|required|unique:posts,title,' . $request->get('id'),
            'slug' => 'bail|required|unique:posts,slug,' . $request->get('id'),
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
            'title.unique' => 'Tiêu đề bị trùng',
            'slug.unique' => 'Slug bị trùng'
        ];
    }
}
