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
            'user' => 'required|max:15',
            'pass'=> 'required|min:4|max:8',
        ];
    }
    public function messages()
    {
        return[
            'user.required'=> 'É necessário digitar o nome do aluno!',
            'pass.required'=> 'É necessário digitar a senha!',
            'user.max'=> ' Aluno não encontrado!',
            'pass.max'=> 'Senha incorreta!',
            'pass.min'=> 'Senha muito curta!'
        ];
    }
}
