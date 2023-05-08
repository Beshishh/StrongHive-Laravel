@extends('layouts.appLogin')

@section('content')
<hr>
<body style="background-color:#242423;">
    <div class="login-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <section class="login_content text-center">
                        @include('common.errors')
                        <form action="{{url('register')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="login-form-header">
                                <h1>Create account</h1>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Username" required="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required="" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default submit" name="login">Register</button>
                            </div>
                            <p class="change_link">
                                    <a href="{{url('/')}}"> Back to main page </a>
                                </p>
                            <div class="clearfix"></div>
                            <div class="separator">
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <p>©2023 IVKHK</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
