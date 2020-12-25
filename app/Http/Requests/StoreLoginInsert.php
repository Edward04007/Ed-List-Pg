<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginInsert extends FormRequest
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
            'user' => 'required|min:4|max:15',
            'pass'=> 'required|min:4|max:8',
        ];
    }
    public function messages()
    {
        return[
            'user.required'=> 'Aluno não existe ou está incorreto!',
            'pass.required'=> 'Senha incorreta!'
        ];
    }
}
