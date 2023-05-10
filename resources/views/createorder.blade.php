@extends('layouts.main')

@section('main-container')


<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center pt-70">
                            <h2>Create order</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
    <div class="page-content page-container" id="page-content">
        <div class="profile-padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                @include('common.errors')
                            <form action="{{ url('createorder/' .$subscriptions->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="clientName">Client Name</label>
                                    <input type="text" name="clientName" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value = "{{ Auth::user()->email }}"  required>
                                </div>
                                <input type="hidden" name="sub_id" value="{{ $subscriptions->id }}">
                                <div class="form-group">
                                    <label for="cardholderName">Cardholder Name</label>
                                    <input type="cardholderName" name="cardholderName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="cardNumber" name="cardNumber" class="form-control">
                                    <div id="cardNumber"></div>
                                </div>
                                <div class="form-group">
                                    <label for="expiryMonth">Expiry Month</label>
                                    <input type="expiryMonth" name="expiryMonth" class="form-control">
                                    <div id="expiryMonth"></div>
                                </div>
                                <div class="form-group">
                                    <label for="expiryYear">Expiry Year</label>
                                    <input type="expiryYear" name="expiryYear" class="form-control">
                                    <div id="expiryYear"></div>
                                </div>
                                <div class="form-group">
                                    <label for="cvc">CVC</label>
                                    <input type="cvc" name="cvc" class="form-control">
                                    <div id="cvc"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</main>

@endsection