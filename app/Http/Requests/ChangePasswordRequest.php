<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'min:5|confirmed'
        ];
    }

     public function messages()
    {
        return [
            'password.min' => 'Panjang password baru minimal 5 karakter',
            'password.confirmed' => 'Password baru tidak sama'
        ];
    }

}
