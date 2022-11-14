<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\dangkyRequest;

class dangkyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Username' => 'required',
            'password' => 'required | min:8',
            'password_confirmation' => 'required | same:password',
            'email' => 'required | email'
        ];
    }

    public function messages(){
        return [
            'Username.required' => 'Vui lòng nhập tên đăng nhập',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min'    => 'Vui lòng nhập mật khẩu có ít nhất 8 ký tự',
            'password_confirmation.same' => 'Xác nhận sai mật khẩu',
            'password_confirmation.required' => 'Vui lòng xác nhận mật khẩu',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng đúng định dạng @',
        ];
    }
}
