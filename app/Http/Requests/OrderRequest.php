<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email'],
            'loading_location' => ['required', 'string', 'min:3'],
            'unloading_location' => ['required', 'string', 'min:3'],
            'phone' => ['required', 'regex:/(?<!\w)(\(?(\+|00)?48\)?)?[ -]?\d{3}[ -]?\d{3}[ -]?\d{3}(?!\w)/'],
            'loading_date' => ['required', 'date', 'after:today'],
            'unloading_date' => ['required' ,'date', 'after:loading_date'],
            'cargo_weight' => ['required'],
        ];
    }

    public function after()
    {

    }

    public function messages(): array
    {
        return [
            'required' => 'To pole jest wymagane',
            'date' => 'Proszę podać datę',
            'regex' => 'Fomat nr telefonu (+48) 111 111 111',
            'loading_date.required' => 'wymagane',
            'unloading_date.required' => 'wymagane',
            'loading_date.after' => 'Data musi być dalsza niż dzisiejsza'
        ];
    }
}
