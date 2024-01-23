<!DOCTYPE html>
<html lang="en">
<head>
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
  <div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="cart-title">
                        Add a Menu Item
                    </h3>
                </div>
            </div>
            <div class="card card-info">
            <table class="table table-bordered">
        <tr class="table_thcolor">

            <th>Name</th>
            <th>Status</th>
            <th>Link</th>
            <th>Action</th>
        </tr>
        @foreach ($menu as $item)
        <tr>
            
            
            <td>{{ $item->name }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->link }}</td>

            <td>
                <form action="#" method="POST">
     
                   
      
                    <a class="btn btn-primary" href="{{url('update_menu',$item->id)}}">Edit</a>
     
                    @csrf
                    
        
                    <a onclick="return confirm('Delete {{$item->name}} ?')"href="{{url('delete_menu',$item->id)}}" class="btn btn-danger">Delete</a>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
            </div>
        </div>
    </div>
  </div>

</div>
<!-- ./wrapper -->

@include('admin.script')



</body>
</html>

