<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketFormRequest extends FormRequest
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
            'title' => 'required|min:3',
            'content' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título del ticket es requerido',
            'title.min' => 'El título debe poseer al menos 3 caracteres',
            'content.required' => 'El contenido del ticket es requerido',
            'content.min' => 'El contenido debe poseer al menos 10 caracteres'
        ];
    }
}
