<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\Request;
class LoginRequest extends FormRequest
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
            'email'=>'required|email',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' =>'Please not empty email !',
            'email.email'    =>'Email failse type of Email !',
            'password.required' =>'Please not empty password !'
        ];
    }
}
