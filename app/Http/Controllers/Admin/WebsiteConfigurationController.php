<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWebsiteConfigurationRequest;
use App\Http\Requests\StoreWebsiteConfigurationRequest;
use App\Http\Requests\UpdateWebsiteConfigurationRequest;
use App\Models\WebsiteConfiguration;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WebsiteConfigurationController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('website_configuration_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $websiteConfigurations = WebsiteConfiguration::with(['media'])->get();

        return view('admin.websiteConfigurations.index', compact('websiteConfigurations'));
    }

    public function create()
    {
        abort_if(Gate::denies('website_configuration_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websiteConfigurations.create');
    }

    public function store(StoreWebsiteConfigurationRequest $request)
    {
        $websiteConfiguration = WebsiteConfiguration::create($request->all());

        if ($request->input('logo', false)) {
            $websiteConfiguration->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $websiteConfiguration->id]);
        }

        return redirect()->route('admin.website-configurations.index');
    }

    public function edit(WebsiteConfiguration $websiteConfiguration)
    {
        abort_if(Gate::denies('website_configuration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websiteConfigurations.edit', compact('websiteConfiguration'));
    }

    public function update(UpdateWebsiteConfigurationRequest $request, WebsiteConfiguration $websiteConfiguration)
    {
        $websiteConfiguration->update($request->all());

        if ($request->input('logo', false)) {
            if (! $websiteConfiguration->logo || $request->input('logo') !== $websiteConfiguration->logo->file_name) {
                if ($websiteConfiguration->logo) {
                    $websiteConfiguration->logo->delete();
                }
                $websiteConfiguration->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($websiteConfiguration->logo) {
            $websiteConfiguration->logo->delete();
        }

        return redirect()->back();
    }

    public function show(WebsiteConfiguration $websiteConfiguration)
    {
        abort_if(Gate::denies('website_configuration_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.websiteConfigurations.show', compact('websiteConfiguration'));
    }

    public function destroy(WebsiteConfiguration $websiteConfiguration)
    {
        abort_if(Gate::denies('website_configuration_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $websiteConfiguration->delete();

        return back();
    }

    public function massDestroy(MassDestroyWebsiteConfigurationRequest $request)
    {
        $websiteConfigurations = WebsiteConfiguration::find(request('ids'));

        foreach ($websiteConfigurations as $websiteConfiguration) {
            $websiteConfiguration->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('website_configuration_create') && Gate::denies('website_configuration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WebsiteConfiguration();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
