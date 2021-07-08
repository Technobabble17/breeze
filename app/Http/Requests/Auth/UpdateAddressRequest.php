<?php

namespace App\Http\Requests\Auth;

class UpdateAddressRequest extends StoreAddressRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules['address1'] = ['required', 'min:5']; //should have something about not being able to change first and last name, see if there is something about not being editable
        return $rules;
    }
}
