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
            'nombre'=>'required|max:50',
            'que_es'=>'required|max:500',
            'pre_ope'=>'required|max:500',
            'procedimientos'=>'required|max:500',
            'post_ope'=>'required|max:500',
            'imagen'=>'required|max:250',
            'imagen_slider'=>'required|max:250'
        ];
    }
}
