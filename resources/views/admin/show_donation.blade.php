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

            <th>Payment Id</th>
            <th>Payer id</th>
            <th>Payer email</th>
            <th>Amount</th>
            <th>Currency</th>
            <th>Status</th> 
            
        </tr>
        @foreach ($payment as $service)
        <tr>
            
            
            <td>{{ $service->payment_id }}</td>
            <td>{{ $service->payer_id }}</td>
            <td>{{ $service->payer_email }}</td>
            <td>{{ $service->amount }}</td>
            <td>{{ $service->currency }}</td>
            <td>{{ $service->payment_status }}</td>

            
        </tr>
        @endforeach
        
    </table>
</div>
</div>

</div>


@include('admin.script')



</body>
</html>

