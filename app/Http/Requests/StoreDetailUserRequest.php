<?php

namespace App\Http\Requests;

use App\Models\DetailUsers;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreDetailUserRequest extends FormRequest
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
            'photo' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:5000',
            ],
            'mobile_phone' => [
                'nullable', 'string', 'max:255',
            ],
            'information' => [
                'nullable', 'string', 'max:5000',
            ],
            'status' => [
                'nullable', 'integer',
            ],
        ];
    }
}
