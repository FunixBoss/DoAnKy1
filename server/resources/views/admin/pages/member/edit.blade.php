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
                <div class="container">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                
                                </div>
                
                                <div class="col-lg-7" style="padding: 100px 0;">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Edit Account Information</h1>
                                        </div>
                                        <form class="user" action="{{route('admin.member.update', ['id' => $id])}}" method="POST">
                                            @csrf
                                            <div class="form-group row" >
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName"
                                                        placeholder="Username" value={{$member->username}}>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="fullname" class="form-control form-control-user" id="exampleLastName"
                                                        placeholder="Your Full Name" value={{$member->fullname}}>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                                    placeholder="Email Address" value={{$member->email}}>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" name="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" placeholder="Password" >
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="number" name="phone" class="form-control form-control-user"
                                                        id="exampleRepeatPassword" placeholder="Phone" value={{$member->phone}}>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <select name="level">
                                                        <option value="">Please choose level</option>
                                                        <option value="1" {{$member->level == 1 ? 'selected' : ''}}>Admin</option>
                                                        <option value="2" {{$member->level == 1 ? 'selected' : ''}}>Member</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="submit" value="Edit Account Information" class="btn btn-primary btn-user btn-block">
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
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


