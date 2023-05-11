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
</div>

<div class="container">
    <h1 class="h3 mt-15 mb-5">Payment</h1>
    <div class="row">
      <!-- Left -->
      <div class="col-lg-9">
        <div class="accordion" id="accordionPayment">
          <!-- Credit card -->
          <div class="accordion-item mb-3">
            <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
              <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                <input class="form-check-input" type="radio" name="payment" id="payment1">
                <label class="form-check-label pt-1" for="payment1">
                  Credit Card
                </label>
              </div>
              <span>
                <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="nonzero" fill="#333840">
                    <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                    <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                  </g>
                </svg>
              </span>
            </h2>
            @include('common.errors')
            <form action="{{ url('createorder/' .$subscriptions->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
              <div class="accordion-body">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Client Name</label>
                      <input type="name" name="clientName" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="cardholderName" name="address" class="form-control">
                      </div>
                    </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Phone</label>
                      <input type="cardholderName" name="phone" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="cardholderName" name="email" class="form-control" value="{{ Auth::user()->email }}" >
                  </div>
                </div>
                <div class="mb-3">
                  <label class="form-label">Card Number</label>
                  <input type="text" name="cardNumber" class="form-control" placeholder="">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Name on card</label>
                      <input type="cardholderName" name="cardholderName" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Expiry date</label>
                      <input type="text" class="form-control" placeholder="MM/YY">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">CVV Code</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- PayPal -->
        </div>
      </div>
      <!-- Right -->
      <div class="col-lg-3">
        <div class="card position-sticky top-0">
          <div class="p-3 bg-light bg-opacity-10">
            <h6 class="card-title mb-3">Order Summary</h6>
            <div class="d-flex justify-content-between mb-1 small">
              <span>DAYS</span> <span>{{ $subscriptions->days }}</span>
            </div>
            <div class="d-flex justify-content-between mb-1 small">
              <span>PRICE</span> <span>{{ $subscriptions->price }}€</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between mb-4 small">
              <span>TOTAL</span> <strong class="text-dark">{{ $subscriptions->price }}€</strong>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-2">Place order</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
</main>



@endsection
