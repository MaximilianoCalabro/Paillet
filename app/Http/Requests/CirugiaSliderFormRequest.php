<?php

namespace paillet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CirugiaSliderFormRequest extends FormRequest
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
            'titulo'=>'required|max:250',
            'texto'=>'max:500',
            'direccion'=>'max:250',
        ];
    }
}
