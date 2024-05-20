@extends('admin.adminLayouts.masterPage')

@section('title')
Case Form
@stop

@section('admin')
Create
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
                <div class="card-body" style="overflow-x: scroll">

                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Create Case Form -->
                    <form method="POST" enctype="multipart/form-data" action="{{ route('AdminCase.store') }}">
                        @csrf <!-- CSRF protection -->

                        <div class="form-group">
                        <label for="Category">Category</label>
                   <select class="form-control" id="Category" name="Category">
                       <option value="">Select Category</option>
                       <option value="Human_Body">Human Body</option>
                       <option value="Natural_Disasters">Natural Disasters</option>
                       <option value="Animal_Related_Injuries">Animal-Related Injuries</option>
                  </select>
               </div>

                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" id="" name="Title" value="">
                        </div>
                        <div class="form-group">

                                <label for="photo">Main Photo:</label>
                                <input type="file" class="form-control-file" id="" name="MainPhoto">

                        </div>

                        <div class="form-group">
                            <label for="intro">Description:</label>
                            <textarea class="form-control" id="" name="Description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="intro">Intro:</label>
                            <textarea class="form-control" id="intro" name="Intro" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="signs">Signs:</label>
                            <textarea class="form-control" id="signs" name="Signs" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="procedures">Treatment Procedures:</label>
                            <textarea class="form-control" id="procedures" name="Treatment_Procedures" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="tips">Prevention Tips:</label>
                            <textarea class="form-control" id="tips" name="Prevention_Tips" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="procedures">Before:</label>
                            <textarea class="form-control" id="Before" name="Before" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="procedures">During:</label>
                            <textarea class="form-control" id="During" name="During" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="procedures">After:</label>
                            <textarea class="form-control" id="After" name="After" rows="3"></textarea>
                        </div>
                        <div class="form-group d-flex">
                            <div>
                                <label for="photo">Photo:</label>
                                <input type="file" class="form-control-file" id="photo" name="Photo">
                            </div>
                            <div>
                                <label for="video">Video:</label>
                                <input type="text" class="form-control" id="video" name="Video">
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary btn-lg" value="Add Case">
                        </div>
                    </form>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('scripts')
<script>
        $(document).ready(function() {
            // Function to toggle visibility of form sections based on selected category
            $('#Category').change(function() {
                var Category = $(this).val();

                // Hide all sections first
                //$('#tips').hide();
                $('#procedures').hide();
                $('#signs').hide();
                $('#Before').hide();
                $('#During').hide();
                $('#After').hide();

                // Show sections based on selected category
                if (Category === 'Human_Body' || Category === 'Animal_Related_Injuries') {
                   // $('#tips').show();
                    $('#procedures').show();
                    $('#signs').show();
                } else {
                    $('#Before').show();
                    $('#During').show();
                    $('#After').show();
                }
            });
        });
    </script>
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
