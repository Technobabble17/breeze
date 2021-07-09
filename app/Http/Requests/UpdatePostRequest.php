<?php

namespace App\Http\Requests;

class UpdatePostRequest extends StorePostRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules['content'] = ['required', 'min:5'];
        return $rules;
    }
}
