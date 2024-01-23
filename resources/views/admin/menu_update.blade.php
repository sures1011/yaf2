<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('admin.css')
<style type="text/css">
    .div_center
    {
        text-align:center;
        padding-top: 40px;
    }    
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
    }
    .input_color{
        color: black;
    }
    .table_center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px;
        
    }
    label{
        display: inline-block;
        width: 200px;
    }
    .div_design{
        padding-bottom:10px;
    }

</style>
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

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="cart-title">
                        Update Menu
                    </h3>
                </div>
            </div>
            <div class="card card-info">
                <form action="{{url('/update_menu_confirm',$menu->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="name">Menu Name</label>
                                <input type="text" class="form-control" placeholder="Name"  name="name" value="{{$menu->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="status">Status</label>
                                <select class="form-control"  name="status" value="{{$menu->status}}">
                                    <option >Enabled</option>
                                    <option >Disabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="link">Menu Item Link</label>
                                <input type="text" class="form-control" placeholder="Enter Link" name="link" value="{{$menu->link}}">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" value="Update">Update Menu Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
            
            
                
        </div>
</div>

</div>
<!-- ./wrapper -->

@include('admin.script')



</body>
</html>

