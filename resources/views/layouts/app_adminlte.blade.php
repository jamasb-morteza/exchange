<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('partials.head-tag')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Preloader -->
<x-adminlte.preload/>

@include('partials.navbar')

@include('partials.sidebar-container')

@include('partials.content-wrapper')
<!-- /.content-wrapper -->
@include('partials.footer')

@include('partials.sidebar-controls')
</div>
<!-- ./wrapper -->

@include('partials.body-scripts')
</body>
</html>
