<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('partials.head-tag')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <x-adminlte.preload/>

    @include('partials.navbar')

    @include('partials.sidebar-container')
    <div class="content-wrapper">
        {!! isset($header)?$header:'' !!}
        <section class="content">
            <div class="container-fluid">
                {!! isset($content)?$content:'' !!}

            </div>
        </section>
    </div>
    @include('partials.footer')

    @include('partials.sidebar-controls')
</div>
<!-- ./wrapper -->

@include('partials.body-scripts')
</body>
</html>
