@extends('admin.adminLayouts.masterPage')

@section('title')
Admins Form
@stop

@section('admin')
Admins
@endsection

@section('example')
Form
@endsection

@section('css')

@endsection

@section('titlePage1')
Admins
@endsection

@section('titlePage2')
Form
@endsection

@section('content')
<!-- Main content -->
<div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <form method="post" action="{{ route('admins.store') }}">
                            @csrf
                        <!-- Your form elements here -->
                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Full Name" required>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="form-group">
    <label for="exampleFormControlInput1">Email </label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
 @enderror
  </div>
                        <div class="form-group">
                        <label for="dt">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Enter your Password" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror    
                    </div>
                        
                        <div class="form-group">
                            <label for="img">Image:</label>
                            <input type="file" class="form-control-file" id="img" name="img" >
                            </div>

                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Your Location" required>
                                @error('location')
                                <div class="alert alert-danger">{{ $message }}</div>
                             @enderror    
                            </div>

                                <div class="form-group">
                                    <label for="Phone">Phone:</label>
                                    <input type="text" class="form-control" id="Phone" name="Phone" placeholder="+962 000 000 000" required>
                                    @error('Phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror    
                                </div>

                            
  <div class="form-group text-center">
    <input type="submit" class="btn btn-primary btn-lg" value="Add">
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