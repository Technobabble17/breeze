<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
     * @return
     */
    public function rules()
    {

        return [
            'firstname' => ['required', 'max:25', 'alpha'],
            'lastname' => ['required', 'max:25', 'alpha'],
            'address1' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'address2' => ['nullable', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'city' => ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'state' => ['required','alpha', 'size:2'],
            'zip' => ['required', 'size:5'],
            'primaryphone' => ['nullable', 'size:10'],
            'email' => ['required', Rule::unique('addresses')]
            //'email' => [Rule::unique addresses,('email')->ignore($id)]
          //  'email' => Validator::make($data, ['email' => ['required', Rule::unique('addresses')->ignore($address->id)]]);
        ];

            // Validator::make($data, ['email' => ['required', Rule::unique('addresses')->ignore($email>id)]])
    }
}
