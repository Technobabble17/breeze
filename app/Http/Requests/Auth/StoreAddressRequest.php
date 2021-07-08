<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'firstname' => ['required', 'max:25', 'alpha'],
            'lastname' => ['required', 'max:25', 'alpha'],
            'address1' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'address2' => ['nullable', 'regex:/^[\pL\s\-]+$/u'],//this regex doesnt allow numbers
            'city' => ['required', 'regex:/^[\pL\s\-]+$/u'],
            'state' => ['required','alpha', 'size:2'],
            'zip' => ['required', 'size:5'],
            'email' => ['required', 'unique:addresses', 'email:rfc,dns'], //this isnt requiring the .com
            'primaryphone' => ['nullable', 'size:10']
        ];
    }
}
