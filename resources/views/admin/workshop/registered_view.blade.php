@extends('admin.adminLayouts.masterPage')

@section('title')
Workshop table
@stop

@section('admin')
Workshop Registered
@endsection

@section('example')
Table
@endsection

@section('css')

@endsection

@section('titlePage1')
Workshop Registered
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

                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x: scroll">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Workshop Name</th>
                                <th>Type</th>
                                <th>Workshop Date</th>
                                <th>Action</th>
                            </tr>

                        </thead>

                        <tbody>
                        @forelse($registrations as $registrations)

                    <tr>

                            <td>{{$registrations->first_name}}</td>
                            <td>{{$registrations->last_name}}</td>
                            <td>{{$registrations->Email}}</td>
                            <td>{{$registrations->phone}}</td>
                            <td>{{$registrations->workshopTitle->title }}</td>
                            <td>{{$registrations->workshopTitle->workshop_type }}</td>
                            <td>{{$registrations->workshopTitle->workshop_date }}</td>



                        <td>
                        <form action="{{route('Registered.destroy',$registrations->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="material-icons"data-toggle="tooltip">&#xE872;</i></button>
                      </form>
                        </td>
                    </tr>
                    @empty
        <tr>
            <td colspan="9">No Workshops found.</td>
        </tr>
    @endforelse
                        </tbody>
                    </table>
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

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection
