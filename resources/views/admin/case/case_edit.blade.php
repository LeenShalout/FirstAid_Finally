@extends('admin.adminLayouts.masterPage')

@section('title')
Case Form
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
                    <form method="POST" action="{{ route('AdminCase.update', $case->id) }}" enctype="multipart/form-data" id="updateCaseForm">
                        @method('PUT') <!-- Specify the HTTP method -->
                        @csrf <!-- CSRF protection -->

                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select class="form-control" id="Category" name="Category">
                                <option value="Human_Body" {{ $case->Category === 'Human_Body' ? 'selected' : '' }}>Human Body</option>
                                <option value="Natural_Disasters" {{ $case->Category === 'Natural_Disasters' ? 'selected' : '' }}>Natural Disasters</option>
                                <option value="Animal_Related_Injuries" {{ $case->Category === 'Animal_Related_Injuries' ? 'selected' : '' }}>Animal-Related Injuries</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" id="Title" name="Title" value="{{ $case->Title }}">
                        </div>

                        <div class="form-group">
                            <label for="intro">Description:</label>
                            <textarea class="form-control" id="" name="Description" rows="3">{{ $case->Description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="intro">Intro:</label>
                            <textarea class="form-control" id="intro" name="Intro" rows="3">{{ $case->Intro}}</textarea>
                        </div>

                        <!-- Dynamic sections based on category -->
                        <div id="dynamicSections">
                            
                        </div>

                        <div class="form-group d-flex gap-3">
                            <div>
                                <!-- Display existing photo -->
                                <img src="{{ asset("storage/image/$case->Photo") }}" alt="{{ $case->Photo }}" style="width:100px; height:100px">
                            </div>
                            <div>
                                <!-- Input for new photo -->
                                <label for="Photo">Photo:</label>
                                <input type="file" class="form-control-file" id="Photo" name="Photo">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Video">Video:</label>
                            <input type="text" class="form-control" id="Video" name="Video" value="{{ $case->Video }}">
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary btn-lg" value="Update Case">
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection

@section('scripts')
    <!-- Place your custom scripts here -->
    <script>
        $(document).ready(function() {
            
            $('#Category').change(function() {
                var selectedCategory = $(this).val();

                // Remove existing dynamic sections
                $('#dynamicSections').empty();

                // Append new form fields based on the selected category
                if (selectedCategory === 'Human_Body' || selectedCategory === 'Animal_Related_Injuries') {
                    $('#dynamicSections').append(`
                        <div class="form-group">
                            <label for="Signs">Signs:</label>
                            <textarea class="form-control" id="Signs" name="Signs" rows="3">{{ $case->Signs }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Treatment_Procedures">Treatment Procedures:</label>
                            <textarea class="form-control" id="Treatment_Procedures" name="Treatment_Procedures" rows="3">{{ $case->Treatment_Procedures }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="Prevention_Tips">Prevention Tips:</label>
                            <textarea class="form-control" id="Prevention_Tips" name="Prevention_Tips" rows="3">{{ $case->Prevention_Tips }}</textarea>
                        </div>
                    `);
                } else {
                    $('#dynamicSections').append(`
                        <div class="form-group">
                            <label for="Before">Before:</label>
                            <textarea class="form-control" id="Before" name="Before" rows="3">{{ $case->Before }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="During">During:</label>
                            <textarea class="form-control" id="During" name="During" rows="3">{{ $case->During }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="After">After:</label>
                            <textarea class="form-control" id="After" name="After" rows="3">{{ $case->After }}</textarea>
                        </div>
                    `);
                }
            });

            // Trigger initial change to populate the form fields based on the current category
            $('#Category').trigger('change');
        });
    </script>
</body>
</html>
@endsection

