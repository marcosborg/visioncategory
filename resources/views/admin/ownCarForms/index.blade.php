@extends('layouts.admin')
@section('content')
<div class="content">
    @can('own_car_form_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.own-car-forms.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.ownCarForm.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.ownCarForm.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-OwnCarForm">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.phone') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.tvde') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.tvde_card') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.message') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.ownCarForm.fields.rgpd') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ownCarForms as $key => $ownCarForm)
                                    <tr data-entry-id="{{ $ownCarForm->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $ownCarForm->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ownCarForm->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ownCarForm->phone ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ownCarForm->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ownCarForm->city ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $ownCarForm->tvde ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $ownCarForm->tvde ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            {{ $ownCarForm->tvde_card ?? '' }}
                                        </td>
                                        <td>
                                            {{ $ownCarForm->message ?? '' }}
                                        </td>
                                        <td>
                                            <span style="display:none">{{ $ownCarForm->rgpd ?? '' }}</span>
                                            <input type="checkbox" disabled="disabled" {{ $ownCarForm->rgpd ? 'checked' : '' }}>
                                        </td>
                                        <td>
                                            @can('own_car_form_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.own-car-forms.show', $ownCarForm->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('own_car_form_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.own-car-forms.edit', $ownCarForm->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('own_car_form_delete')
                                                <form action="{{ route('admin.own-car-forms.destroy', $ownCarForm->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('own_car_form_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.own-car-forms.massDestroy') }}",
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
  let table = $('.datatable-OwnCarForm:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection