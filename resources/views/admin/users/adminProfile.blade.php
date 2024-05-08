@extends('admin.adminLayouts.masterPage')

@section('title')
AdminProfile
@stop

@section('admin')
Admin
@endsection

@section('example')
Profile
@endsection

@section('css')

@endsection

@section('titlePage1')
Profile
@endsection

@section('titlePage2')

@endsection

@section('content')
  <!-- Main content -->
  <!-- Main content -->

  <section class="content">
   
    <div class="container-fluid">
      <div class="row" style="
      display: flex;
      align-items: center;
      justify-content: center;
      align-content: center;
      flex-direction: column;
  ">
            <!-- Profile section -->
            <div class="col-md-4" >
                <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{URL::asset("storage/image/".Auth::user()->img)}}" alt="{{Auth::user()->name}}" style="
                       height: 130px;
                       width: 130px;"
                       alt="User profile picture"
                       style="width: 106px; height: 106px;">
              </div>
              
                <style>
                    .profile-info {
                        margin-bottom: 5px; /* Adjust the bottom margin as needed */
                    }
                </style>

                {{-- <h3 class="profile-username text-center profile-info">{{Auth::user()->name}}</h3> --}}
                <!--p class="text-muted text-center"--><!--/p-->

                <strong><i class="fas fa-user-shield mr-1" style="color: #e13300;"></i> Name</strong>
      
                      <p class="text-muted">
                        {{Auth::user()->name}}
                      </p>
      
                      <hr>
                      <strong><i class="fas fa-envelope mr-1" style="color: #e13300;"></i> Email</strong>
      
                      <p class="text-muted">
                        {{Auth::user()->email}}
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-map-marker-alt mr-1" style="color: #e13300;"></i> Location</strong>
      
                      <p class="text-muted">{{Auth::user()->location}}</p>
      
                      <hr>

                      <strong><i class="fas fa-phone mr-1" style="color: #e13300;"></i> Phone</strong>
      
                      <p class="text-muted">{{Auth::user()->Phone}}</p>
                      {{-- <hr> --}}
      
                      {{-- <strong><i class="fas fa-pencil-alt mr-1" style="color: #e13300;"></i> Skills</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                      </p>
      
                      <hr>
      
                      <strong><i class="far fa-file-alt mr-1" style="color: #e13300;"></i> Experience</strong>
      
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p> --}}
                     
                    </div>
                    <!-- /.card-body -->
                    <?php $admin=Auth()->user()->id ; ?>
                            
                              <button type="button" class="btn"  style="background-color: #e13300;">  <a href="{{route('users.edit',$admin)}}" style=" color: white;"><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i>Edit</a></button>
                  </div>
                  <!-- /.card -->
                  
            </div>
            <!-- /.col -->
          </div>
            <!-- General Information section -->
        
            <!-- /.col --> --
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->
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
