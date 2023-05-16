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
                                <h2>Profile</h2>
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
                                            <div class="m-b-25">

                                                @if($qr)
                                                    <img src="{{ asset('qr-codes/' . $qr) }}" alt="QR Code" id="myImg">
                                                @else
                                                    <p></p>
                                                @endif
                                            </div>
                                            <!-- The Modal -->
                                            <div id="myModal" class="modal">
                                                <span class="close">&times;</span>
                                                <img class="modal-content" id="img01">
                                                <div id="caption"></div>
                                            </div>

                                            <script>
                                                // Get the modal
                                                var modal = document.getElementById("myModal");
                                                // create qr code
                                                // Get the image and insert it inside the modal - use its "alt" text as a caption
                                                var img = document.getElementById("myImg");
                                                var modalImg = document.getElementById("img01");
                                                var captionText = document.getElementById("caption");
                                                img.onclick = function () {
                                                    modal.style.display = "block";
                                                    modalImg.src = this.src;
                                                    captionText.innerHTML = this.alt;
                                                }

                                                // Get the <span> element that closes the modal
                                                var span = document.getElementsByClassName("close")[0];

                                                // When the user clicks on <span> (x), close the modal
                                                span.onclick = function () {
                                                    modal.style.display = "none";
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default text-center f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="m-b-10 f-w-600">Name</p>

                                                    <h6 class="text-muted f-w-400">
                                                        {{ Auth::user()->name }}
                                                    </h6>
                                                </div>
                                                <div class="col-sm-12">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400">{{ Auth::user()->email }}</h6>
                                                </div>
                                                <form action="{{ url('profile/' .Auth::user()->id) }}" method="GET">
                                                    {{ csrf_field() }}
                                                    <button
                                                        class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                                        title="edit">Edit Profile
                                                    </button>
                                                </form>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default text-center f-w-600">
                                                Subsciption</h6>
                                            <div class="row text-center">
                                                <div class="col-sm-12">
                                                    <h6 class="m-b-10 f-w-600"></h6>
                                                        @if($subStart && $subEnd)
                                                            <h6 class="text-muted f-w-400">{{ $subStart->format('Y-m-d') }}
                                                                - {{ $subEnd }}</h6>
                                                        @else
                                                            <p>No active subscription</p>
                                                    @endif
                                                </div>
                                            </div>
                                            /* BMI */
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default text-center f-w-600">BMI</h6>
                                            <div class="row text-center">
                                                <h1>BMI Calculator</h1>

                                                @if (session('bmi'))
                                                    <h2>Your BMI: {{ session('bmi') }}</h2>
                                                    <h3>Category: {{ session('bmiCategory') }}</h3>
                                                @endif

                                                <h2 class="bmi-result"></h2>
                                                <h3 class="bmi-category-result"></h3>

                                                <form id="bmi-calculator-form">
                                                    <label for="weight">Weight (kg):</label>
                                                    <input type="text" name="weight" id="weight" required><br>

                                                    <label for="height">Height (m):</label>
                                                    <input type="text" name="height" id="height" required><br>

                                                    <button type="submit">Calculate</button>
                                                </form>
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

    <script>
        const form = document.getElementById('bmi-calculator-form');
        const bmiResult = document.querySelector('.bmi-result');
        const bmiCategoryResult = document.querySelector('.bmi-category-result');

        const handleSubmit = (event) => {
            event.preventDefault();

            const weight = event.target.elements.weight.value;
            const height = event.target.elements.height.value;

            const bmi = (weight / (height * height)).toFixed(2);
            let bmiCategory = '';

            if (bmi < 18.5) {
                bmiCategory = 'Underweight';
            } else if (bmi >= 18.5 && bmi <= 24.9) {
                bmiCategory = 'Normal weight';
            } else if (bmi >= 25 && bmi <= 29.9) {
                bmiCategory = 'Overweight';
            } else if (bmi >= 30) {
                bmiCategory = 'Obesity';
            }

            bmiResult.innerHTML = `Your BMI: ${bmi}`;
            bmiCategoryResult.innerHTML = `Category: ${bmiCategory}`;

            form.reset();
        }

        form.addEventListener('submit', handleSubmit);
    </script>
@endsection
