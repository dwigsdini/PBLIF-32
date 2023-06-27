@extends('dashboard.main-admin')

@section('content')
<div class="container-padding">
    
  <!-- Start Row -->
  <div class="row">

    <div class="row">
        <div class="col-sm-4">
            @if (auth()->user()->image)
            <img src="{{ auth()->user()->image }}" alt="Profile" style="width: 300px; height:300px; margin-bottom:100px;">
            @else
            <img src="{{asset('dashboard/img/profileimg.png')}}"  alt="img" style="width: 300px; height:300px; margin-bottom:100px;"> 
            @endif
            
        </div>
        <div class="col-sm-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profile</h5>
              <p class="card-text">Name : {{ auth()->user()->name }}</p>
              <p class="card-text">Username : {{ auth()->user()->username }}</p>
              <p class="card-text">NIM : {{ auth()->user()->nim }}</p>
              <p class="card-text">Jurusan : {{ auth()->user()->jurusan }}</p>
              <p class="card-text">Email : {{ auth()->user()->email }}</p>
              <p class="card-text">Role : {{ auth()->user()->role }}</p>
            </div>
          </div>
        </div>
</div>


<!-- ================================================
jQuery Library
================================================ -->
<script src="{{asset('dashboard/js/jquery.min.js')}}"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="{{asset('dashboard/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script src="{{asset('dashboard/js/plugins.js')}}"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="{{asset('dashboard/js/datatables/datatables.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>


<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );
</script>


@endsection