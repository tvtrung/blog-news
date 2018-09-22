<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required',
            'website' => 'required',
            'question' => 'required',
            'answer' => 'required',
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
            'fullname.required' => 'Trường \'Họ Tên\' không được để trống',
            'email.required' => 'Trường \'Email\' không được để trống',
            'website.required' => 'Trường \'Website\' không được để trống',
            'question.required' => 'Trường \'Câu hỏi\' không được để trống',
            'answer.required' => 'Trường \'Câu trả lời\' không được để trống',
        ];
    }
}
