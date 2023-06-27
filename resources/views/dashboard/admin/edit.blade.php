@extends('dashboard.main-admin')

@section('content')
<div class="container-padding">
  <!-- Start Row -->
  <div class="row">
    @if ($errors->any())
    @foreach ($errors->all() as $err)
        <p style="text-align: center; color:red;">{{ $err }}</p>
    @endforeach
    @endif

    <!-- Start Panel -->
    <form action="{{ url('/dashboard/mahasiswa/update',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="modal-body mx-3">
        <div class="md-form mb-5">
            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Nama" name="name" value="{{ $data->name }}">
        </div>
        <br>
        <div class="md-form mb-5">
            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="NIM" name="nim" value="{{ $data->nim }}">
        </div>
        <br>
        <div class="md-form mb-5">
            <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Email" name="email" value="{{ $data->email }}">
        </div>
        <br>
        <div class="md-form mb-5">
            <select id="orangeForm-name" class="form-control validate" name="jurusan" value="{{ $data->jurusan }}">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
              </select>
        </div>
    </div>
    <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-danger">
            <a class="color:white; text-decoration:none;" href="/dashboard/mahasiswa">Back</a>
        </button>
        <button type="submit" class="btn btn-success">Ubah User</button>
    </div>
    </div>
</form>
        
    <!-- End Panel -->

    





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