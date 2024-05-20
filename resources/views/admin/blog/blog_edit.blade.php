@extends('admin.adminLayouts.masterPage')

@section('title')
Blogs Form
@stop

@section('admin')
Edit
@endsection

@section('example')
Blogs
@endsection

@section('css')

@endsection

@section('titlePage1')
Form
@endsection

@section('titlePage2')
Blogs
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('AdminBlog.update', $blog->id) }}">
                    @method('PUT')
                    @csrf
                    <!-- Your form elements here -->
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <select class="form-control" id="Category" name="Category">
                            <option value="Pets" {{ $blog->Category === 'Pets' ? 'selected' : '' }}>Pets</option>
                            <option value="Psychological" {{ $blog->Category === 'Psychological' ? 'selected' : '' }}>Psychological</option>
                            <option value="People with Special Needs" {{ $blog->Category === 'People with Special Needs' ? 'selected' : '' }}>People with Special Needs</option>
                            <option value="Big Occasions" {{ $blog->Category === 'Big Occasions' ? 'selected' : '' }}>Big Occasions</option>
                            <option value="Equipment" {{ $blog->Category === 'Equipment' ? 'selected' : '' }}>Equipment</option>
                            <option value="Travel" {{ $blog->Category === 'Travel' ? 'selected' : '' }}>Travel</option>
                            <option value="Food" {{ $blog->Category === 'Food' ? 'selected' : '' }}>Food</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mainTitle">Main Title:</label>
                        <input type="text" class="form-control" id="mainTitle" name="MainTitle"  value="{{ $blog->MainTitle }}">
                    </div>
                    <div class="form-group d-flex gap-3">
                            <div>
                                <!-- Display existing photo -->
                                <img src="{{ asset("storage/image/$blog->MainImg") }}" alt="{{ $blog->MainImg }}" style="width:100px; height:100px">
                            </div>
                            <div>
                                <label for="MainImg">Main Photo:</label>
                                <input type="file" class="form-control-file" id="MainImg" name="MainImg">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary:</label>
                        <input type="text" class="form-control" id="summary" name="Summary"  value="{{ $blog->Summary }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="Title"  value="{{ $blog->Title }}">
                    </div>
                    <div class="form-group">
                        <label for="intro">Intro:</label>
                        <textarea class="form-control" id="intro" name="Intro" rows="3"> {{ $blog->Intro}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="steps">Steps:</label>
                        <textarea class="form-control" id="steps" name="Steps" rows="3">{{ $blog->Steps}}</textarea>
                    </div>
                    <div class="form-group d-flex gap-3">
                            <div>
                                <!-- Display existing photo -->
                                <img src="{{ asset("storage/image/$blog->Photo") }}" alt="{{ $blog->Photo }}" style="width:100px; height:100px">
                            </div>
                            <div>
                                <label for="photo">Photo:</label>
                                <input type="file" class="form-control-file" id="photo" name="Photo">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="conclusion">Conclusion:</label>
                        <textarea class="form-control" id="conclusion" name="Conclusion" rows="3"> {{ $blog->Conclusion}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary btn-lg" value="Update Blog">
                    </div>
                </form>
            </div>
        </div>
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