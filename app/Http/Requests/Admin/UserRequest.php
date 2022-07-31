<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required:users,username',
            'email' => 'required:users,email',
            'password' => 'required:users,password',
            'fullname' => 'required:users,fullname',
            'status' => 'required:users,status',
            'group_id' => 'required:users,group_id'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username không được để trống!',
            'email.required' => 'Email không được để trống!',
            'password.required' => 'Password không được để trống!',
            'fullname.required' => 'Fullname không được để trống!',
            'status.required' => 'Status không được để trống!',
            'group_id.required' => 'Group không được để trống!'
        ];
    }
}
