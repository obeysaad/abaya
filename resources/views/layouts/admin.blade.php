
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Abaya Dashboard</title>
<link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
rel="stylesheet">
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
rel="stylesheet">
<!-- BEGIN VENDOR CSS-->





@yield('style')
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/weather-icons/climacons.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/fonts/meteocons/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/charts/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/charts/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/forms/selects/select2.min.css')}}">
<link rel="stylesheet" type="text/css"
      href="{{asset('assets/admin-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">


@if( Session::get('locale') === 'ar')

<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/plugins/animate/animate.css')}}">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/vendors.css')}}">

<link rel="stylesheet" type="text/css"
      href="{{asset('assets/admin-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/pages/chat-application.css')}}">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/custom-rtl.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css-rtl/style-rtl.css')}}">
@else
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css/vendors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/forms/toggle/switchery.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/vendors/css/ui/dragula.min.css')}}">
<!-- END VENDOR CSS-->
<!-- BEGIN MODERN CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css/app.css')}}">
<!-- END MODERN CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/plugins/forms/switch.css')}}">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/css/style.css')}}">

s
@endif


<link rel="stylesheet" type="text/css" href="{{asset('assets/admin-assets/fonts/simple-line-icons/style.css')}}">


<style>
    body {
        font-family: 'Cairo', sans-serif;
    }
    table{
            text-align: center;
    }
    .dt-buttons{
        right:500px;
        }
</style>
</head>
<body class="vertical-layout vertical-menu 2-columns  menu-expanded fixed-navbar"
  data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->


@include('admin.includes.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->


@include('admin.includes.sidemenu')

@yield('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.includes.footer')




<!-- BEGIN VENDOR JS-->


<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="{{asset('assets/admin-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin-assets/vendors/js/tables/datatable/datatables.min.js')}}"
    type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
    type="text/javascript"></script>

<script src="{{asset('assets/admin-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
    type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
    type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('assets/admin-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin-assets/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->


<script src="{{asset('assets/admin-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
    type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>



<script src="{{asset('assets/admin-assets/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin-assets/js/scripts/extensions/dropzone.js')}}" type="text/javascript"></script>




<script>
    $(document).ready(function() {
        $('#table_id').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'pdfHtml5'
            ]
        } );
    } );


    
</script>
@yield('script')
</body>
</html>
