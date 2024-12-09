<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClickRequest extends FormRequest
{
    public function rules()
    {
        return [
            'affiliate_id' => ['required', 'exists:affiliates'],
            'ip_address' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
