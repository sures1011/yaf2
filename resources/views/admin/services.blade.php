<!DOCTYPE html>
<html lang="en">
<head>
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

            <div class="div_center">
                <h2 class="h2_font">Add Services</h2>
                <form action="{{url('/add_services')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                    <label>Services Title: </label>
                    <input type="text" name="name" placeholder="Write the title" class="input_color">
                    </div>

                    <div class="div_design">
                    <label>Services Description: </label>
                    <input type="text" name="detail" placeholder="Write the description" class="input_color">
                    </div>

                    <div class="div_design">
                    <label>Services Image: </label>
                    <input type="file" name="image">
                    </div>

                    <input type="submit" class="btn btn-primary"name="submit" value="Add Services">
                </form>
            </div>
            
            
                
        </div>
</div>

</div>
<!-- ./wrapper -->

@include('admin.script')



</body>
</html>

