<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.head')
    <title>Keansburg Water Park | Login </title>
</head>

<body class="bg-image">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    @include('errors')

                                    {{-- <form class="user" action="{{route('postLogin')}}" method="POST"> --}}
                                    <form class="user"  method="POST" action="{{route('postLogin')}}">

                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="email" id="email" aria-describedby="emailHelp"
                                                placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>
                                        <input type="submit" value="Login" class="btn btn-primary btn-user btn-block">
                                    </form>


                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/register">Create New Account</a>
                                    </div>
                                </div>
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
