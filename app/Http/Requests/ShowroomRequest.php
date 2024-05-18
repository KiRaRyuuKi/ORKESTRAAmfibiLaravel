<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowroomRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'about' => 'nullable|string',
            'profile_photo' => 'nullable|string',
            'banner' => 'nullable|string',
        ];
    }
}
