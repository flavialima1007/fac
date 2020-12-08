<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendaRequest extends FormRequest
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
            'conveniado_id' => 'required',
            'associado_id' => 'required',
            'data_venda' => 'required',
            'quantidade_parcelas' => 'required',
            'valor' => 'required',
            'descricao' => 'required',
            'status' => 'required',
        ];
    }
}
