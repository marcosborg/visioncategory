<?php

namespace App\Http\Requests;

use App\Models\WebsiteConfiguration;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWebsiteConfigurationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('website_configuration_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:website_configurations,id',
        ];
    }
}
