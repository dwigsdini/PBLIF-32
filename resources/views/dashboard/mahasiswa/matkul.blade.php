@extends('dashboard.main-admin')

@section('content')
<div class="container-padding">
  <!-- Start Row -->
  <div class="row">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</td>
                <th scope="col">Mata Kuliah</td>
                <th scope="col">Action</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</td>
                <td>Praktik Keinsinyuran</td>
                <td>
                    <button style="margin-bottom: 15px" class="btn btn-primary" data-toggle="modal" data-target="#warningModal">
                    Upload                        
                    </button>
               
               

            <tr>
                <th scope="row">2</td>
                <td>Kode Etik</td>
                <td>
                    <button style="margin-bottom: 15px" class="btn btn-primary">
                    {{-- <a style="color: white;" href="{{ url('dashboard/mahasiswa/edit',$dt->id)  }}"> --}}
                    Upload
                    </a>                             
                    </button>
                 
                

            <tr>
                <th scope="row">3</td>
                <td>Profesionalisme</td>
                <td>
                    <button style="margin-bottom: 15px" class="btn btn-primary">
                    {{-- <a style="color: white;" href="{{ url('dashboard/mahasiswa/edit',$dt->id)  }}"> --}}
                    Upload
                    </a>                             
                    </button>
               
               

            <tr>
                <th scope="row">4</td>
                <td>K3</td>
                <td>
                    <button style="margin-bottom: 15px" class="btn btn-primary">
                    {{-- <a style="color: white;" href="{{ url('dashboard/mahasiswa/edit',$dt->id)  }}"> --}}
                    Upload
                    </a>                             
                    </button>
               
               
                </td>
            </tr>
            
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="warningModalLabel">Warning</h5>
            </div>
            <form action="{{ route('upload.action') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-5">
                    <label for="formFileMultiple" class="form-label">Upload Tugas</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="tugas" multiple>
                </div>
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
           
            </div>
        </div>
        </div>
    </div>
    </td>





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