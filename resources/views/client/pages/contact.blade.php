@extends('layouts.client')
@section('content')
    @include('client.blocks.banner')
    <section class="container p-3 p-xl-5 my-5" style="max-width: 1000px;">
        <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-xl-row flex-column my-4 justify-content-between w-100">
                    <div class="col-xl-4 col-md-6 d-flex align-items-center mb-3 mb-xl-0">
                        <img src="img/Icon/phone.png" alt="">
                        <p class="ps-3 mb-0">+063 1231 456</p>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-center mb-3 mb-xl-0">
                        <img src="img/Icon/address.png" alt="">
                        <p class="ps-3 mb-0">
                            43 Raymouth<br>Rd. Baltemoer, London 3910
                        </p>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-center">
                        <img src="img/Icon/email.png" alt="">
                        <p class="ps-3 mb-0">infomation@email.com</p>
                    </div>
                </div>
                <form class="container-fluid p-0" method="POST" action="">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-12 form-floating mb-3">
                            <input type="text" class="form-control" id="floatingFirstName" name="name"
                                placeholder="Name">
                            <label class="fs-5" for="floatingFirstName">Họ và tên</label>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="email"
                            placeholder="Email address">
                        <label class="fs-5" for="floatingEmail">Địa chỉ email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="note" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 300px"></textarea>
                        <label class="fs-5" for="floatingTextarea2">Phản hồi</label>
                    </div>
                    <button class="btn mt-4 rounded-1 px-4 py-2 btn-contact fs-4">Gửi phản hồi</button>
                </form>
            </div>
        </div>
    </section>
@endsection
