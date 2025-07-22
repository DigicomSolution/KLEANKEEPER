@extends('spiderworks.miniweb.app')

@section('content')


            <div class="col-md-12 p-0"  align="right" style="margin-bottom: 20px; ">
              <span class="page-heading">All Services</span>
              <div >
                  <div class="btn-group">
                      <a href="{{route($route.'.create')}}" class="btn btn-success" title="Create new type"><i class="fa fa-pencil"></i> Create new</a>
                  </div>
              </div>
            </div>
            <!-- START card -->
            <div class="card card-borderless padding-15">
                    <table class="table table-hover demo-table-search table-responsive-block" id="datatable"
                           data-datatable-ajax-url="{{ route($route.'.index') }}" style="width:100%">
                        <thead id="column-search">
                        <tr>
                            <th class="nodisplay"></th>
                            <th class="text-center"  style="width: 10%">ID</th>
                            <th class="" style="width: 30%">Name</th>
                            <th class="" style="width: 30%">Short Description</th>
                            <th class="nosort nosearch  text-center" style="width: 10%">Status</th>
                            <th class="nosort nosearch  text-center" style="width: 10%">Edit</th>
                            <th class="nosort nosearch  text-center" style="width: 10%">Delete</th>
                        </tr>

                        {{--<tr>--}}
                            {{--<th class="d-none"></th>--}}
                            {{--<th class="nosort nosearch" width="1%"></th>--}}
                            {{--<th class="searchable-input">Name</th>--}}
                            {{--<th class="searchable-input">Short Description</th>--}}
                            {{--<th class="nosort nosearch table-width-10"></th>--}}
                            {{--<th class="nosort nosearch table-width-10"></th>--}}
                            {{--<th class="nosort nosearch table-width-10"></th>--}}
                        {{--</tr>--}}

                        </thead>

                        <tbody>
                        </tbody>

                    </table>
            </div>
            <!-- END card -->

@endsection
@section('bottom')

    <script>
        var my_columns = [
            {data: 'updated_at', name: 'updated_at'},
            {data: null, name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'short_description', name: 'short_description'},
            {data: 'status', name: 'status'},
            {data: 'action_edit', name: 'action_edit'},
            {data: 'action_delete', name: 'action_delete'}
        ];
        var slno_i = 0;
        var order = [0, 'desc'];
    </script>
    @parent
@endsection