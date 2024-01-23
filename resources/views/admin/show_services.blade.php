<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        .program_image{
            height: 20%;
            weight: 20%;
        }
        
    </script>
@include('admin.css')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">


  <!-- Navbar -->
  @include('admin.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('admin.sidebar')



  <!-- /.control-sidebar -->
  <div class="main-panel">
        <div class="content-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>
        @endif

        <table class="table table-bordered">
        <tr class="table_thcolor">

            <th>Name</th>
            <th>Details</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($services as $service)
        <tr>
            
            
            <td>{{ $service->name }}</td>
            <td>{{ $service->detail }}</td>
            <td><img class="service_image" height="200px" width="200px" src="/image/{{ $service->image }}" ></td>
            <td>
                <form action="#" method="POST">
     
                   
      
                    <a class="btn btn-primary" href="{{url('update_services',$service->id)}}">Edit</a>
     
                    @csrf
                    
        
                    <a onclick="return confirm('Delete {{$service->title}} ?')"href="{{url('delete_services',$service->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
</div>
</div>

</div>


@include('admin.script')



</body>
</html>

