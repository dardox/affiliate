<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AffiliateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'referral_code' => 'required|string|unique:affiliates,referral_code|max:255',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
