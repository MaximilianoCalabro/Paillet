<?php

namespace paillet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CirugiasFormRequest extends FormRequest
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
            'pertenece'=>'required',
            'nombre'=>'required|max:50',
            'que_es'=>'required|max:1000',
            'pre_ope'=>'required|max:1000',
            'procedimientos'=>'required|max:1000',
            'post_ope'=>'required|max:1000',
            'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }
}
