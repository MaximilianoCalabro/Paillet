<?php

namespace paillet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CutaneasFormRequest extends FormRequest
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
            'que'=>'max:1000',
            'pre'=>'max:1000',
            'pro'=>'max:1000',
            'post'=>'max:1000',
            'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }
}
