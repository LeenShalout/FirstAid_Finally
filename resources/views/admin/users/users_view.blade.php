@extends('admin.adminLayouts.masterPage')

@section('title')
Users/Admins Table
@stop

@section('admin')
Users/ Admins
@endsection

@section('example')
Table
@endsection

@section('css')

@endsection

@section('titlePage1')
UsersAdmins
@endsection

@section('titlePage2')
Table
@endsection

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.create') }}" style="background-color: #e13300; border-color: #e13300;" class="btn btn-primary float-right">Add User</a>


                    <a href="{{route('users.showDeletedUsers')}}" style="color: #e13300; text-decoration: underline;" >Show Deleted Users</a> 
               
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Location</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                           

                            @foreach ($users as $user)
                            @if ($user->role!="admin")
                            <tr>
                                
                               
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}} </td>
                                <td><img src="{{URL::asset("storage/image/".$user->img)}}" alt="{{$user->img}}" style="width:75px; height:75px"> </td>
                                <td>{{$user->location}} </td>
                                <td>{{$user->Phone}} </td>
                                <td>{{$user->role}} </td>

                        <td>
                            <a href="{{route('users.edit',$user->id)}}" style="color: #e13300;"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;color: #e13300;">
                                    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                </button>
                            </form>
                    
                        </td>
                    </tr>
                    @endif
                    @endforeach
                        </thead>
                        <tbody>
                            <!-- Table 1 rows go here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-header">

<a href="{{ route('users.create') }}" style="background-color: #e13300; border-color: #e13300; margin-right: 10px;" class="btn btn-primary float-right">Add Admin</a>

                    
               
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Location</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>

                            </tr>
                           
                            {{-- @if ($user->role=="admin") --}}
                            @foreach ($users as $admin)
                            {{-- {{dd($user->role);}} --}}
                            @if ($admin->role=="admin")
                            <tr>

                              
                               <td>{{$admin->name}} </td>
                               <td>{{$admin->email}} </td>
                               <td><img src="{{URL::asset("storage/image/".$admin->img)}}" alt="{{$admin->img}}" style="width:75px; height:75px"> </td>
                               <td>{{$admin->location}} </td>
                               <td>{{$admin->Phone}} </td>
                               <td>{{$admin->role}} </td>
                       <td>
                           <a href="{{route('users.edit',$admin->id)}}" style="color: #e13300;"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                           <form method="POST" action="{{ route('users.forcedelete', $admin->id) }}" style="display: inline;">
                               @csrf
                               @method('GET')
                               <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;color: #e13300;">
                                   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                               </button>
                           </form>
                   
                       </td>
                             
                                
                    </tr>
                                     @endif
                    @endforeach
                    {{-- @endif --}}
                        </thead>
                        <tbody>
                            <!-- Table 1 rows go here -->
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    
      
    </div>

@endsection

@section('scripts')
<script src="{{asset('css.admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('css.admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('css.admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('css.admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('css.admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('css.admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('css.admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('css.admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('css.admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('css.admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('css.admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('css.admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('css.admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('css.admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('css.admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('css.admin/dist/js/pages/dashboard.js')}}"></script>
<!-- Page specific script -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
