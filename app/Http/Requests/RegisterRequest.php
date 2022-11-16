<?php

namespace App\Http\Requests;

use DateTime;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
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
            'full_name'         => 'required|string',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:6',
            'dob'               => 'required|date',
            'gender'            => 'required',
            'payment_method'    => 'required',
            'card_number'       => 'required|min:16|max:16',
            'cvc'               => 'required|min:3|max:3',
            'expired_date'      => 'required|after:yesterday',
            'term_accepted'     => 'required'
        ];
    }

    protected function prepareForValidation()
    {   
        $this->merge([
            'dob'               => $this->request->get('dob_year') . '/' . $this->request->get('dob_month') . '/' . $this->request->get('dob_date'),
            'expired_date'      => (DateTime::createFromFormat('M/Y', $this->request->get('expired_date') . '/' . $this->request->get('expired_year')))->format('y-m-d')
        ]);
    }
}
