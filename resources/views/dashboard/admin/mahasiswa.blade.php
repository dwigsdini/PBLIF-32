@extends('dashboard.main-admin')

@section('content')
<div class="container-padding">
  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default" style="margin-top:50px">
        <div class="panel-title">
          Table Users
        </div>
        
        <button style="margin-bottom: 15px" class="btn btn-success" data-toggle="modal" data-target="#modalRegisterForm">
            Tambah User
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Tambah User</h4>
                    @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p style="text-align: center; color:red;">{{ $err }}</p>
                    @endforeach
                    @endif
                    </button>
                </div>
                <form action="{{ route('save.mahasiswa') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Nama" name="name" >
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <input type="text" id="orangeForm-name" class="form-control validate" placeholder="Username" name="username">
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <input type="password" id="orangeForm-name" class="form-control validate" placeholder="Password" name="password">
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <input type="password" id="orangeForm-name" class="form-control validate" placeholder="Password Confirm" name="password_confirm">
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <input type="text" id="orangeForm-name" class="form-control validate" placeholder="NIM" name="nim">
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <select id="orangeForm-name" class="form-control validate" name="jurusan" value="Jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                          </select>
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <input size="100" type="text" id="orangeForm-name" class="form-control validate" placeholder="Email" name="email">
                    </div>
                    <br>
                    <div class="md-form mb-5">
                        <select id="orangeForm-name" class="form-control validate" name="role" value="role">
                            <option value="Admin">Admin</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                          </select>
                    </div>
                    <br>
                    <div class="mb-5">
                        <label for="formFileMultiple" class="form-label">Add Picture Profile</label>
                        <input class="form-control" type="file" id="formFileMultiple" name="image" multiple>
                    </div>

                    
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Tambah User</button>
                </div>
                </div>
            </form>
            </div>
            </div>

             
        
        
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Role</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
             
                
                <tbody>

                    
                    @foreach ($data as $dt)
                    <tr>
                        <td>{{ $dt->name }}</td>
                        <td>{{ $dt->nim }}</td>
                        <td>{{ $dt->jurusan }}</td>
                        <td>{{ $dt->email }}</td>
                        <td>{{ $dt->role }}</td>
                        <td>
                            <button style="margin-bottom: 15px" class="btn btn-primary">
                            <a style="color: white;" href="{{ url('dashboard/mahasiswa/edit',$dt->id)  }}">
                            Edit
                            </a>                             
                            </button>
                        
                            
                          <button style="margin-bottom: 15px" class="btn btn-danger" data-toggle="modal" data-target="#warningModal">
                            
                                Delete
                                 
                          </button>
                        <a style="color: white;" href="{{ url('dashboard/mahasiswa/view',$dt->id)  }}">
                          <button style="margin-bottom: 15px" class="btn btn-success">
                                View
                          </button>
                        </a>  
                        <!-- Modal -->
                        <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="warningModalLabel">Warning</h5>
                                </div>
                                <div class="modal-body">
                                Are you sure you want to delete?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a style="color: white;" href=" {{ url('/dashboard/mahasiswa/delete',$dt->id)  }}">
                                <button type="button" class="btn btn-danger" onclick="deleteItem()">Delete</button>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </td>
                    
                    @endforeach

                    @if ($data === 0)
                        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
    
                    @endif
                </tr>
                </tbody>
                
            </table>
            <br><br><br><br><br><br><br><br><br>

            

           


        </div>

      </div>
    </div>
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