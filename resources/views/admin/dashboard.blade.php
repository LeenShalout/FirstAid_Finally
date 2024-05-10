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
              <h3 class="card-title" style="color: black;">Most Visited</h3>

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
           <h3 style="color: #e13300;">{{$userCount}}</h3>


            <h4 style="color: black;">Users</h4>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>

          </div>
          {{-- <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
      </div>
      <!-- ./col -->
      
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 style="color: #e13300;">{{$adminCount}}</h3>

            <h4 style="color: black;">Admins</h4>
          </div>
          <div class="icon">
            <i class="fas fa-user-shield"></i>


          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
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
           <h3 style="color: #e13300;">{{$casesCount}}</h3>


            <h4 style="color: black;">Cases</h4>
          </div>
          <div class="icon">
            <i class="ion ion-medkit"></i>

          </div>
          {{-- <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3 style="color: #e13300;">{{$workshopCount}}</h3>

            <h4 style="color: black;">Workshop</h4>
          </div>
          <div class="icon">
            <i class="fas fa-book"></i>
          </div>
          {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>     
      </div>
      <!-- ./col -->
      
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
         <h3 style="color: #e13300;">{{$blogsCount}}</h3>


          <h4 style="color: black;">Blogs</h4>
        </div>
        <div class="icon">
          <i class="fas fa-blog"></i>

        </div>
        {{-- <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
      
      
    </div>
    <div class="col-lg-6 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3 style="color: #e13300;">{{$experienceCount}}</h3>

          <h4 style="color: black;">Experiences</h4>
        </div>
        <div class="icon">
          <i class="fas fa-comment"></i>
        </div>
        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-6">
        <!-- TO DO List -->
        <div class="card">
          <div class="card-header">
              <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
              </h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" id="add-item">
                      <i class="fas fa-plus"style="color:#e13300;"></i> <span style="color:#e13300;">Add Items</span>
                  </button>
                  <button type="button" class="btn btn-tool" id="edit-items">
                      <i class="fas fa-edit" style="color:#e13300;"></i> <span style="color:#e13300;">Edit Items</span>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                  </button>
              </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <ul class="todo-list" data-widget="todo-list" id="todo-list">
                  <!-- Existing to-do items will be here -->
              </ul>
          </div>
          <!-- /.card-body -->
         
        </div>
        {{-- <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      </div> 
      <div class="col-lg-6 col-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Recently Added Admins</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="products-list product-list-in-card pl-2 pr-2">
              @foreach ($recentlyAddedAdmins as $admin)
              <li class="item">
                <div class="product-img">
                  <img src="{{ URL::asset("storage/image/$admin->img") }}" alt="{{ $admin->name }}"  class="img-size-50">
                </div>
                <div class="product-info">
                  <a class="product-title">{{ $admin->name }}
                  <span class="product-description">
                    {{ $admin->email }}
                  </span>
                </div>
              </li>
              @endforeach
              <!-- /.item -->
            </ul>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('users.index')}}" class="uppercase">View All Admins</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-6">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Latest Orders</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Item</th>
                  <th>Status</th>
                  <th>Popularity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-info">Processing</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR1848</a></td>
                  <td>Samsung Smart TV</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR7429</a></td>
                  <td>iPhone 6 Plus</td>
                  <td><span class="badge badge-danger">Delivered</span></td>
                  <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                  </td>
                </tr>
                <tr>
                  <td><a href="pages/examples/invoice.html">OR9842</a></td>
                  <td>Call of Duty IV</td>
                  <td><span class="badge badge-success">Shipped</span></td>
                  <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
      <div class="col-lg-6 col-6">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Latest Users</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <ul class="users-list clearfix">
              @foreach ($latestUsers as $user)
              <li>
                <img src="{{ URL::asset("storage/image/$user->img") }}" alt="{{ $user->name }}" style=" height:50px; width:50px">
                <a class="users-list-name" >{{$user->name}}</a>
                <span class="users-list-date">{{$user->created_at}}</span>
              </li>
              @endforeach
            </ul>
            <!-- /.users-list -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('users.index')}}">View All Users</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
</section>
  </section>
  <!-- /.content -->
@endsection

@section('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
      const addItemButton = document.getElementById('add-item');
      const editItemsButton = document.getElementById('edit-items');
      const todoList = document.getElementById('todo-list');
  
      // Function to add a new to-do item
      addItemButton.addEventListener('click', function() {
          const newItem = prompt('Enter your new to-do item:');
          if (newItem) {
              const li = document.createElement('li');
              li.innerHTML = `
                  <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo" id="todoCheck">
                      <label for="todoCheck"></label>
                  </div>
                  <span class="text">${newItem}</span>
                 
              `;
              todoList.appendChild(li);
          }
      });
  
      // Function to edit existing to-do items
      editItemsButton.addEventListener('click', function() {
          const items = todoList.querySelectorAll('.text');
          items.forEach(function(item) {
              const newText = prompt('Edit your to-do item:', item.textContent);
              if (newText) {
                  item.textContent = newText;
              }
          });
      });
  });
  </script>

@endsection
