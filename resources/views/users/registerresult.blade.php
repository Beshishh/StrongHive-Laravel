@extends('layouts.appLogin')

@section('content')
<hr>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <section class="login_content text-center">
                @include('common.errors')
                    @csrf
                    <div class="login-form-header">
                        <h1>Create account</h1>
                        <p class="login-box-smg">Account created</p>
                        <p class="change_link">
                            <a href="{{url('start')}}"> Back to login </a>
                        </p>
                    </div>
            </section>
        </div>
    </div>
</div>
@endsection