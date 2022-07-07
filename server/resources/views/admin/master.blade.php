<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.blocks.head')
    <title>Admin Dashboard</title>
</head>
<!-- body -->
<body id="page-top">
    <div id="wrapper">
        @include('admin.blocks.aside')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.blocks.topnav')

                @yield('main_content')
            </div>
    
            @include('admin.blocks.footer')

        </div>
    </div>

    @include('admin.blocks.scroll-to-top')

    @include('admin.blocks.logout-modal')
    
    @include('admin.blocks.javascript')
</body>
</html>
