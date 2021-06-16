<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'contact'=>['required' ,'max:10','regex:/(98)[0-9]{8}/'],
            'address'=>'required|max:255',
            'email'=>'required|email'
        ];
    }

    public function messages()
    {
        return[
            'firstname.required'=>'Firstname is required',
            'lastname.required'=>'Lastname is required',
            'address.required'=>'Address is required',
            'email.required'=>'Email is required',
            'contact.required'=>'Contact is required',
            'contact.max'=>'Contact should be of 10 digits',
            'contact.regex'=>'Contact should start with 98',
        ];
    }
}
