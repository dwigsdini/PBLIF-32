<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
 
  <title>Dashboard</title>

  <!-- ========== Css Files ========== -->
  <link href="{{asset('dashboard/css/root.css')}}" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
   @include('layouts.navbar')
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
@include('layouts.sidebar')
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  @include('layouts.header')
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
  @yield('content')
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- Start Footer -->
  @include('layouts.footer')
<!-- End Footer -->


</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- ================================================
jQuery Library
================================================ -->
{{-- <script src="{{asset('dashboard/js/jquery.min.js')}}"></script> --}}

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
{{-- <script src="{{asset('dashboard/js/bootstrap/bootstrap.min.js')}}"></script> --}}

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
{{-- <script src="{{asset('dashboard/js/plugins.js')}}"></script> --}}

<!-- ================================================
Bootstrap Select
================================================ -->
<script src="{{asset('dashboard/js/bootstrap-select/bootstrap-select.js')}}"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script src="{{asset('dashboard/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script src="{{asset('dashboard/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js')}}"></script>
<!-- bootstrap file -->
<script src="{{asset('dashboard/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>

<!-- ================================================
Summernote
================================================ -->
<script src="{{asset('dashboard/js/summernote/summernote.min.js')}}"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script src="{{asset('dashboard/js/flot-chart/flot-chart.js')}}"></script>
<!-- time.js -->
<script src="{{asset('dashboard/js/flot-chart/flot-chart-time.js')}}"></script>
<!-- stack.js -->
<script src="{{asset('dashboard/js/flot-chart/flot-chart-stack.js')}}"></script>
<!-- pie.js -->
<script src="{{asset('dashboard/js/flot-chart/flot-chart-pie.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('dashboard/js/flot-chart/flot-chart-plugin.js')}}"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script src="{{asset('dashboard/js/chartist/chartist.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('dashboard/js/chartist/chartist-plugin.js')}}"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script src="{{asset('dashboard/js/easypiechart/easypiechart.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('dashboard/js/easypiechart/easypiechart-plugin.js')}}"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="{{asset('dashboard/js/rickshaw/d3.v3.js')}}"></script>
<!-- main file -->
<script src="{{asset('dashboard/js/rickshaw/rickshaw.js')}}"></script>
<!-- demo codes -->
<script src="{{asset('dashboard/js/rickshaw/rickshaw-plugin.js')}}"></script>

<!-- ================================================
Data Tables
================================================ -->
{{-- <script src="{{asset('dashboard/js/datatables/datatables.min.js')}}"></script> --}}

<!-- ================================================
Sweet Alert
================================================ -->
<script src="{{asset('dashboard/js/sweet-alert/sweet-alert.min.js')}}"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="{{asset('dashboard/js/kode-alert/main.js')}}"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script src="{{asset('dashboard/js/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- ================================================
Moment.js
================================================ -->
<script src="{{asset('dashboard/js/moment/moment.min.js')}}"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script src="{{asset('dashboard/js/full-calendar/fullcalendar.js')}}"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script src="{{asset('dashboard/js/date-range-picker/daterangepicker.js')}}"></script>



</body>
</html>