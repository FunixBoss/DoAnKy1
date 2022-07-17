@extends('admin.master')
@section('main_content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">User Contact List</h1>
            @if (Session::has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close"  data-dismiss="alert">x</button>
                    <strong>{{Session::get('success')}}</strong>
                </div>
            @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Contact ID</th>
                                    <th>User ID</th>
                                    <th>Email</th>
                                    <th>Contact Content</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            
                            <tfoot>
                                <tr>
                                    <<th>Contact ID</th>
                                    <th>User ID</th>
                                    <th>Email</th>
                                    <th>Contact Content</th>
                                    <th>Time</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$contact->contact_id}}</td>
                                            <td>{{$contact->user_id}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>
                                                {{$contact->contact_content}}
                                            </td>
                                            <td><a onclick="return confirmDelete()" href="{{ Route('admin.contact.delete', ['id' => $contact->contact_id]) }}">Delete</a></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" align="center">No data</td>
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
    <!-- End of Main Content -->
@endsection








