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



   
    @include('admin.body')  

  <!-- /.control-sidebar -->
  

</div>
<!-- ./wrapper -->

@include('admin.script')



</body>
</html>

