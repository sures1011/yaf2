<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
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
                        Add a Team Member
                    </h3>
                </div>
            </div>
            <div class="card card-info">
                <form action="{{url('/team/store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" required name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="designation">Designation</label>
                                <input type="text" class="form-control" placeholder="Designation" required name="designation">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="message">Message</label>
                                <input type="textarea" class="form-control" placeholder="Enter message" name="message">
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="image">Image</label>
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add </button>
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


