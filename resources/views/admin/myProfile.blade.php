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
        <div class="row">
            <!-- Profile section -->
            <div class="col-md-4">
                <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('css.admin/dist/img/nadin.jpg')}}"
                       alt="User profile picture"
                       style="width: 106px; height: 106px;">
              </div>
              
                <style>
                    .profile-info {
                        margin-bottom: 5px; /* Adjust the bottom margin as needed */
                    }
                </style>

                <h3 class="profile-username text-center profile-info">Nadin Alhassan</h3>

                <p class="text-muted text-center profile-info">Software Developer</p>
                <p class="text-muted text-center">nadinalhassan3@gmail.com</p>

                
                      <strong><i class="fas fa-book mr-1" style="color: #e13300;"></i> Education</strong>
      
                      <p class="text-muted">
                        B.S. in Computer Information Systems from the University of Jordan
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-map-marker-alt mr-1" style="color: #e13300;"></i> Location</strong>
      
                      <p class="text-muted">Amman, Jordan</p>
      
                      <hr>
      
                      <strong><i class="fas fa-pencil-alt mr-1" style="color: #e13300;"></i> Skills</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger">UI Design</span>
                        <span class="tag tag-success">Coding</span>
                        <span class="tag tag-info">Javascript</span>
                        <span class="tag tag-warning">PHP</span>
                        <span class="tag tag-primary">Node.js</span>
                      </p>
      
                      <hr>
      
                      <strong><i class="far fa-file-alt mr-1" style="color: #e13300;"></i> Experience</strong>
      
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                     
                    </div>
                    <!-- /.card-body -->
                   
                  </div>
                  <!-- /.card -->
                  
            </div>
            <!-- /.col -->

            <!-- General Information section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><h3>General Information</li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="settings">
                                <form class="form-horizontal">
                                    <!-- Form fields -->
                                </form>
                            </div> <div id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputFirstName" placeholder="FirstName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputLastName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLastName" placeholder="LastName">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="headline" class="col-sm-2 col-form-label">Headline</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="headline" placeholder="Headline">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="education" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="education" placeholder="Education">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="location" placeholder="Location">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.content -->
@endsection

@section('scripts')

@endsection
