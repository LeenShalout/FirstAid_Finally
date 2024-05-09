@extends('admin.adminLayouts.masterPage')

@section('title')
Blogs Form
@stop

@section('admin')
Create
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('AdminBlog.store') }}">
                    @csrf
                    <!-- Your form elements here -->
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="Category">
                            <option value="">Select Category</option>
                            <option value="Pets">Pets</option>
                            <option value="Psychological">Psychological</option>
                            <option value="People with Special Needs">People with Special Needs</option>
                            <option value="Big Occasions">Big Occasions</option>
                            <option value="Equipment">Equipment</option>
                            <option value="Travel">Travel</option>
                            <option value="Food">Food</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mainTitle">Main Title:</label>
                        <input type="text" class="form-control" id="mainTitle" name="MainTitle" value="">
                    </div>
                    <div class="form-group">
                        <label for="mainImg">Main Photo:</label>
                        <input type="file" class="form-control-file" id="mainImg" name="MainImg">
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary:</label>
                        <input type="text" class="form-control" id="summary" name="Summary" value="">
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="Title" value="">
                    </div>
                    <div class="form-group">
                        <label for="intro">Intro:</label>
                        <textarea class="form-control" id="intro" name="Intro" rows="3"></textarea>
                    </div>
                    <div class="form-group ">
                    <div class="row containera containerb">
        
                            <div class="col-sm-12">
                            <!-- text input -->
                                <div class="form-group">
                                    <label>Steps</label>
                                    <input type="text" name="Steps0" class="form-control" placeholder="Enter Steps ...">
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>dis</label>
                                        <input type="text" name="dis0" class="form-control" placeholder="Enter dis ...">
                                    </div>
                                </div> 
                      </div> 
                    {{-- <div class="row ">
        
                            
                      </div>  --}}
        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="button" class="add_form_field btn btn-primary">Add New Field &nbsp; 
                                        <span style="font-size:16px; font-weight:bold;">+</span>
                                    </button>       
                                </div>
                            </div>
                         </div>           
         </div>

                    <div class="form-group">
                        <label for="photo">Photo:</label>
                        <input type="file" class="form-control-file" id="photo" name="Photo">
                    </div>
                    <div class="form-group">
                        <label for="conclusion">Conclusion:</label>
                        <textarea class="form-control" id="conclusion" name="Conclusion" rows="3"></textarea>
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

@endsection


@section('scripts')
<script> 
  $(document).ready(function() {
    var max_fields = 30;
    var count =0;
    var wrappera = $(".containera");
    var wrapperb = $(".containerb");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            a=`<div class='col-sm-12'><div class='form-group'><label>Steps</label><input type='text' name='Steps${++count}' class='form-control' placeholder='Enter Lable ...'><a href="#" class="delete">Delete</a> 
            </div></div>`;
            b=`<div class='col-sm-12'><div class='form-group'><label>dis</label><input type='text' name='dis${count}' class='form-control' placeholder='Enter Lable ...'><a href="#" class="delete">Delete</a>        <input name="count" type="hidden" value="${count}">
            </div></div>`;
            $(wrappera).append(a);
            $(wrapperb).append(b);
                      
                      //add input box
        } else {
        alert('You Reached the limits')
        }   
    });   

    $(wrapper).on("click", ".delete", function(e) { 
        e.preventDefault(); 
        $(this).parent('div').remove(); 
        x--; 
        count--;
    }) 
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


