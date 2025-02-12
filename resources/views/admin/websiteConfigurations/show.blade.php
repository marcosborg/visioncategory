@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.websiteConfiguration.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.website-configurations.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($websiteConfiguration->logo)
                                            <a href="{{ $websiteConfiguration->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $websiteConfiguration->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.facebook') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->facebook }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.instagram') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->instagram }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.whatsapp') }}
                                    </th>
                                    <td>
                                        {{ $websiteConfiguration->whatsapp }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.website-configurations.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection