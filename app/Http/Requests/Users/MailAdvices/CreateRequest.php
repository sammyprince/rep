<?php

namespace App\Http\Requests\Users\MailAdvices;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
     * @return string[]
     */
    public function messages()
    {
        return [
            'name' => 'Name field is required',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'last_message' => 'required|string',
        ];
    }


}
