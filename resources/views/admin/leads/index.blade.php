@extends('spiderworks.miniweb.app')

@section('content')
    <div class="container-fluid">
        <div class="container">
            <!-- START card -->
            <div class="col-md-12" style="margin-bottom: 20px;" align="right">
                <span class="page-heading">Leads</span>
            </div>

            <div class="col-lg-12">
                <div class="card card-borderless padding-15">
                        <table class="table table-hover demo-table-search table-responsive-block" id="datatable"
                               data-datatable-ajax-url="{{ route($route.'.index') }}" >
                            <thead id="column-search">
                            <tr>
                                <th class="table-width-10" style="width: 10px !important;">ID</th>
                                <th class="table-width-120" style="width: 20px !important;">Name</th>
                                <th class="nosort nosearch table-width-10">Phone</th>
                                <th class="nosort nosearch table-width-10">Edit</th>
                                <th class="nosort nosearch table-width-10">Message</th>
                                <th class="nosort nosearch table-width-10">Notes</th>
                                <th class="nosort nosearch table-width-10">Date</th>
                                <th class="nosort nosearch table-width-10">Delete</th>
                            </tr>

                            <tr>
                                <th class="table-width-10 nosort nosearch" style="width: 10px !important;"></th>
                                <th class="table-width-120 searchable-input" style="width: 20px !important;">Name</th>
                                <th class="nosort nosearch table-width-10" style="width: 20px !important;"></th>
                                <th class="nosort nosearch table-width-10"></th>
                                <th class="nosort nosearch table-width-10"></th>
                                <th class="nosort nosearch table-width-10"></th>
                                <th class="nosort nosearch table-width-10"></th>
                                <th class="nosort nosearch table-width-10"></th>
                            </tr>

                            </thead>

                            <tbody>
                            </tbody>

                        </table>
                </div>
            </div>
            <!-- END card -->
        </div>
    </div>
@endsection
@section('bottom')

    <script>
        var my_columns = [
            {data: null, name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'phone', name: 'phone'},
            {data: 'email', name: 'email'},
            {data: 'message', name: 'message'},
            {data: 'notes', name: 'notes'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action_delete', name: 'action_delete'}
        ];
        var slno_i = 0;
        var order = [4, 'desc'];
    </script>
    @parent
@endsection