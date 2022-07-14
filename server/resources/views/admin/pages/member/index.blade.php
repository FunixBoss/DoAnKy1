<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.head')
    <title>Admin Dashboard</title>
</head>
<!-- body -->
<body id="page-top">
    <div id="wrapper">
        @include('admin.components.aside')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.components.topnav')
                <div id="content">
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Member List</h1>
                        @include('errors')
                        

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <a href="{{route('admin.member.create')}}">
                                    <h6 class="m-0 font-weight-bold text-primary">Add A Member</h6> 
                                </a>  
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Fullname</th>
                                                <th>Email</th>
                                                <th>Created At</th>
                                                <th>Edit</th>
                                                <th>Delete</th> 
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @forelse ($members as $member)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$member->email}}</td>
                                                    <td>{{$member->fullname}}</td>
                                                    
                                                    <td>{{ date('h:i:s - d/m/y', strtotime($member->created_at))}}</td>
                                                    <td>
                                                        <a href="{{ Route('admin.member.edit', ['id' => $member->customer_id]) }}">Edit</a>
                                                        
                                                    </td>
                                                    <td>
                                                        <a onclick="return confirmDelete()" href="{{ Route('admin.member.delete', ['id' => $member->customer_id]) }}">Delete</a>
                                                        
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" align="center">No data</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
            </div>
            @include('admin.components.footer')

        </div>
    </div>

    @include('admin.components.scroll-to-top')

    @include('admin.components.logout-modal')

    @include('admin.components.javascript')
</body>
</html>







