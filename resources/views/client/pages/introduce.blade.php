@extends('layouts.client')
@section('content')
    @include('client.blocks.banner')
    <section class="container my-5">
        <div class="d-flex flex-xl-row flex-column">
            <div class="col-xl-5 col-12">
                <h2>
                    Chào mừng bạn đến với Patina!
                </h2>
            </div>
            <div class="col-xl-7 col-12 pt-3 pt-xl-0">
                <p>
                    Patina Fashion Store là điểm đến lý tưởng cho những ai yêu thích phong cách thanh lịch và sự độc đáo.
                    Với không gian trưng bày tinh tế, từng món đồ tại Patina đều mang đậm dấu ấn của sự sang trọng và sự cầu
                    kỳ trong từng chi tiết. Từ những bộ cánh dành cho công sở đến những trang phục dạo phố, mỗi sản phẩm tại
                    cửa hàng đều được chọn lọc kỹ càng, đáp ứng được mọi sở thích và nhu cầu của các tín đồ thời trang.
                    Patina không chỉ là nơi mua sắm mà còn là điểm hẹn lý tưởng để khám phá và thể hiện phong cách cá nhân
                    một cách hoàn hảo.
                </p>
            </div>
        </div>
    </section>
    <!-- video -->
    <section class="container">
        <div class="position-relative">
            <video id="myVideo" class="w-100" style="border: 1px solid var(--primary-900-color)" controls>
                <source src="intro.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <!-- Our Team -->
    <section class="container our-team mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h2>Our Team</h2>
            <p style="color: #00051654;"> Bibendum quis facilisi aliquet massa in
                pharetra nisl etiam ornare. Tellus feugiat egestas nulla sem vel
                mi dictum nisi.</p>
        </div>
        <div class="row g-2 my-5">
            <div class="col-12 col-xl-3 text-center">
                <img class="img-thumbnail img-our-team" src="img/ourteam.jpg" alt="">
                <h6>a</h6>
                <p class="m-0" style="color: #00051654;">District Creative Producer</p>
                <div class="d-flex justify-content-center">
                    <div class="icon-footer">
                        <i class="fa-brands fa-facebook-f "></i>
                    </div>
                    <div class="icon-footer mx-2">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="icon-footer">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 text-center">
                <img class="img-thumbnail img-our-team" src="img/ourteam.jpg" alt="">
                <h6>b</h6>
                <p class="m-0" style="color: #00051654;">District Creative Producer</p>
                <div class="d-flex justify-content-center">
                    <div class="icon-footer">
                        <i class="fa-brands fa-facebook-f "></i>
                    </div>
                    <div class="icon-footer mx-2">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="icon-footer">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 text-center">
                <img class="img-thumbnail img-our-team" src="img/ourteam.jpg" alt="">
                <h6>c</h6>
                <p class="m-0" style="color: #00051654;">District Creative Producer</p>
                <div class="d-flex justify-content-center">
                    <div class="icon-footer">
                        <i class="fa-brands fa-facebook-f "></i>
                    </div>
                    <div class="icon-footer mx-2">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="icon-footer">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-3 text-center">
                <img class="img-thumbnail img-our-team" src="img/ourteam.jpg" alt="">
                <h6>d</h6>
                <p class="m-0" style="color: #00051654;">District Creative Producer</p>
                <div class="d-flex justify-content-center">
                    <div class="icon-footer">
                        <i class="fa-brands fa-facebook-f "></i>
                    </div>
                    <div class="icon-footer mx-2">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="icon-footer">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Comment show -->
    <section class="container my-5">
        <div class="p-xl-5 p-4 row justify-content-center" style="background-color:#f0eff5; ">
            <div
                class="d-flex p-xl-5 p-2 bg-white  text-center align-items-center flex-column justify-content-center position-relative ">
                <div class="position-absolute top-0 start-50  translate-middle mt-xl-2">
                    <img style="width: 5em; height: 5em; border-radius: 50%;"
                        src="{{ asset('assets/clients/img/ourteam.jpg') }}" alt="">
                </div>
                <div class="pt-xl-0 pt-5">
                    <p style="font-size: 20px;">Jesse Donovan</p>
                    <p style="color: #00051654;">Internal Group Director, IG Company</p>
                    <h3 style="font-weight: var(--Bold);" class="fs-2">Pretium donec magnis
                        bibendum neque </h3>
                    <div class="d-flex justify-content-center">
                        <p class="w-75 fs-5">Purus sed sagittis senectus mattis. Fringilla mi risus dui nunc sit.
                            Imperdiet mauris sed auctor
                            libero hac. Sed ipsum pulvinar pellentesque quis potenti amet congue commodo egestas. Vitae
                            ipsum semper sit curabitur. Dignissim eleifend interdum placerat interdum posuere sagittis.
                            Pretium viverra eu et in. Pharetra sagittis faucibus tincidunt gravida dignissim orci sed.
                            Elit
                            risus placerat ut lacus sagittis neque urna amet viverra.</p>
                    </div>
                </div>
                <!-- Rate -->
                <div class="d-flex">
                    <img src="img/Icon/Star 1.png" alt="">
                    <img src="img/Icon/Star 1.png" alt="">
                    <img src="img/Icon/Star 1.png" alt="">
                    <img src="img/Icon/Star 1.png" alt="">
                    <img src="img/Icon/Star 1.png" alt="">
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y" style="margin-right: 5rem;">
                    <img src="img/Icon/daunhay.png" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
