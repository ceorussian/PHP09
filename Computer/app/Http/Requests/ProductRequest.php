<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'description'=>'required|min:3',
            'warranty'=>'required|numeric',
            'price'=>'required|numeric',
            'discout'=>'required|numeric',
            'category_id'=>'required',
            'image'=>'required|file'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Please write name product in form !',
            'description.required'=>'Please write description product in form !',
            'description.min(3)'=>' Description is min 3 word!',
            'warranty.required'=>'Please write warranty product in form !',
            'warranty.numeric'=>'Warranty product is type number',
            'price.required'=>'Please write price product in form !',
            'price.numeric'=>'Price product is type number',
            'discout.required'=>'Please write discout product in form !',
            'discout.numeric'=>'Discout product is type number',
            'category_id.required'=>'Please write category product in form !',
            'image.required'=>'Please choose file image  !',
            'image.file'=>' File image is type file',
        ];
    }
}
