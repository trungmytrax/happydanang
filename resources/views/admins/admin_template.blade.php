<!DOCTYPE html>
<html>
    @include('admins.includes.head')
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Header -->
            @include('admins.includes.header')

            <!-- Sidebar -->
            @include('admins.includes.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <!-- Main content -->
                <section class="content">
                    <!-- Your Page Content Here -->
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <!-- Footer -->
            @include('admins.includes.footers')

        </div><!-- ./wrapper -->
    </body>
</html>