<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCommentRequest extends FormRequest
{

    /** comando para gerar este request  php artisan make:request StoreUpdateCommentRequest
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
    public function rules()
    {
        return [
            'body' => [
                'required',
                'min:3',
                'max: 999999',
            ],
        ];
    }
}
