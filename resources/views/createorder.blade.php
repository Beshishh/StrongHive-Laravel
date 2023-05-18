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

<section class="services-area pt-100 pb-150 section-bg" data-background="../assets/img/gallery/section_bg01.webp">
    <div class="container">
          <div class="page-content page-container" id="page-content">
              <div class="profile-padding">
                  <div class="row container d-flex justify-content-center">
                      <div class="col-xl-9 col-md-4">
                          <div class="card user-card-full orderForm">
                             <div class="row m-l-0 m-r-0">
                                 <div class="col-sm-8 w-100">
                                     <div class="card-block">
                                         <div class="row text-center align-center">
                                         <h2>Payment Info</h2>
                                            <div class="form-container d-flex justify-content-center">
                                                @include('common.errors')
                                                <form action="{{ url('createorder/' .$subscriptions->id) }}" method="POST" class="form-label col-md-4" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <label class="form-label">Client name</label>
                                                    <input type="text" name="clientName" class="form-control text-center" maxlength="254" required><br>

                                                    <label class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control text-center" maxlength="254" value="{{ Auth::user()->email }}" required><br>

                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address" class="form-control text-center" maxlength="254" required><br>

                                                    <label class="form-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control text-center" maxlength="19" oninput="removeSpaces(this)"  onkeydown="return disallowSpaces(event)" required>

                                                    <button type="submit" class="btn btn-primary w-60 mt-25">GO TO PAYMENT</button>
                                                </form>
                                          <script>
                                                function disallowSpaces(event) {
                                                    if (event.keyCode === 32) {
                                                        event.preventDefault();
                                                        return false;
                                                    }
                                                }

                                                function removeSpaces(input) {
                                                    input.value = input.value.replace(/\s/g, '');
                                                }
                                            </script>
                                                <div class="col-lg-4 ml-25">
                                                    <div class="card summary position-sticky top-0">
                                                      <div class="p-4 bg-light ">
                                                        <h5 class="card-title mb-3">Order Summary</h5>
                                                        <div class="d-flex justify-content-between mb-1 small">
                                                          <span>DAYS</span> <h4>{{ $subscriptions->days }}</h4>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-1  small">
                                                          <span>PRICE</span> <h4>{{ $subscriptions->price }}€</h4>
                                                        </div>
                                                        <hr>
                                                        <div class="d-flex justify-content-between mb-1 big">
                                                          <span>TOTAL</span> <h4>{{ $subscriptions->price }}€</h4>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
                                     </div>
                                 </div>
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
