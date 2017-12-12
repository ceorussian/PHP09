<?php

namespace App\Http\Requests;

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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Please write name user in form !',
            'email.required'=>'Please write email user in form !',
            'email.email'   =>'Email fail type of email !',
            'password.required'=>'Please write password user in form !',
            'phone.required'   =>'Please write phone user in form ! !',
            'address.required'=>'Please write address user in form !'
        ];
    }
}
