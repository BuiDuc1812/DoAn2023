@extends('layout')
@section('title', 'Giỏ hàng')
@section('layout')
    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    @if ($cart->totalQuantity == 0)
                        <div class="col-inner">
                            <div class="woocommerce">
                                <div class="woocommerce">
                                    <div class="text-center pt pb">
                                        <p class="cart-empty">Chưa có sản phẩm nào trong giỏ hàng.</p>
                                        <p class="return-to-shop">
                                            <a class="button primary wc-backward"
                                                href="{{route('home')}}">
                                                Quay trở lại cửa hàng </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="cart-footer-content after-cart-content relative"></div>
                            </div>


                        </div>
                    @else
                        <div class="col-inner">
                            <div class="woocommerce">
                                <div class="woocommerce row row-large row-divided">
                                    <div class="col large-7 pb-0 ">
                                        <div class="cart-wrapper sm-touch-scroll">
                                            <table
                                                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name" colspan="3">Sản phẩm</th>
                                                        <th class="product-price">Giá</th>
                                                        <th class="product-quantity">Số lượng</th>
                                                        <th class="product-subtotal">Tổng cộng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($cart->items as $item)
                                                        <tr class="woocommerce-cart-form__cart-item cart_item">
                                                            <td class="product-remove">
                                                                <a href="{{ route('cart.remove', $item->id) }}"
                                                                    class="remove" aria-label="Xóa sản phẩm này">&times;</a>
                                                            </td>

                                                            <td class="product-thumbnail"><a href=""><img
                                                                        width="300" height="300"
                                                                        src="{{ url('uploads') }}/{{ $item->image }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                        alt="" /></a></td>

                                                            <td class="product-name" data-title="Sản phẩm"><a
                                                                    href="">{{ $item->name }}</a>
                                                                <p class="show-for-small mobile-product-price">
                                                                    <span
                                                                        class="mobile-product-price__qty">{{ $item->quantity }}
                                                                    </span>
                                                                    <span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                                </p>
                                                            </td>

                                                            <td class="product-price" data-title="Giá">
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{number_format( $item->price) }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>

                                                            <td class="product-quantity">
                                                                <div class="quantity buttons_added">
                                                                    <form action="{{ route('cart.update', $item->id) }}"
                                                                        method="get">
                                                                        <input type="number" name="quantity"
                                                                            value="{{ $item->quantity }}">
                                                                        <button type="submit">Update</button>
                                                                    </form>
                                                                </div>
                                                            </td>

                                                            <td class="product-subtotal">
                                                                <span
                                                                    class="woocommerce-Price-amount amount">{{ number_format($item->quantity * $item->price) }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                    <tr>
                                                        <td colspan="6" class="actions clear">

                                                            <div class="continue-shopping pull-left text-left">
                                                                <a class="button-continue-shopping button primary is-outline"
                                                                    href="{{ route('home') }}">
                                                                    &#8592; Tiếp tục xem sản phẩm </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="cart-collaterals large-5 col pb-0">

                                        <div class="cart-sidebar col-inner ">
                                            <div class="cart_totals ">

                                                <table cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="2"
                                                                style="border-width:3px;">Tổng số lượng</th>
                                                        </tr>
                                                    </thead>
                                                </table>

                                                <h2>Tổng số lượng</h2>

                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tr class="cart-subtotal">
                                                        <th>Tổng cộng</th>
                                                        <td data-title="Tổng cộng">
                                                            <span
                                                                class="woocommerce-Price-amount amount">{{number_format( $cart->totalAmount )}}
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                                                        </td>
                                                    </tr>

                                                </table>

                                                <div class="wc-proceed-to-checkout">

                                                    <a href="{{ route('cart.checkout') }}"
                                                        class="checkout-button button alt wc-forward">
                                                        Tiến hành thanh toán</a>
                                                </div>


                                            </div>

                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cart-footer-content after-cart-content relative"></div>
                            </div>


                        </div><!-- .col-inner -->
                    @endif

                </div><!-- .large-12 -->
            </div><!-- .row -->
        </div>


    </main><!-- #main -->
@endsection
