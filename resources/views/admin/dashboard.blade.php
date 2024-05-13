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
<link rel="stylesheet" href="{{asset('css.admin/plugins/fullcalendar/main.css')}}">
<style>
  .black-text {
      color: black !important;
  }
  .white-text {
      color: white !important;
  }
</style>
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
            <h3 style="color: #e13300;">{{$registeredCount}}</h3>
            <h4 style="color: black;">Workshop registered</h4>
        </div>
        <div class="icon">
            <i class="ion ion-ios-people"></i>

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
          <h3 style="color: #e13300;">{{ $messages}}</h3>
          <h4 style="color: black;">Messages</h4>
      </div>
      <div class="icon">
          <i class="fas fa-envelope"></i>

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
        <div class="small-box bg-info">
            <div class="inner">
              <h3 style="color: #e13300;">{{$blogsCount}}</h3>


          <h4 style="color: black;">Blogs</h4>
        </div>
        <div class="icon">
          <i class="fas fa-blog"></i>
        
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
  {{-- <section class="content">
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

        </div> --}}
        {{-- <a href="#" class="small-box-footer" >More info <i class="fas fa-arrow-circle-right"></i></a> --}}
      {{-- </div>
    </div>
  </div> --}}
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
                  <a class="product-title" style="color: #e13300">{{ $admin->name }}
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
            <a href="{{route('users.index')}}" class="uppercase" style="color: #e13300">View All Admins</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-6">
        <div class="card">
          <div class="card-header border-transparent">
            <h3 class="card-title">Latest Experiences</h3>

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
                  <th>Name</th>
                  <th>Post</th>
                  <th>Image</th>
                  <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($activeUsers as $experience)
                  <tr>
                      <td><a href="pages/examples/invoice.html">{{ $experience->user->name }}</a></td>
                      <td>{{ $experience->Post }}</td>
                      <td><img src="{{ URL::asset("storage/image/$experience->Img") }}" alt="{{ $admin->name }}" width="50" height="50"></td>
                      <td>{{ $experience->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer clearfix">
            <a href="{{ route('experiences.index') }}" class="btn btn-sm btn-secondary float-right"style="background-color: #e13300;border-color: #e13300;">View All Experiences</a>
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
                <a class="users-list-name" style="color: #e13300">{{$user->name}}</a>
                <span class="users-list-date">{{$user->created_at}}</span>
              </li>
              @endforeach
            </ul>
            <!-- /.users-list -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('users.index')}}" style="color: #e13300">View All Users</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
    <!-- row-->
    <div class="row">
      <div class="col-lg-6 col-6">
        <div class="card">
          <div class="card-header ">
            <h3 class="card-title">Latest Workshop Participants</h3>

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
              @foreach ($registeredParticipants as $participants)
              <li class="item">

                <div >
                  <span class="product-description" style="display: inline-block; vertical-align: middle; margin-right: 50px; ">{{$participants->created_at}}</span>
                  <a class="product-title" style="display: inline-block; vertical-align: middle; margin-right: 50px; color: #e13300">{{$participants->first_name}} {{$participants->last_name}}</a>
                  <span class="product-description" style="display: inline-block; vertical-align: middle; margin-right: 50px;">{{$participants->Email}}</span>
                  <span class="product-description" style="display: inline-block; vertical-align: middle;">{{$participants->phone}}</span>
              </div>
              
              
              
              </li>
              @endforeach
              <!-- /.item -->
            </ul>
          </div>

          <!-- /.card-body -->
          <div class="card-footer text-center">
            <a href="{{route('Registered.index')}}" style="color: #e13300">View All Workshop Participants</a>
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
<!--/column-->
<div class="col-lg-6 col-6">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Recent Messages</h3>

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
        @foreach ($recentMessages as $recentMessage)
        <li class="item">
          <div class="product-info">
            <a class="product-title" style="color: #e13300">{{ $recentMessage->Name }}
            <span class="product-description">
              {{ $recentMessage->Message }}
            </span>
          </div>
        </li>
        @endforeach
        <!-- /.item -->
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
      <a href="{{ route('contacts.index') }}" class="uppercase" style="color: #e13300">View All Messages</a>
    </div>
    <!-- /.card-footer -->
  </div>
</div>
</div>
<!--/row-->

      <div class="row">
        <div class="col-md-3">
          <div class="sticky-top mb-3">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Draggable Events</h4>
              </div>
              <div class="card-body">
                <!-- the events -->
                <div id="external-events">
                  <div class="external-event bg-success black-text black-text" >Review and manage user accounts</div>
                  <div class="external-event bg-warning white-text">Monitor user activity and engagement.</div>
                  <div class="external-event bg-info black-text">Create, edit, or delete content pages </div>
                  <div class="external-event bg-primary">Schedule or publish blog posts</div>
                  <div class="external-event bg-danger black-text">Review and respond to website feedback or bug reports</div>
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove">
                      remove after drop
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Create Event</h3>
              </div>
              <div class="card-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                  <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>

                  </ul>
                </div>
                <!-- /btn-group -->
                <div class="input-group">
                  <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                  <div class="input-group-append">
                    <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                  </div>
                  <!-- /btn-group -->
                </div>
                <!-- /input-group -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-body p-0">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

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
<script src="{{asset('css.admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('css.admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('css.admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('css.admin/dist/js/adminlte.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('css.admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('css.admin/plugins/fullcalendar/main.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('css.admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (https://fullcalendar.io/docs/event-object)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',
      //Random default events
      events: [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954', //red
          allDay         : true
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        // {
        //   title          : 'Lunch',
        //   start          : new Date(y, m, d, 12, 0),
        //   end            : new Date(y, m, d, 14, 0),
        //   allDay         : false,
        //   backgroundColor: '#00c0ef', //Info (aqua)
        //   borderColor    : '#00c0ef' //Info (aqua)
        // },
        // {
        //   title          : 'Birthday Party',
        //   start          : new Date(y, m, d + 1, 19, 0),
        //   end            : new Date(y, m, d + 1, 22, 30),
        //   allDay         : false,
        //   backgroundColor: '#00a65a', //Success (green)
        //   borderColor    : '#00a65a' //Success (green)
        // },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'https://www.google.com/',
          backgroundColor: '#e13300', //Primary (light-blue)
          borderColor    : '#e13300' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    // Color chooser button
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      // Save color
      currColor = $(this).css('color')
      // Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      // Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      // Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)

      // Add draggable funtionality
      ini_events(event)

      // Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
@endsection
