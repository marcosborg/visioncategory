@extends('layouts.admin')
@section('content')
<div class="content">
    @can('company_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.companies.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.company.title_singular') }}
                </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'Company', 'route' => 'admin.companies.parseCsvImport'])
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.company.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Company">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.id') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.name') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.vat') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.address') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.zip') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.location') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.email') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.logo') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.main') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.user') }}
                                </th>
                                <th>
                                    {{ trans('cruds.company.fields.suspended') }}
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                    </table>
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
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.companies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.companies.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'vat', name: 'vat' },
{ data: 'address', name: 'address' },
{ data: 'zip', name: 'zip' },
{ data: 'location', name: 'location' },
{ data: 'email', name: 'email' },
{ data: 'logo', name: 'logo', sortable: false, searchable: false },
{ data: 'main', name: 'main' },
{ data: 'user_name', name: 'user.name' },
{ data: 'suspended', name: 'suspended' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Company').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection