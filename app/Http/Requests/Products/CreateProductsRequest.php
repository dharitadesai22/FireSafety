<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductsRequest extends FormRequest
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
            'p_name'=>'required',
            'p_desc'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif|max:3000'            
        ];
    }
}
