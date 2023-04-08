@extends('layout')
@section('layout')
@if ( Session::has('success') )
	<div class="alert success alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()"  aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" id="mess" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" onclick="removeMess()" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
    <main id="main" class="">
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
                        <div class="woocommerce">
                            <div class="woocommerce-info message-wrapper">
                                <div class="message-container container medium-text-center">
                                    @if (session('account'))
                                        <a href="{{route('checkout.logout')}}" class="nav-top-link nav-top-not-logged-in">
                                            <span>Chào, {{ session('account')->name }}</span>
                                        </a>
                                    @else
                                        Bạn đã có tài khoản? <a href="#" onclick="showForm()" class="showlogin">Ấn vào đây để đăng nhập</a>
                                    @endif
                                </div>
                            </div>
                            <form class="woocommerce-form woocommerce-form-login login" id="checkout_login" action="{{route('checkout.login')}}" method="POST" style="display:none;">
                                @csrf
                                <p class="form-row form-row-first">
                                    <label for="username">Tên đăng nhập hoặc email <span class="required">*</span></label>
                                    <input type="text" class="input-text" name="email" value="" id="username" />
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Mật khẩu <span class="required">*</span></label>
                                    <input class="input-text" type="password" name="password" id="password" />
                                </p>
                                <div class="clear"></div>
                                <p class="form-row">
                                    <button type="submit" class="button" name="" value="Đăng nhập">Đăng nhập</button>
                                </p>
                                <div class="clear"></div>
                            </form>

                            <form name="checkout" method="POST" class="checkout woocommerce-checkout"
                                action="" enctype="multipart/form-data">
                                @csrf
                                <div class="row pt-0 ">
                                    <div class="large-7 col  ">
                                        <div id="customer_details">
                                            <div class="clear">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Thông tin thanh toán</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper">
                                                        <p class="form-row form-row-wide address-field validate-required"
                                                            id="billing_city_field" data-priority="70"><label
                                                            for="billing_city" class="">Họ tên <abbr
                                                            class="required" title="bắt buộc">*</abbr></label>
                                                            @if (session('account'))
                                                                <input
                                                                type="text" class="input-text " name="name"
                                                                id="" placeholder="Họ tên" value="{{session('account')->name}}"
                                                                autocomplete="address-level2" />
                                                            @else
                                                                <input
                                                                type="text" class="input-text " name="name"
                                                                id="" placeholder="Họ tên" value=""
                                                                autocomplete="address-level2" />
                                                            @endif
                                                        </p>

                                                        <p class="form-row form-row-wide address-field validate-required"
                                                            id="billing_city_field" data-priority="70"><label
                                                                for="billing_city" class="">Địa chỉ <abbr
                                                                    class="required" title="bắt buộc">*</abbr></label><input
                                                                type="text" class="input-text " name="address"
                                                                id="billing_city" placeholder="Địa chỉ nhà, căn hộ, toà nhà,.." value=""
                                                                autocomplete="address-level2" /></p>
                                                        <p class="form-row form-row-wide address-field validate-required"
                                                            id="billing_city_field" data-priority="70"><label
                                                                for="billing_city" class="">Số điện thoại <abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><input type="text"
                                                                class="input-text " name="phone" id="billing_city"
                                                                placeholder="Số điện thoại" value=""
                                                                autocomplete="address-level2" />
                                                        </p>
                                                        <p class="form-row form-row-wide address-field validate-required"
                                                            id="billing_city_field" data-priority="70"><label
                                                            for="billing_city" class="">Email <abbr
                                                                class="required"
                                                                title="bắt buộc">*</abbr></label>
                                                                @if (session('account'))
                                                                    <input type="text"
                                                                    class="input-text " name="email" id="billing_city"
                                                                    placeholder="Email" value="{{session('account')->email}}"
                                                                    autocomplete="address-level2" />
                                                                @else
                                                                    <input type="text"
                                                                    class="input-text " name="email" id="billing_city"
                                                                    placeholder="Email" value=""
                                                                    autocomplete="address-level2" />
                                                                @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear">
                                                <div class="woocommerce-additional-fields">
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p class="form-row notes" id="order_comments_field">
                                                            <label for="order_comments" class="">Ghi chú đơn
                                                                hàng</label>
                                                            <textarea name="note" class="input-text " id="order_comments"
                                                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                cols="5"></textarea>
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                    </div><!-- large-7 -->

                                    <div class="large-5 col">

                                        <div class="col-inner has-border">
                                            <div class="checkout-sidebar sm-touch-scroll">
                                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>

                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Sản phẩm</th>
                                                                <th class="product-total">Tổng cộng</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($cart->items as $item)
                                                                <tr class="cart_item">
                                                                    <td class="product-name">
                                                                        {{ $item->name }}&nbsp; <strong
                                                                            class="product-quantity">×
                                                                            {{ $item->quantity }}</strong> </td>
                                                                    <td class="product-total">
                                                                        <span
                                                                            class="woocommerce-Price-amount amount">{{ number_format($item->price) }}&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                    </td>
                                                                </tr>
                                                            @endforeach


                                                        </tbody>
                                                        <tfoot>
                                                            <tr class="cart-subtotal">
                                                                <th>Tổng cộng</th>
                                                                <td><span
                                                                        class="woocommerce-Price-amount amount">{{ number_format($cart->totalAmount) }}&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                                </td>
                                                            </tr>
                                                            <tr class="shipping">
                                                                <th>Giao hàng 1</th>
                                                                <td data-title="Giao hàng 1">
                                                                    Giao hàng miễn phí <input type="hidden"
                                                                        name="shipping_method[0]" data-index="0"
                                                                        id="shipping_method_0" value="free_shipping:1"
                                                                        class="shipping_method">

                                                                </td>
                                                            </tr>
                                                            <tr class="order-total">
                                                                <th>Tổng cộng</th>
                                                                <td><strong><span
                                                                            class="woocommerce-Price-amount amount">{{ number_format($cart->totalAmount) }}&nbsp;<span
                                                                                class="woocommerce-Price-currencySymbol">₫</span></span></strong>
                                                                </td>
                                                            </tr>


                                                        </tfoot>
                                                    </table>

                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li
                                                                class="woocommerce-notice woocommerce-notice--info woocommerce-info">
                                                                Rất tiếc, có vẻ như không có phương thức thanh toán nào phù
                                                                hợp với khu vực bang hiện tại của bạn. Vui lòng liên hệ với
                                                                chúng tôi nếu bạn cần hỗ trợ hoặc muốn sắp xếp phương án
                                                                thay thế.</li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô
                                                                hiệu hóa, hãy đảm bảo bạn nhấp vào &lt;em&gt; Cập nhật giỏ
                                                                hàng &lt;/ em&gt; trước khi bạn thanh toán. Bạn có thể phải
                                                                trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như
                                                                vậy. <br /><button type="submit" class="button alt"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Cập nhật tổng">Cập nhật tổng</button>
                                                            </noscript>



                                                            <button type="submit" class="button alt"
                                                                name="woocommerce_checkout_place_order" id="place_order"
                                                                value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>

                                                            <input type="hidden" id="_wpnonce" name="_wpnonce"
                                                                value="8a5a1064a6"><input type="hidden"
                                                                name="_wp_http_referer"
                                                                value="/noithatbanghe/?wc-ajax=update_order_review">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="html-checkout-sidebar pt-half"></div>
                                            </div>
                                        </div>

                                    </div><!-- large-5 -->

                                </div><!-- row -->
                            </form>

                        </div>


                    </div><!-- .col-inner -->
                </div><!-- .large-12 -->
            </div><!-- .row -->
        </div>


    </main><!-- #main -->
@endsection
