<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('admin.adminLayouts.head')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('css.admin/dist/img/aidhub1.png')}}" alt="AidhubLogo" height="20" width="100">
  </div>

 @include('admin.adminLayouts.mainHeaderbar')

 @include('admin.adminLayouts.mainSidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 style="font-size: 2.1rem; font-weight: 300; margin-bottom: 0.3rem; text-align: left; color: #e13300;">
              <b>@yield('admin')</b>@yield('example')
          </h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color:#e13300">@yield('titlePage1')</a></li>
              <li class="breadcrumb-item active">@yield('titlePage2')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    @yield('content')
    
  </div>
  
  @include('admin.adminlayouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.adminLayouts.footerScripts')

<script>
 $(function () {
  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //--------------
  //- AREA CHART -
  //--------------

  var areaChartData = {
    labels  : ['Cases', 'Blogs', 'Workshops', 'Experiences'],
    datasets: [
      {
        label               : 'This Month',
        backgroundColor     : 'rgba(225,51,0,255)',
        borderColor         : 'rgba(225,51,0,255)',
        pointRadius          : false,
        pointColor          : '#e13300',
        pointStrokeColor    : 'rgba(225,51,0,255)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(225,51,0,255)',
        data                : [48, 28, 30, 19, 86, 27, 90]
      }
    ]
  }

  var areaChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  //-------------
  //- LINE CHART -
  //--------------
  var lineChartOptions = $.extend(true, {}, areaChartOptions)
  var lineChartData = $.extend(true, {}, areaChartData)
  lineChartData.datasets[0].fill = false;

  //-------------
  //- DONUT CHART -
  //-------------
  var donutData        = {
    labels: [
        'Human Body',
        'Natural Disasters',
        'Animal-Related Injuries',
        
    ],
    datasets: [
      {
        data: [70,50,40],
        backgroundColor : [ '#e13300', '#808080','#F8DFDB' ],
      }
    ]
  }
  var donutOptions     = {
    maintainAspectRatio : false,
    responsive : true,
  }

  //-------------
  //- PIE CHART -
  //-------------
  var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
  var pieData        = donutData;
  var pieOptions     = {
    maintainAspectRatio : false,
    responsive : true,
  }
  new Chart(pieChartCanvas, {
    type: 'pie',
    data: pieData,
    options: pieOptions
  })

  //-------------
  //- BAR CHART -
  //-------------
  var barChartData = $.extend(true, {}, areaChartData)

  var barChartOptions = {
    responsive              : true,
    maintainAspectRatio     : false,
    datasetFill             : false
  }

  //---------------------
  //- STACKED BAR CHART -
  //---------------------
  var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
  var stackedBarChartData = $.extend(true, {}, barChartData)

  var stackedBarChartOptions = {
    responsive              : true,
    maintainAspectRatio     : false,
    scales: {
      xAxes: [{
        stacked: true,
      }],
      yAxes: [{
        stacked: true
      }]
    }
  }

  new Chart(stackedBarChartCanvas, {
    type: 'bar',
    data: stackedBarChartData,
    options: stackedBarChartOptions
  })
})

</script>
</body>
</html>
