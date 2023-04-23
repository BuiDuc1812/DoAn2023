@extends('layout')
@section('title', 'Danh mục')
@section('layout')

    <main id="main" class="">
        <div class="row category-page-row">

            <div class="col large-3 hide-for-medium ">
                <div id="shop-sidebar" class="sidebar-inner col-inner">
                    <aside id="nav_menu-2" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
                        <div class="is-divider small"></div>
                        <div class="menu-danh-muc-san-pham-vertical-menu-container">
                            <ul id="menu-danh-muc-san-pham-vertical-menu" class="menu">
                               
                                @foreach ($category as $value)
                                <li id="menu-item-488"class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-488">
                                    <a href="{{route('category',['slug'=> $value->slug])}}" class="menu-image-title-after">
                                        <span class="menu-image-title">{{$value->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                    <aside id="woocommerce_products-3" class="widget woocommerce widget_products"><span
                            class="widget-title shop-sidebar">Sản phẩm</span>
                        <div class="is-divider small"></div>
                        <ul class="product_list_widget">
                           
                           @foreach ( $ramdomProducts as $item)
                           <li>
                            <a href="{{route('detail',['id'=> $item->id])}}">
                                <img width="300" height="300" src="{{url('uploads')}}/{{$item->image}}"
                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                    alt=""
                                    /> <span class="product-title">{{$item->name}}</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">{{number_format($item->price)}}&nbsp;<span
                                    class="woocommerce-Price-currencySymbol">&#8363;</span></span>
                        </li>
                           @endforeach
                        </ul>
                    </aside>
                </div><!-- .sidebar-inner -->
            </div><!-- #shop-sidebar -->

            <div class="col large-9">
                <div class="shop-container">
                   
                   
                    <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                        @foreach ($product as $value)
                        <div class="product-small col has-hover post-431 product type-product status-publish has-post-thumbnail product_cat-ban-an first instock shipping-taxable purchasable product-type-simple">
                            <div class="col" data-animate="bounceInRight">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">
                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom">
                                                <a href="{{route('detail',['id'=> $value->id])}}">
                                                    <img width="300" height="300"
                                                        src="{{url('uploads')}}/{{$value->image}}"class="attachment-shop_catalog size-shop_catalog wp-post-image"alt=""/>
                                                </a>
                                                        
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            <a rel="nofollow" href="{{route('cart.add', $value->id)}}"
                                                
                                                class="ajax_add_to_cart add_to_cart_button add-to-cart-grid"
                                                style="width:0">
                                                <div class="cart-icon tooltip absolute is-small"
                                                    title="Thêm vào giỏ"><strong>+</strong></div>
                                            </a>
                                        </div>
                                        </div><!-- box-image -->

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p
                                                    class="category uppercase is-smaller no-text-overflow product-cat op-7">{{$value->category->name}} </p>
                                                <p class="name product-title"><a
                                                        href="{{route('detail',['id'=> $value->id])}}">{{$value->name}}</a></p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount">{{number_format($value->price)}}<span
                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
                                            </div>
                                        </div><!-- box-text -->
                                    </div><!-- box -->
                                </div><!-- .col-inner -->
                            </div><!-- col -->
                        </div><!-- row -->
                        @endforeach
                    </div><!-- shop container -->
                    
                </div>
            </div>

    </main><!-- #main -->
@endsection
