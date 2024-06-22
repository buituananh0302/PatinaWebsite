@extends('layouts.client')
@section('content')
    @include('client.blocks.banner')
    <section class="container my-5">
        <div class="untree_co-section before-footer-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12">
                        <div class="site-blocks-table">
                            <table class="table text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="product-id d-none d-md-table-cell">Số thứ tự</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-remove">Hủy</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $item)
                                        <tr>
                                            <td class="product-id d-none d-md-table-cell">1</td>
                                            <td class="product-name d-flex justify-content-center align-items-center">
                                                <img class="me-3 img-thumnail" src="{{ $item->product->images }}"
                                                    width="100" height="100" alt="Image">
                                                <h2 class="h5 text-black m-0">{{ $item->product->name }}</h2>
                                            </td>
                                            <td>
                                                <p class="p-0 m-0">${{ number_format($item->price) }}</p>
                                            </td>
                                            <td>
                                                <div class="quantity-input-group d-flex justify-content-center">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">-</button>
                                                    <input type="number" class="form-control rounded quantity-input mx-2"
                                                        value="{{ $item->quantity }}" min="1">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary btn-sm">+</button>
                                                </div>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="btn btn-danger btn-sm cart_delete" href="#">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <a class="btn btn-outline-dark btn-giohang fs-5" href="{{ route('client.shop-page') }}">Tiếp tục mua
                            sắm</a>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-4">
                                        <h3 class="text-black h4 text-uppercase">Tổng tiền</h3>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black h5"><strong>Tổng</strong></span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="fs-5">${{ number_format($item->subTotal) }}</strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-giohang px-4 fs-5 border">Thanh toán</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
