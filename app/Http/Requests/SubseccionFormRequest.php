<?php

namespace paillet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubseccionFormRequest extends FormRequest
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
            'imagen'=>'mimes:jpeg,bmp,png',
        ];
    }
}
