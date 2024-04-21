@extends('admin.adminLayouts.masterPage')

@section('title')
Case Form Editing
@stop

@section('admin')
Edit
@endsection

@section('example')
Case
@endsection

@section('css')

@endsection

@section('titlePage1')
Form
@endsection

@section('titlePage2')
Cases
@endsection

@section('content')

            
      
          <!-- Main content -->
          <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form>
                        <!-- Your form elements here -->
                        <div class="form-group">
                        <label for="category">Category</label>
                       <select class="form-control" id="category">
                          <option  value="Human_Body">Human Body</option>
                          <option  value="Natural_Disasters">Natural Disasters</option>
                          <option  value="Animal_Related_Injuries">Animal-Related Injuries</option>
      
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="fname">Title:</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="">
                        </div>
                        <div class="form-group">
                        <label for="intro">Intro:</label>
                        <textarea class="form-control" id="intro" name="intro" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="steps">Signs:</label>
                        <textarea class="form-control" id="Signs" name="Signs" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="steps">Treatment Procedures:</label>
                        <textarea class="form-control" id="Treatment Procedures" name="Treatment Procedures" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="steps">Prevention Tips:</label>
                        <textarea class="form-control" id="Prevention Tips" name="Prevention Tips" rows="3"></textarea>
                        </div>
  <div class="form-group d-flex">
    <div>
    <label for="photo">Photo:</label>
    <input type="file" class="form-control-file" id="photo" name="photo">
</div>
<div>
    <label for="video">Video:</label>
    <input type="file" class="form-control-file" id="video" name="video">
</div>
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
