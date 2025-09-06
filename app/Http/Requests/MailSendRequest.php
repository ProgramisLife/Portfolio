<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailSendRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'firstName' => 'required|string|min:3|max:255',
        'lastName' => 'required|string|min:3|max:255',
        'email' => 'required|email:rfc,dns|min:3|max:255',
        'phone' => 'nullable|string|regex:/^[0-9\s\-\(\)]+$/|max:255',
        'message' => 'required|string',
    ];
    }
}
