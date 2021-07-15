<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreImageRequest extends FormRequest
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
            'file' => ['required', 'mimes:png,jpg,jpeg'],
            'title' => ['required', 'max:25', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'description' => ['max:255', 'regex:/^[a-zA-Z0-9\s]+$/']

            ];
    }
}
