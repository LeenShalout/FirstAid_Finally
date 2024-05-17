@extends('admin.adminLayouts.masterPage')

@section('title')
Edit Users/Admins
@stop

@section('admin')
Edit
@endsection

@section('example')
User/ Admin
@endsection

@section('css')

@endsection

@section('titlePage1')
Edit
@endsection

@section('titlePage2')
User
@endsection

@section('content')
<!-- Main content -->
<div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                        <form enctype="multipart/form-data" action="{{ route('users.update',$user->id) }}" method="post">
                            @method('PATCH')
                            @csrf
                        <!-- Your form elements here -->
                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" placeholder="Full Name">
                        </div>
                        <div class="form-group">
    <label for="exampleFormControlInput1">Email </label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" value="{{ old('email', $user->email ?? '') }}">
  </div>
                        <div class="form-group">
                        <label for="dt">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Enter your Password"value="{{ old('password', $user->password ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="img">Image:</label>
                            <input type="file" class="form-control-file" id="img" name="img">
                            </div>


                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Your Location" value="{{ old('location', $user->location ?? '') }}">
                                </div>

                                <div class="form-group">
                                    <label for="Phone">Phone:</label>
                                    <input type="text" class="form-control" id="Phone" name="Phone" placeholder="+962 000 000 000" value="{{ old('Phone', $user->Phone ?? '') }}">
                                    </div>


                                        <div class="form-group">
                                            <select name="role">
                                                <option value="0"{{ $user->role === 'user' ? 'selected' : '' }}>0</option>
                                                    <option value="1"{{ $user->role === 'admin' ? 'selected' : '' }}>1</option>
                                            </select>

                                        </div>
  <div class="form-group text-center">
    <input type="submit" class="btn btn-primary btn-lg" value="Edit">
  </div>
                    </form>
                </div>
            </div>
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

</body>
</html>
@endsection
