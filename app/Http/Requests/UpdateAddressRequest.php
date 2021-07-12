<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

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
       // dd($this->route("address"));
        $rules['email'] = ['required', Rule::unique('addresses')->ignore($this->route("address")->id)]; //
        return $rules;
    }
}
