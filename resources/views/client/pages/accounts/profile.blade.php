@extends('layouts.client')
@section('content')
    @include('client.blocks.banner')
    <section class="container my-5 pb-5">
        <div class="d-flex row">
            <div class="col-lg-4 p-0">
                <ul class="list-group">
                    <li class="text-white list-group-item" style="background: var(--primary-1000-color);">
                        <h1 class="m-0 fs-1">Thông tin khách hàng</h1>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action border-0 fs-5" data-target="#update-info" href="/profile-page/update">Cập
                            nhật</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action border-0 fs-5" data-target="#invoice-info" href="/profile-page/bill">Hóa
                            đơn</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action border-0 fs-5" data-target="#bank-info">Ngân
                            hàng</a>
                    </li>
                    <li class="list-group-item">
                        <a class="list-group-item list-group-item-action border-0 fs-5" data-target="#other-info">Chức
                            năng khác</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8 d-flex justify-content-center">
                <div class="container">
                    <div id="update-info" class="info-content">
                        <div class="row flex-lg-nowrap">
                            <div class="col">
                                <div class="row">
                                    <div class="col mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="e-profile">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto mb-3">
                                                            <div class="mx-auto" style="width: 140px;">
                                                                <div class="d-flex justify-content-center align-items-center rounded"
                                                                    style="height: 140px; background-color: rgb(233, 236, 239);">
                                                                    <span
                                                                        style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$username}}
                                                                </h4>
                                                                <p class="mb-0">{{$email}}</p>
                                                                <div class="mt-2">
                                                                    <button class="btn btn-primary" type="button">
                                                                        <i class="fa fa-fw fa-camera"></i>
                                                                        <span>Thay đổi ảnh đại diện</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item"><a href=""
                                                                class="active nav-link">Cài đặt</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content pt-3">
                                                        <div class="tab-pane active">
                                                            <form class="form" novalidate="">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Họ và tên</label>
                                                                                    <input class="form-control"
                                                                                        type="text" name="name"
                                                                                        placeholder="{{$username}}"
                                                                                        value="{{$username}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Tên đăng nhập</label>
                                                                                    <input class="form-control"
                                                                                        type="text" name="username"
                                                                                        placeholder="{{$username}}"
                                                                                        value="{{$username}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Email</label>
                                                                                    <input class="form-control"
                                                                                        type="text"
                                                                                        placeholder="{{$email}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Địa chỉ</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           placeholder="{{$address}}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-2"><b>Thay đổi mật khẩu</b></div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label>Mật khẩu hiện tại</label>
                                                                                        <input class="form-control"
                                                                                            type="password"
                                                                                            placeholder="••••••">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label>Mật khẩu mới</label>
                                                                                    <input class="form-control"
                                                                                        type="password"
                                                                                        placeholder="••••••">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label>Confirm <span
                                                                                    class="d-none d-xl-inline">Password</span></label>
                                                                            <input class="form-control" type="password"
                                                                                placeholder="••••••">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
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
                    <div id="invoice-info" class="info-content d-none">
                        <div class="container">
                            <h2>Order Details</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Phong</td>
                                        <td>Đồng Nai</td>
                                        <td>+84 305 6661</td>
                                        <td>$ 15.36</td>
                                        <td><i class="fas fa-eye eye-icon" onclick="showOrderDetails()"></i>
                                        </td>
                                        <td>
                                            <div id="orderDetailsContainer" class="order-details-container">
                                                <div class="order-details-content">
                                                    <span class="close-btn" onclick="closeOrderDetails()">&times;</span>
                                                    <h2>Order Details</h2>
                                                    <p>Address: Đồng Nai - Tân Lập 2</p>
                                                    <p>Phone: +84 305 6661</p>
                                                    <p>Time: 30/12/2023</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Add more rows for other orders -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="bank-info" class="info-content d-none">
                        <div class="container">
                            <h2>Transfer Information</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Payment Method</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bank Transfer</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>PayPal</td>
                                        <td>$50</td>
                                    </tr>
                                    <!-- Add more rows for additional transfer information -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-right"><strong>Total:</strong></td>
                                        <td><strong>$150</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div id="other-info" class="info-content d-none">

                    </div>
                </div>
            </div>
    </section>
@endsection

