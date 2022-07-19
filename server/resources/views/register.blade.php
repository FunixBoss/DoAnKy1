<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.head')
    <title>Keansburg Waterpark | Register</title>
</head>
<body class="bg-image">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            {{-- <form class="user" action="{{route('postRegister')}}" method="POST"> --}}
                            <form class="user" method="POST" action="{{route('postRegister')}}">

                                @csrf
                                <div class="form-group row" >
                                    <div class="col-sm-12">
                                        <input type="text" name="fullname" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="phone" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Phone" >
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="btn btn-primary btn-user btn-block">
                            </form>
                            <div class="text-center" style="margin-top: 15px; font-size: 25px">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('admin.components.javascript')


</body>

</html>
