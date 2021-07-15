<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
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
        ];
    }
}
