<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Klean Keepers | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    @include('spiderworks.miniweb._partials.styles')
    <link href="{{asset('miniweb/assets/pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css">
    @section('head')
    @show
    <link href="{{asset('miniweb/datatables/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
    <link  href="{{asset('miniweb/assets/pages/css/themes/modern.css')}}" rel="stylesheet" type="text/css" />
    <link  href="{{asset('assets/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
    <link  href="{{asset('miniweb/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('miniweb/css/styles.css')}}" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed&display=swap" rel="stylesheet">

<style> /* remove bug from summernote height in codeview mode */ .note-codable { min-height: 300px !important; } </style>
    <style type="text/css">
        .form-group-default textarea{
            height: auto !important;
        }
        #datatable, #datatable2 {
            width: 100% !important;
        }

        .fileinput{
            position: relative;
        }

        .fileinput img{
            width: 100%;
        }

        .fileinput .file-remove{
            position: absolute;
            right: -5px; 
            top: -10px;
            font-size: 20px;
            color: red;
        }
        .page-sidebar{
            box-shadow: 4px 60px 10px #eeeeee;
        }
        body{
            background: url('{{asset('admin-bg.png')}}');
            font-family: 'Encode Sans Semi Condensed', sans-serif;
        }
        .sidebar-menu{
            padding-top: 40px;
            margin-top: -20px !important;
            background: white;
        }
        .page-sidebar a:hover:focus, .page-sidebar button:hover:focus, .page-sidebar a:active:focus, .page-sidebar button:active:focus {
            color: #000 !important;
        }


        .menu-items li a span{
            font-family: 'Encode Sans Semi Condensed', sans-serif;
            color: #000 !important;
        }
        .page-sidebar .sidebar-menu .menu-items li:hover > a, .page-sidebar .sidebar-menu .menu-items li.open > a, .page-sidebar .sidebar-menu .menu-items li.active > a {
            color: #000;
        }

        .page-sidebar .sidebar-menu .menu-items > li > a > .title {
            float: left;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: unset;
        }

        .card.card-borderless {
            border: 1px dotted #d1d1d1;
            border-radius: 5px;
            padding: 20px !important;
            box-shadow: 6px 7px 10px #eeeeee;
        }

        .table tbody tr td {
            background: #fff;
            border-bottom: 1px solid rgba(225, 225, 226, 0.7);
            border-top: 0px;
            padding: 5px 0px 5px 0px;
            font-size: 13.5px;
        }

    </style>
    <style type="text/css">
        .dropdown-menu.datepicker {
          z-index: 100000009 !important /* has to be larger than 1050 */
        }


</style>

</head>
<body class="fixed-header menu-pin">
<!-- BEGIN SIDEBPANEL-->
@include('spiderworks.miniweb._partials.nav')
<!-- END SIDEBAR -->
<!-- END SIDEBPANEL-->
<!-- START PAGE-CONTAINER -->
<div class="page-container ">
    <!-- START HEADER -->
    <div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
        </a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
            <div class="brand inline">
                {{config('app.name')}}
            </div>

        </div>
        <div class="d-flex align-items-center">
            <!-- START User Info-->
            <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                @auth
                    <span class="semi-bold font-weight-bold">{{Auth::user()->username}}</span>
                    <span class="text-master font-italic">({{Auth::user()->email}})</span>
                @endauth
            </div>
            <div class="dropdown pull-right d-lg-block d-none">
                <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="cursor: pointer">
              <span class="thumbnail-wrapper d32  inline">
              <img src="https://img.icons8.com/office/32/000000/user-menu-male--v2.png" alt=""
                   data-src="https://img.icons8.com/office/32/000000/user-menu-male--v2.png"
                   data-src-retina="https://img.icons8.com/office/32/000000/user-menu-male--v2.png" width="32" height="32">
              </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                    <a href="{{route('admin.change-password')}}" class="dropdown-item"><i class="pg-settings_small"></i> Change Password</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="clearfix bg-master-lighter dropdown-item">
                        <span class="pull-left">Logout</span>
                        <span class="pull-right"><i class="pg-power"></i></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
            <!-- START JUMBOTRON -->
            <div class="jumbotron page-wrapper" data-pages="parallax">
                @section('spiderworks.miniweb._partials.breadcrumb')
                    @show
            </div>
            <!-- END JUMBOTRON -->
            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg">
                @include('spiderworks.miniweb._partials.notifications')
                @section('content')
                    @show
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright &copy; {{date('Y')}} </span>
                    <span class="font-montserrat">{{config('app.name')}}</span>.
                    <span class="hint-text">All rights reserved. </span>
                    <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    Hand-crafted <span class="hint-text">&amp; made with Love</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<!--START QUICKVIEW -->

<!-- END QUICKVIEW-->
<!-- START OVERLAY -->

<!-- END OVERLAY -->
<!-- BEGIN VENDOR JS -->
@include('spiderworks.miniweb._partials.scripts')
@stack('scripts')
<script type="text/javascript">
    var image_upload_url = "{{ url('admin/summernote/image') }}";
    var _token = "{{csrf_token()}}";
    var base_url = "{{url('/')}}";
    var media_popup_url = "{{route('spiderworks.miniweb.media.popup')}}"
    var columnDefs = [{}];
</script>
@section('bottom')
@show
<script src="{{asset('miniweb/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('miniweb/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- END PAGE LEVEL JS -->
<script src="{{asset('miniweb/js/jquery.imgcheckbox.js')}}"></script>
<script src="{{asset('assets/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('miniweb/js/scripts.js')}}"></script>
<script>
    $(document).ready(function () {
        $('table').attr('width','100%');
        $('#datatable_wrapper').parent().removeClass('padding-15').addClass('padding-5');
        $('#datatable').parent().addClass('table-responsive');
    });

</script>

 <script>

        
        
        if($('#datatable').length)
        {
            var $table = $('#datatable');
        var ajaxUrl = $table.data('datatable-ajax-url');
        console.log(ajaxUrl)
        //var order = '';
        dt_table = $table.DataTable({
            orderCellsTop: true,
            fixedHeader: true,
            "processing": true,
            "serverSide": true,
            responsive: true,
            ajax: {
                url: ajaxUrl,
                data: function(d) {
                    var advanced_search = {};
                    $('.datatable-advanced-search').each(function(i, obj) {
                            advanced_search[$(this).attr('name')] = $(this).val();
                    });
                    d.data = advanced_search;
                }
            },
            columns: my_columns,
            "stateSave": true,
            'aoColumnDefs': [
                { 'bSortable': false, 'sClass': "text-center table-width-10", 'aTargets': ['nosort'] },
                { "bSearchable": false, "aTargets": [ 'nosearch' ] },
                { "bVisible": false, 'sClass': "d-none", "aTargets": ['nodisplay'] }
            ],
            errMode: 'throw',
            "order": [order],
            "language": {
                "search": "",
                'searchPlaceholder': 'Search...'
            },
            initComplete: function(settings, json) {
                $(this).trigger('initComplete', [this]);
                $(window).trigger('resize');
                this.api().columns().every( function () {

                });
                if($('.ratings').length)
                {
                    $(".ratings").starRating({
                        starSize: 25,
                        readOnly: true
                    });
                }
            },
            fnRowCallback : function(nRow, aData, iDisplayIndex, iDisplayIndexFull){
                updateDtSlno(this, slno_i);
            }
        });

        $('#datatable #column-search tr th').each( function () {
            var title = $(this).text();
            var columnClass = $(this).attr('class');
            if($(this).hasClass('searchable-input')){
                if($(this).hasClass('date'))
                {
                    var id = $(this).attr('data-id');
                    $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control input-sm daterange" name="updated_at" id="'+id+'" />' );
                    $('.daterange').daterangepicker({
                        timePicker: true,
                        autoUpdateInput: false,
                        drops: "up",
                        locale: {
                            cancelLabel: 'Clear',
                            format: 'MM/DD/YYYY HH:mm'
                        }
                    });
                }
                else if($(this).hasClass('date_time'))
                {
                    var id = $(this).attr('data-id');
                    $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control input-sm daterange" name="date_time" id="'+id+'" />' );
                    $('#'+id).daterangepicker({
                        timePicker: true,
                        autoUpdateInput: false,
                        drops: "up",
                        locale: {
                            cancelLabel: 'Clear',
                            format: 'MM/DD/YYYY HH:mm'
                        }
                    });
                }
                else
                    $(this).html(  '<input type="text" placeholder="Search '+title+'" class="form-control input-sm search-input" />' );
            }
        });

        $( '#datatable thead').on( 'keyup change', ".search-input",function () {
   
                dt_table
                    .column( $(this).parent().index() )
                    .search( this.value )
                    .draw();
            });

            $( '#datatable thead').on( 'change', ".select-box-input",function () {
   
                dt_table
                    .column( $(this).parent().index() )
                    .search( this.value )
                    .draw();
            });
        }


        function updateDtSlno(dt, slno_i) {
            if (typeof dt != "undefined") {
                if(typeof slno_i == 'undefined')
                    slno_i = 0;
                table_rows = dt.fnGetNodes();
                var oSettings = dt.fnSettings();
                $.each(table_rows, function(index){
                    $("td:eq(" + slno_i + ")", this).html(oSettings._iDisplayStart+index+1);
                });
            }
        }

        function dt(){
            dt_table.ajax.reload();
        }

        function slugify(string) {
            const a = 'Ã Ã¡Ã¢Ã¤Ã¦Ã£Ã¥ÄÄƒÄ…Ã§Ä‡ÄÄ‘ÄÃ¨Ã©ÃªÃ«Ä“Ä—Ä™Ä›ÄŸÇµá¸§Ã®Ã¯Ã­Ä«Ä¯Ã¬Å‚á¸¿Ã±Å„Ç¹ÅˆÃ´Ã¶Ã²Ã³Å“Ã¸ÅÃµá¹•Å•Å™ÃŸÅ›Å¡ÅŸÈ™Å¥È›Ã»Ã¼Ã¹ÃºÅ«Ç˜Å¯Å±Å³áºƒáºÃ¿Ã½Å¾ÅºÅ¼Â·/_,:;'
            const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnooooooooprrsssssttuuuuuuuuuwxyyzzz------'
            const p = new RegExp(a.split('').join('|'), 'g')

            return string.toString().toLowerCase()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
                .replace(/&/g, '-and-') // Replace & with 'and'
                .replace(/[^\w\-]+/g, '') // Remove all non-word characters
                .replace(/\-\-+/g, '-') // Replace multiple - with single -
                .replace(/^-+/, '') // Trim - from start of text
                .replace(/-+$/, '') // Trim - from end of text
        }
        

    </script>
</body>
</html>