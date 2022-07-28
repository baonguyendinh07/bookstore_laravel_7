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
            'name' => 'required:books,name',
            'price' => 'required:books,price',
            'cate_id' => 'required:books,cate_id'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name không được để trống!',
            'price.required' => 'Price không được để trống!',
            'cate_id.required' => 'Category không được để trống!'
        ];
    }
}
