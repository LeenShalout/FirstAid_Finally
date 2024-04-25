@extends('admin.adminLayouts.masterPage')

@section('title')
AidHub Admin Dashboard
@stop

@section('admin')
Admin
@endsection

@section('example')
Dashboard
@endsection

@section('css')

@endsection

@section('titlePage1')
Home
@endsection

@section('titlePage2')
Dashboard
@endsection

@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- PIE CHART -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title" style="color: black;">Most Searched Case</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" style="color: black;">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- STACKED BAR CHART -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title" style="color: black;">Most Countries</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: black;">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" style="color: black;">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart">
                <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
    <section class="content">
      <div class="container-fluid">
     <!-- Small boxes (Stat box) -->
     <div class="row">
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
           <h3 style="color: #e13300;">150</h3>


            <h4 style="color: black;">Users</h4>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>

          </div>
          <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 style="color: #e13300;">200</h3>

            <h4 style="color: black;">Cases</h4>
          </div>
          <div class="icon">
            <i class="ion ion-briefcase"></i>


          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

     <!-- /.row -->
    </div><!-- /.container-fluid -->
    <section class="content">
      <div class="container-fluid">
     <!-- Small boxes (Stat box) -->
     <div class="row">
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
           <h3 style="color: #e13300;">#</h3>


            <h4 style="color: black;">Blog</h4>
          </div>
          <div class="icon">
            <i class="fas fa-blog"></i>

          </div>
          <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 style="color: #e13300;">#</h3>

            <h4 style="color: black;">Workshop</h4>
          </div>
          <div class="icon">
            <i class="fas fa-book"></i>


          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
  </section>
  <!-- /.content -->
@endsection

@section('scripts')

@endsection
