<?php

namespace oliver\Http\Requests;

use oliver\Http\Requests\Request;

class ContatoRequest extends Request
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
           'nome' => 'required',
           'e-mail' => 'required',
           'texto' => 'required',
           'fone' => 'max:15'
        ];
    }
}
