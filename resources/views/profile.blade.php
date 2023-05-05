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
        </div>
        <div class="content">
            <div class="row ml-5 col-md-12">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Profile</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row2">
                                    <p>davidguzhavin@gmail.com</p>
                                    <p>Активные пакеты:</p>
                                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4">
                                        <div class="col">
                                            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg "
                                                style="background-image: url('assets/img/gallery/section_bg03.png');">
                                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                                    <h3 class="mt-5 mb-4 display-6 lh-1 fw-bold">30 дневный пакет</h3>
                                                    <h4 class="mt-5 mb-4 display-6 lh-1 fw-bold">02.05.2023-01.06.2023
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <div class="author">
                                <h2 class="title">QR CODE</h2>
                            </div>
                            <div class="qr-code">
                                <img id="myImg"
                                    src="https://api.qrserver.com/v1/create-qr-code/?size=328x328&data=dasda434235">
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
                            img.onclick = function(){
                              modal.style.display = "block";
                              modalImg.src = this.src;
                              captionText.innerHTML = this.alt;
                            }
                            
                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];
                            
                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() { 
                              modal.style.display = "none";
                            }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Date Tabs End -->
</main>
@endsection