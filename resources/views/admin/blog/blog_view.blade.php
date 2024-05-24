@extends('admin.adminLayouts.masterPage')

@section('title')
Blogs Table
@stop

@section('admin')
Blogs
@endsection

@section('example')
Table
@endsection

@section('css')
<style>
    .table td, .table th {
        padding: 8px;
        vertical-align: middle;
        max-width: 150px; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: nowrap; 
    } 
</style>
@endsection

@section('titlePage1')
Tables
@endsection

@section('titlePage2')
blogs
@endsection


@section('title', 'Blog Management')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('AdminBlog.create')}}" class="btn btn-primary float-right"  style="background-color: #e13300; border-color: #e13300;">Add Blog</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="overflow-x: scroll">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Main Title</th>
                                <th>Main Photo</th>
                                <th>Summary</th>
                                <th>Title</th>
                                <th>Intro</th>
                                <th>Steps</th>
                                <th>Photo</th>
                                <th>Conclusion</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->Category }}</td>
                                    <td>{{ $blog->MainTitle }}</td>
                                    <td><img src="{{ asset("storage/image/$blog->MainImg") }}" alt="{{ $blog->MainImg }}" style="width: 75px; height: 75px;"></td>
                                    <td>{{ $blog->Summary }}</td>
                                    <td>{{ $blog->Title }}</td>
                                    <td>{{ $blog->Intro }}</td>
                                    <td>{{ $blog->Steps }}</td>
                                    <td><img src="{{ asset("storage/image/$blog->Photo") }}" alt="{{ $blog->Photo }}" style="width: 75px; height: 75px;"></td>
                                    <td>{{ $blog->Conclusion }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <a href="{{ route('AdminBlog.edit', $blog->id) }} "  style="color: #e13300;" title="Edit">
                                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                        </a>
                                        <!-- Delete Form -->
                                        <form action="{{ route('AdminBlog.destroy', $blog->id) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="background: none; border: none; padding: 0; margin: 0; cursor: pointer;color: #e13300;">
                                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13">No blogs found.</td>
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
