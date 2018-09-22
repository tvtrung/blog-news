<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'order' => 'required',
            'title' => 'required',
            'price' => 'required',
            'content' => 'required',
            'link' => 'required',
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
            'order.required' => 'Trường \'Thứ tự\' không được để trống',
            'title.required' => 'Trường \'Tên sản phẩm\' không được để trống',
            'price.required' => 'Trường \'Giá\' không được để trống',
            'content.required' => 'Trường \'Nội dung\' không được để trống',
            'link.required' => 'Trường \'Link\' không được để trống',
        ];
    }
}
