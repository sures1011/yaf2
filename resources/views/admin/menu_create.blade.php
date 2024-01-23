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
                <form action="{{url('/menu_store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="name">Menu Name</label>
                                <input type="text" class="form-control" placeholder="Name" required name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="status">Status</label>
                                <select class="form-control" required name="status">
                                    <option >Enabled</option>
                                    <option >Disabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="link">Menu Item Link</label>
                                <input type="text" class="form-control" placeholder="Enter Link" name="link">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Menu Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

</div>
<!-- ./wrapper -->

@include('admin.script')



</body>
</html>

