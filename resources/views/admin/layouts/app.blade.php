@include('admin.layouts.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.layouts.header')
 

    <!-- Main content -->
    <div class="container-fluid">
@yield('content')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>CopyLeft &copy; 2023 <a href="http://github.com/hesammousavi/">Ali Fazel</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layouts.footer')
</body>
</html>
