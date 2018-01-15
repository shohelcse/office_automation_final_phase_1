@include('layouts.designAndLink.header')
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
               
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

       <ul class="nav navbar-nav navbar-left">



<li>@include('layouts.navbar')</li>

</ul>
       
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>





<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Manage</div>

                <div class="panel-body">


<form class="form-horizontal" method="POST" action="{{url('/insertToAssignTeacher')}}" >
      {{csrf_field() }}
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th >CourseCode</th>
                <th style="width:200px;">CourseTitle</th>
                <th>Internal Teacher</th>
                <th>External Teacher</th>
              
            </thead>
            <tbody>

       @foreach($result as $user)


           <tr>
                <td> {{$user->courseCode}}</td>
                <td> {{$user->courseTitle}}</td>
                <td>
  <select name="internal[]" class="myselect1" style="width:200px;">

                      <option></option>
                     @foreach($data as $d)
                      <option value="{{$d->id}}">{{$d->name}}</option>
                            
                     @endforeach
    </select>

            </td>
                  <td>
          
  <select name="external[]" class="myselect" style="width:200px;">
                   <option></option>
                    @foreach($data as $d)
                      <option value="{{$d->id}}">{{$d->name}}</option>
                            
                   @endforeach
  </select>
                 </td>

               
                     

    <input name="c_id" type="hidden" value="{{$user->id}}">


              

                </tr>   

          @endforeach
        
        
            </tbody>
        </table>
    </div>
         <div class="form-group">
         <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>
          </div>
          </div>
</form>



</div>
</div>
</div>
</div>
</div>




<script type="text/javascript">

      $(".myselect").select2({
         placeholder:"select a name",
            allowClear:true
      });

</script>






<script type="text/javascript">

      $(".myselect1").select2(
        {
            placeholder:"select a name",
            allowClear:true
        });

</script>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
    









