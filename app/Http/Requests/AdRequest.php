<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
            
       'title'=>'required|string|max:120',
       'body'=>'required|string|max:1000',
       'body'=>'required|string|min:20',
       'price'=>'required|numeric|max:9999999999999.99',
       'description'=>'required|string|max:200',
       'description'=>'required|string|min:5',
       
        ];
    }
}
