@extends('layouts.appLogin')

@section('content')
<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <section class="login_content text-center">
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                <p class="login-box-smg">Sign in to start your session</p>
                <form action="{{url('login')}}" method="POST">
                    @csrf
                    <div class="login-form-header">
                        <h1>Login Form</h1>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default submit" name="login">Log in</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="{{url('register')}}" class="to_register"> Create Account </a>
                        </p>
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
@endsection