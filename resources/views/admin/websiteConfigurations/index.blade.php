@extends('layouts.admin')
@section('content')
<div class="content">
    @can('website_configuration_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.website-configurations.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.websiteConfiguration.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.websiteConfiguration.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-WebsiteConfiguration">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.address') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.logo') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.facebook') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.instagram') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.websiteConfiguration.fields.whatsapp') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($websiteConfigurations as $key => $websiteConfiguration)
                                    <tr data-entry-id="{{ $websiteConfiguration->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->phone ?? '' }}
                                        </td>
                                        <td>
                                            @if($websiteConfiguration->logo)
                                                <a href="{{ $websiteConfiguration->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $websiteConfiguration->logo->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->facebook ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->instagram ?? '' }}
                                        </td>
                                        <td>
                                            {{ $websiteConfiguration->whatsapp ?? '' }}
                                        </td>
                                        <td>
                                            @can('website_configuration_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.website-configurations.show', $websiteConfiguration->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('website_configuration_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.website-configurations.edit', $websiteConfiguration->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('website_configuration_delete')
                                                <form action="{{ route('admin.website-configurations.destroy', $websiteConfiguration->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('website_configuration_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.website-configurations.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-WebsiteConfiguration:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection