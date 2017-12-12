<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessoriesRequest extends FormRequest
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
            'name'  =>'required',
            'price'  =>'required',
            'description'=>'required',
            'category_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Please enter name accessories',
            'price.required' =>'Please enter price accessories',
            'description.required' =>'Please enter description accessories',
            'category_id.required' =>'Please enter category accessories',
        ];
    }
}
