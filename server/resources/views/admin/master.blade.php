<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.head')
    @yield('csrktoken')
    <title>Admin Dashboard</title>
</head>
<!-- body -->
<body id="page-top">
    <div id="wrapper">
        @include('admin.components.aside')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.components.topnav')
                @yield('main_content')
            </div>
            @include('admin.components.footer')

        </div>
    </div>

    @include('admin.components.scroll-to-top')

    @include('admin.components.logout-modal')

    @include('admin.components.javascript')
</body>
</html>
