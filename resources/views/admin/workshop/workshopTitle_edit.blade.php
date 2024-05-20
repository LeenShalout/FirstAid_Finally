@extends('admin.adminLayouts.masterPage')

@section('title')
Workshops Titles Editing
@stop

@section('admin')
Edit
@endsection

@section('example')
Workshop
@endsection

@section('css')

@endsection

@section('titlePage1')
Form
@endsection

@section('titlePage2')
Workshops
@endsection

@section('content')

      
          <!-- Main content -->
          <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data"  action="{{ route('AdminWorkshop.update',$workshops->id) }}">
                        <!-- Your form elements here -->
                        @method('PUT')
                        @csrf
                      
                        <div class="form-group">
                            <label for="">Workshop Name:</label>
                            <input type="text" class="form-control" id="fname" name="title" value="{{$workshops->title}}">
                        </div>
                        <div class="form-group">
                        <label for="">Description:</label>
                        <textarea class="form-control" id="" name="description" rows="3">{{$workshops->description}}</textarea>
                        </div>
                        <div class="form-group">
                        <label for="">workshop date:</label>
                        <input type="date" class="form-control" id="" name="workshop_date" rows="3" value="{{$workshops->workshop_date}}">
                        </div>
                        <div class="form-group">
                        <label for="">workshop type</label>
                        <select class="form-control" id="" name="workshop_type">
                        <option  value="{{$workshops->workshop_type}}">{{$workshops->workshop_type}}</option>
                          <option  value="On Site">On Site</option>
                          <option  value="Online">Online</option>
      
                        </select>
                        </div>
                        
                         <div class="form-group d-flex">
                         <div>
                                <!-- Display existing photo -->
                                <img src="{{ asset("storage/image/$workshops->photo") }}" alt="{{ $workshops->photo }}" style="width:100px; height:100px">
                          </div>
                            <div>
                            <label for="photo">Photo:</label>
                            <input type="file" class="form-control-file" id="photo" name="photo">
                            </div>
                         </div>

  </div>
  <div class="form-group text-center">
    <input type="submit" class="btn btn-primary btn-lg" value="Update Workshop">
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
