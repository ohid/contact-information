<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactInfoRequest extends Request
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
            'phone' => 'required|numeric',
            'telephone' => 'numeric',
            'current_address' => 'required',
            'permanent_address' => 'required',
            'batch' => 'required',
            'shift' => 'required',
            'department' => 'required'
        ];
    }
}
