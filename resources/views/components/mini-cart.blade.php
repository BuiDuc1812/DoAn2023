@if ($cart->totalAmount == 0)
    <ul class="nav-dropdown nav-dropdown-simple">
        <li class="html widget_shopping_cart">
            <div class="widget_shopping_cart_content">
                <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
            </div>
        </li>
    </ul>
@else
    
        <ul class="nav-dropdown nav-dropdown-simple">
            <li class="html widget_shopping_cart">
               
                <div class="widget_shopping_cart_content">
                    @foreach ($cart->items as $item)
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="{{ route('cart.remove', $item->id) }}" class="remove remove_from_cart_button"
                                aria-label="Xóa sản phẩm này">&times;</a>
                            <a href="">
                                <img width="300" height="300"
                                    src="{{ url('uploads') }}/{{ $item->image }}"class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"alt="" />{{ $item->name }}&nbsp;
                            </a>

                            <span class="quantity">{{ $item->quantity }} &times; <span
                                    class="woocommerce-Price-amount amount">{{number_format( $item->price) }}&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                        </li>
                    </ul>
                    @endforeach
                    <p class="woocommerce-mini-cart__total total"><strong>Tổng cộng:</strong>
                         <span class="woocommerce-Price-amount amount">{{number_format ($cart->totalAmount) }}&nbsp;
                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                        </span>
                    </p>


                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="" class="button wc-forward">Xem giỏ hàng</a>
                        <a href="{{ route('cart.checkout') }}" class="button checkout wc-forward">Thanh toán</a>
                    </p>


                </div>
                
            </li>
        </ul>
    
@endif
