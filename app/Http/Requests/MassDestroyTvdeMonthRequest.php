<?php

namespace App\Http\Requests;

use App\Models\TvdeMonth;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyTvdeMonthRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('tvde_month_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:tvde_months,id',
        ];
    }
}
