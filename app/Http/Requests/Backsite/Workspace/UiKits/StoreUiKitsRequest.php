<?php

namespace App\Http\Requests\Backsite\Workspace\UiKits;

use App\Models\Workspace\UiKits\UiKits;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUiKitsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('ui_kit_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

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
            'name'     => [
                'required', 'string', 'max:255',
            ],
            'id_category'    => [
                'required', 'integer',
            ],
            'thumbnail' => [
                'required', 'mimes:jpeg,svg,png', 'max:5000',
            ],
            'url_file' => [
                'required', 'string', 'max:5000',
            ],
        ];
    }
}
