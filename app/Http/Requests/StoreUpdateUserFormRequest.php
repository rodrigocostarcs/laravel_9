<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */

    #COMANDO PARA CRIAR ESSA REQUEST php artisan make:request StoreUpdateUserFormRequest

    public function rules()
    {


        $id = $this->id ?? ''; #pega o valor do parÂmetro id.

        $rules = [
            'name' => 'required|string|max:255|min:3',
            'email' => [
                'required',
                'email',
                "unique:users,email,{$id},id", #adiciona a exceção para o e-mail uico na tabela users, no campo e-mail, onde o if for igual ao id passado.
            ],
            'password' => [
                #nullable - caso preencher tem que seguir as validações abaixo.
                'required',
                'min:6',
                'max:20'
            ],
            'image' => [
                'nullable',
                'image',
                'max:2048'
            ]
        ];

        if($this->method('PUT')){
            $rules['password'] = [
                'nullable',
                'min:6',
                'max:20'
            ];
        }

        return $rules;
    }
}
