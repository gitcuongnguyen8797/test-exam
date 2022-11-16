<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use DateTime;
use Illuminate\Foundation\Http\FormRequest;

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
            'card_number'       => 'required|size:16',
            'cvc'               => 'required|size:3',
            'expired_date'      => 'required|after:yesterday',
            'term_accepted'     => 'required'
        ];
    }

    protected function prepareForValidation()
    {   
        
        $this->merge([
            'dob'               => $this->convertDob(),
            'expired_date'      => $this->convertExpiredDate()
        ]);
    }

    private function convertExpiredDate() {
        $expiredDate = (DateTime::createFromFormat('M/Y', $this->request->get('expired_month') . '/' . $this->request->get('expired_year')));
        return $expiredDate != null ? $expiredDate->format('y-m-d') : null;
    }

    private function convertDob() {
        return Carbon::create($this->request->get('dob_year'), $this->request->get('dob_month'), $this->request->get('dob_date'));
    }
}
