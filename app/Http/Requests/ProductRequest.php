<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name_product' => ['required'],
            'description_product' => ['required'],
            'price_product' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name_product.required' => 'Nome do Produto Obrigatorio',
            'description_product.required' => 'Descrição do Produto Obrigatorio',
            'price.required_product' => 'Preço do Produto Obrigatorio',
        ];
    }
}
