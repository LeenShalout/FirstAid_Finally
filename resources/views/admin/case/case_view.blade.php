@extends('admin.adminLayouts.masterPage')

@section('title')
Cases Table
@stop

@section('admin')
Cases
@endsection

@section('example')
Table
@endsection

@section('css')

@endsection

@section('titlePage1')
Tables
@endsection

@section('titlePage2')
Cases
@endsection

@extends('admin.adminLayouts.masterPage')

@section('title', 'Case Management')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('AdminCase.create')}}" class="btn btn-primary float-right" style="background-color: #ff0000;">Add Case</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x: scroll">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Main Photo</th>
                                <th>Description</th>
                                <th>Intro</th>
                                <th>Signs</th>
                                <th>Treatment Procedures</th>
                                <th>Prevention Tips</th>
                                <th>Before</th>
                                <th>During</th>
                                <th>After</th>
                                <th>Photo</th>
                                <th>Video</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cases as $case)
                                <tr>
                                    <td>{{ $case->Category }}</td>
                                    <td>{{ $case->Title }}</td>
                                    <td><img src="{{ asset("storage/image/$case->MainPhoto") }}" alt="{{ $case->MainPhoto }}" style="width: 75px; height: 75px;"></td>
                                    <td>{{ $case->Description }}</td>
                                    <td>{{ $case->Intro }}</td>
                                    <td>{{ $case->Signs }}</td>
                                    <td>{{ $case->Treatment_Procedures }}</td>
                                    <td>{{ $case->Prevention_Tips }}</td>
                                    <td>{{ $case->Before }}</td>
                                    <td>{{ $case->During}}</td>
                                    <td>{{ $case->After}}</td>
                                    <td><img src="{{ asset("storage/image/$case->Photo") }}" alt="{{ $case->Photo }}" style="width: 75px; height: 75px;"></td>
                                    <td>{{ $case->Video }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('AdminCase.edit', $case->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <!-- Delete Form -->
                                        <form action="{{ route('AdminCase.destroy', $case->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13">No cases found.</td>
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
