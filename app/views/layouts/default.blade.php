<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
@include('layouts.head')

<body class="skin-blue">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        @include('layouts.top-navbar')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            @include('layouts.sidebar')
        </section>
        <!-- /.sidebar -->
    </aside>
            <!-- Sidebar user panel (optional) -->


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Page Header <small>Optional description</small>
            </h1>

        </section>
        <!-- Main content -->
        <section class="content">

@yield('main')

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
   @include('layouts.footer')

</div><!-- ./wrapper -->
@include('layouts.script')
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>