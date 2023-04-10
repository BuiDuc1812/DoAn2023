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
@extends('layout')
@section('title', 'Trang chủ')
@section('layout')
<main id="main" class="">


    <div id="content" role="main" class="content-area">


        <section class="section sec_banner" id="section_1541192361">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="row row-collapse" id="row-1485432410">
                    <div class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="slider-wrapper relative " id="slider-807877139">
                                <div class="slider slider-nav-dots-dashes slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                                    data-flickity-options='{
                "cellAlign": "center",
                "imagesLoaded": true,
                "lazyLoad": 1,
                "freeScroll": false,
                "wrapAround": true,
                "autoPlay": 6000,
                "pauseAutoPlayOnHover" : true,
                "prevNextButtons": false,
                "contain" : true,
                "adaptiveHeight" : true,
                "dragThreshold" : 5,
                "percentPosition": true,
                "pageDots": true,
                "rightToLeft": false,
                "draggable": true,
                "selectedAttraction": 0.1,
                "parallax" : 0,
                "friction": 0.6        }'>


                                    <div class="banner has-hover" id="banner-963092860">
                                        <div class="banner-inner fill">
                                            <div class="banner-bg fill">
                                                <div class="bg fill bg-fill "></div>

                                            </div><!-- bg-layers -->
                                            <div class="banner-layers container">
                                                <div class="fill banner-link"></div>
                                                <div id="text-box-317888479"
                                                    class="text-box banner-layer x5 md-x5 lg-x5 y50 md-y50 lg-y50 res-text">
                                                    <div class="text dark">

                                                        <div class="text-inner text-left">

                                                            <h2 class="uppercase"><strong>Sofa Set with Lounger</strong>
                                                            </h2>
                                                            <h4>Reveal Yourself <strong>THROUGH YOUR CHOICE</strong>
                                                            </h4>
                                                            <a href="" target="_self"
                                                                class="button white is-outline">
                                                                <span>Mua ngay</span>
                                                            </a>

                                                        </div>
                                                    </div><!-- text-box-inner -->

                                                    <style scope="scope">
                                                        #text-box-317888479 {
                                                            width: 90%;
                                                        }

                                                        #text-box-317888479 .text {
                                                            font-size: 70%;
                                                        }


                                                        @media (min-width:550px) {

                                                            #text-box-317888479 {
                                                                width: 90%;
                                                            }

                                                            #text-box-317888479 .text {
                                                                font-size: 100%;
                                                            }

                                                        }


                                                        @media (min-width:850px) {

                                                            #text-box-317888479 {
                                                                width: 60%;
                                                            }

                                                        }
                                                    </style>
                                                </div><!-- text-box -->

                                            </div><!-- .banner-layers -->
                                        </div><!-- .banner-inner -->

                                        <div class="height-fix is-invisible"><img width="1920" height="864"
                                                src="{{url('template/layout')}}/wp-content/uploads/2018/04/slideshow_1.jpg"
                                                class="attachment-original size-original" alt=""
                                                /></div>

                                        <style scope="scope">
                                            #banner-963092860 .bg.bg-loaded {
                                                background-image: url(template/layout/wp-content/uploads/2018/04/slideshow_1.jpg);
                                            }
                                        </style>
                                    </div><!-- .banner -->


                                    <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_510626392">
                                        <div class="img-inner dark">
                                            <img width="1020" height="459"
                                                src="template/layout/wp-content/uploads/2018/04/198-1024x461.jpg"
                                                class="attachment-large size-large" alt=""
                                               />
                                        </div>

                                        <style scope="scope">
                                            #image_510626392 {
                                                width: 100%;
                                            }
                                        </style>
                                    </div>

                                </div>

                                <div class="loading-spin dark large centered"></div>

                                <style scope="scope">
                                </style>
                            </div><!-- .ux-slider-wrapper -->


                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_1541192361 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>

        <section class="section sec_dong_ho_nam" id="section_523440666">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="gap-element" style="display:block; height:auto; padding-top:60px" class="clearfix"></div>
                <div class="row row-small" id="row-36417142">
                    <div class="col small-12 large-12" data-animate="bounceInUp">
                        <div class="col-inner">
                            <h2 class="mona_title uppercase">bàn ghế sofa</h2>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
                <div class="row row-small" id="row-2069437532">
                    <div class="col small-12 large-12">
                        <div class="col-inner">


                            <div class="row large-columns-4 medium-columns-4 small-columns-2 row-normal">


                                @foreach ($product as $value)
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

                                @endforeach
                               

                            </div>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_523440666 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>

        <section class="section sec_tieu_chi dark has-parallax" id="section_1301847888">
            <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background
                data-parallax="-7">


                <div class="section-bg-overlay absolute fill"></div>


            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="row row-collapse" id="row-1592061227">
                    <div class="col medium-4 small-12 large-4" data-animate="fadeInRight">
                        <div class="col-inner text-center" style="padding:10px 10px 10px 10px;">

                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(255, 216, 100);">
                                            <?xml version="1.0" encoding="iso-8859-1"?>
                                            <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <!DOCTYPE svg
                                                PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" width="612px" height="612px" viewBox="0 0 612 612"
                                                style="enable-background:new 0 0 612 612;" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M21.474,377.522V117.138c0-14.469,11.729-26.199,26.199-26.199h260.25c14.469,0,26.198,11.73,26.198,26.199v260.385
            c0,4.823-3.909,8.733-8.733,8.733H30.207C25.383,386.256,21.474,382.346,21.474,377.522z M231.634,466.724
            c0,30.01-24.329,54.338-54.338,54.338c-30.009,0-54.338-24.328-54.338-54.338c0-30.011,24.329-54.338,54.338-54.338
            C207.305,412.386,231.634,436.713,231.634,466.724z M204.464,466.724c0-15.005-12.164-27.169-27.169-27.169
            s-27.17,12.164-27.17,27.169s12.165,27.17,27.17,27.17S204.464,481.729,204.464,466.724z M130.495,412.385H8.733
            c-4.823,0-8.733,3.91-8.733,8.733v26.495c0,4.823,3.91,8.733,8.733,8.733h97.598C108.879,438.862,117.704,423.418,130.495,412.385z
             M515.938,466.724c0,30.01-24.329,54.338-54.338,54.338c-30.01,0-54.338-24.328-54.338-54.338
            c0-30.011,24.328-54.338,54.338-54.338C491.609,412.385,515.938,436.713,515.938,466.724z M488.77,466.724
            c0-15.005-12.165-27.169-27.17-27.169c-15.006,0-27.169,12.164-27.169,27.169s12.164,27.17,27.169,27.17
            S488.77,481.729,488.77,466.724z M612,421.118v26.495c0,4.823-3.91,8.733-8.733,8.733h-70.704
            c-5.057-34.683-34.906-61.427-70.961-61.427c-36.062,0-65.912,26.745-70.969,61.427H248.261
            c-2.549-17.483-11.373-32.928-24.164-43.961h134.994V162.594c0-9.646,7.82-17.466,17.466-17.466h82.445
            c23.214,0,44.911,11.531,57.9,30.77l53.15,78.721c7.796,11.547,11.962,25.161,11.962,39.094v118.672h21.253
            C608.09,412.385,612,416.295,612,421.118z M523.408,256.635l-42.501-60.393c-1.636-2.324-4.3-3.707-7.142-3.707H407.47
            c-4.822,0-8.733,3.91-8.733,8.733v60.393c0,4.824,3.91,8.733,8.733,8.733h108.798C523.342,270.394,527.48,262.421,523.408,256.635z
            " />
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Miễn Phí Giao Hàng</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-4 small-12 large-4" data-animate="fadeInRight">
                        <div class="col-inner text-center" style="padding:10px 10px 10px 10px;">

                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(255, 216, 100);">
                                            <?xml version="1.0" encoding="iso-8859-1"?>
                                            <!-- Generator: Adobe Illustrator 18.1.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 28.092 28.092"
                                                style="enable-background:new 0 0 28.092 28.092;" xml:space="preserve">
                                                <g>
                                                    <g id="c34_present">
                                                        <polygon
                                                            points="9.717,20.67 8.623,18.895 6.313,19.31 9.351,13.922 3.427,13.922 3.427,28.092 13.521,28.092 13.521,13.922 		" />
                                                        <path
                                                            d="M26.331,7.16h-6.703c0.392-0.202,0.742-0.413,1.052-0.637c1.192-0.854,1.825-1.936,1.823-3.01
                c0-0.881-0.417-2.143-1.023-2.669C20.873,0.312,20.068,0,19.209,0c-0.918,0-1.771,0.315-2.502,0.805
                c-1.099,0.736-1.959,2.33-2.572,3.546c-0.031,0.061-0.062,0.12-0.092,0.179c-0.224-0.469-0.486-1.408-0.783-1.836
                c-0.52-0.742-1.145-1.398-1.879-1.889C10.652,0.315,9.8,0,8.883,0C7.969,0.003,7.132,0.386,6.506,0.977
                C5.883,1.562,5.447,2.879,5.443,3.82C5.439,4.369,5.599,4.944,5.93,5.467C6.346,6.122,7.005,6.693,7.915,7.16H1.744l0.014,5.635
                h11.588V7.16h1.412v5.635h11.59L26.331,7.16z M8.315,5.398C7.85,5.104,7.564,4.809,7.396,4.544
                c-0.163-0.263-0.22-0.725-0.22-0.952C7.172,3.213,7.361,2.548,7.697,2.236C8.025,1.923,8.471,1.73,8.871,1.73h0.012
                c0.515,0.004,1.025,0.176,1.539,0.515c0.765,0.505,1.486,1.878,1.987,2.884c0.262,0.512,0.462,1.047,0.597,1.57
                C10.685,6.459,9.185,5.947,8.315,5.398z M16.248,4.173c0.418-0.599,0.911-1.587,1.422-1.928c0.508-0.339,1.024-0.511,1.539-0.515
                h0.005c0.429,0,0.842,0.168,1.123,0.417C20.619,2.4,20.77,2.863,20.77,3.189c-0.006,0.385-0.205,1.271-1.104,1.928
                c-0.853,0.622-2.334,1.259-4.611,1.705C15.27,5.919,15.691,4.963,16.248,4.173z" />
                                                        <polygon
                                                            points="21.791,19.287 19.482,18.895 18.392,20.691 14.637,14.013 14.637,28.092 24.68,28.092 24.68,13.922 
                18.756,13.922 		" />
                                                        <path d="M14.637,13.922" />
                                                    </g>
                                                    <g id="Capa_1_195_">
                                                    </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Quà Tặng Đặc Biệt</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>
                    <div class="col medium-4 small-12 large-4" data-animate="fadeInRight">
                        <div class="col-inner text-center" style="padding:10px 10px 10px 10px;">

                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 50px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(255, 216, 100);">
                                            <?xml version="1.0" encoding="iso-8859-1"?>
                                            <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <!DOCTYPE svg
                                                PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                y="0px" viewBox="0 0 204.268 204.268"
                                                style="enable-background:new 0 0 204.268 204.268;"
                                                xml:space="preserve">
                                                <path
                                                    d="M196.161,112.685h-12.8c-2.921-10.579-8.846-20.24-17.036-28.328c2.988-5.547,7.202-10.121,7.243-10.165
        c1.232-1.321,1.656-3.205,1.108-4.927c-0.548-1.722-1.982-3.014-3.752-3.38c-0.306-0.063-3.11-0.617-7.437-0.617
        c-4.609,0-11.663,0.657-19.172,3.758c-12.398-5.978-26.837-9.424-42.249-9.424c-25.791,0-48.88,9.615-64.181,24.682
        c-0.956-1.622-2.128-3.271-3.56-4.802c0.63-2.656,1.038-5.654,1.167-9.022c0.105-2.759-2.046-5.082-4.806-5.188
        c-2.746-0.108-5.082,2.045-5.188,4.806c-0.048,1.266-0.14,2.449-0.271,3.555c-0.571-0.185-1.161-0.349-1.77-0.49
        c-9.752-2.262-14.865,1.305-17.046,3.632C3.536,79.841,2.409,84.247,3.54,88c1.775,5.892,8.165,9.691,14.856,8.832
        c3.909-0.5,8.014-2.615,11.226-6.848c0.464,0.848,0.842,1.678,1.151,2.443c-7.649,10.281-12.058,22.339-12.058,35.221
        c0,16.361,7.112,31.389,18.941,43.139L31.2,198.119c-0.351,1.487-0.003,3.054,0.945,4.252c0.948,1.199,2.393,1.897,3.921,1.897h22
        c2.196,0,4.135-1.433,4.78-3.532l3.561-11.596c10.818,4.198,22.906,6.556,35.659,6.556c12.753,0,24.841-2.358,35.659-6.556
        l3.561,11.597c0.645,2.099,2.584,3.532,4.78,3.532h22c1.528,0,2.973-0.699,3.921-1.897c0.948-1.198,1.296-2.765,0.945-4.252
        l-6.456-27.332c6.186-6.145,11.063-13.192,14.326-20.852h15.36c2.761,0,5-2.239,5-5v-27.25
        C201.161,114.924,198.922,112.685,196.161,112.685z M17.128,86.913c-1.998,0.254-3.689-0.723-4.009-1.784
        c-0.034-0.152-0.025-0.909,0.65-1.58c0.757-0.752,2.062-1.135,3.757-1.135c1.08,0,2.317,0.155,3.671,0.469
        c0.363,0.084,0.715,0.186,1.055,0.302C20.737,85.542,18.887,86.688,17.128,86.913z M125.223,87.295
        c-1.455,2.332-4.515,3.05-6.854,1.617c-0.19-0.112-6.319-3.631-17.388-3.631c-11.578,0-20.496,4.846-20.584,4.895
        c-0.766,0.422-1.594,0.623-2.411,0.623c-1.762,0-3.471-0.934-4.382-2.585c-1.334-2.418-0.455-5.459,1.962-6.793
        c0.455-0.25,11.29-6.139,25.416-6.139c14.268,0,22.312,4.917,22.647,5.125C125.97,81.868,126.684,84.953,125.223,87.295z
         M153.411,125.206c-6.141,0-11.136-5.383-11.136-12s4.996-12,11.136-12s11.137,5.383,11.137,12S159.551,125.206,153.411,125.206z
         M124.494,23.333c0,12.866-10.467,23.333-23.333,23.333S77.827,36.199,77.827,23.333C77.827,10.467,88.295,0,101.161,0
        S124.494,10.467,124.494,23.333z" />
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">

                                    <h3>Tiết Kiệm Khi Mua Ở Mona</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer</p>
                                </div>
                            </div><!-- .icon-box -->


                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_1301847888 {
                    padding-top: 60px;
                    padding-bottom: 60px;
                }

                #section_1301847888 .section-bg-overlay {
                    background-color: rgba(45, 45, 45, 0.8);
                }

                #section_1301847888 .section-bg.bg-loaded {
                    background-image: url(template/layout/wp-content/uploads/2018/04/bg-table-chair.jpg);
                }
            </style>
        </section>

        <section class="section sec_dong_ho_nu" id="section_1460907215">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="gap-element" style="display:block; height:auto; padding-top:60px" class="clearfix"></div>
                <div class="row row-small" id="row-1818995934">
                    <div class="col small-12 large-12" data-animate="bounceInUp">
                        <div class="col-inner">
                            <h2 class="mona_title uppercase">kệ tivi</h2>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
                <div class="row row-small" id="row-1154943179">
                    <div class="col small-12 large-12">
                        <div class="col-inner">


                            <div class="row large-columns-4 medium-columns-4 small-columns-2 row-normal">


                                @foreach ($products as $value)
                                <div class="col" data-animate="bounceInRight">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="{{route('detail',['id'=> $value->id])}}">
                                                        <img width="300" height="300"src="{{url('uploads')}}/{{$value->image}}"class="attachment-shop_catalog size-shop_catalog wp-post-image"alt="" /> 
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
                                                    <p class="category uppercase is-smaller no-text-overflow product-cat op-7"> {{$value->category->name}} </p>
                                                    <p class="name product-title"><a href="{{route('detail',['id'=> $value->id])}}">{{$value->name}}</a></p>
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
                                @endforeach
                              


                            </div>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_1460907215 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>

        <section class="section sec_banner_bottom" id="section_135482411">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="row row-small row-full-width" id="row-71320248">
                    <div class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1603760364">
                                <a href="cua-hang/index.html" target="_self" class="">
                                    <div class="img-inner image-zoom-fade dark">
                                        <img width="1020" height="510"
                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/img4-1024x512.jpg"
                                            class="attachment-large size-large" alt=""
                                            />
                                    </div>
                                </a>
                                <style scope="scope">
                                    #image_1603760364 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>
                    <div class="col medium-6 small-12 large-6" data-animate="fadeInLeft">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_41486941">
                                <a href="" target="_self" class="">
                                    <div class="img-inner image-zoom-fade dark">
                                        <img width="1020" height="510"
                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/img5-1024x512.jpg"
                                            class="attachment-large size-large" alt=""/>
                                    </div>
                                </a>
                                <style scope="scope">
                                    #image_41486941 {
                                        width: 100%;
                                    }
                                </style>
                            </div>

                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_135482411 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>

        <section class="section sec_phu_kien" id="section_1743988301">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="gap-element" style="display:block; height:auto; padding-top:60px" class="clearfix"></div>
                <div class="row row-small" id="row-563573145">
                    <div class="col small-12 large-12" data-animate="bounceInUp">
                        <div class="col-inner">
                            <h2 class="mona_title uppercase">bàn ghế</h2>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
                <div class="row row-small" id="row-299187882">
                    <div class="col small-12 large-12">
                        <div class="col-inner">


                            <div class="row large-columns-4 medium-columns-4 small-columns-2 row-normal">

                                    @foreach ($pro as $value)
                                    <div class="col" data-animate="bounceInRight">
                                        <div class="col-inner">
    
                                            <div class="badge-container absolute left top z-1">
                                            </div>
                                            <div class="product-small box has-hover box-normal box-text-bottom">
                                                <div class="box-image">
                                                    <div class="image-zoom">
                                                        <a
                                                            href="">
                                                            <img width="300" height="300"src="{{url('uploads')}}/{{$value->image}}"class="attachment-shop_catalog size-shop_catalog wp-post-image"alt=""/> </a>
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
                                                        <p class="name product-title"><a href="">{{$value->name}}</a></p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount amount">{{number_format($value->price)}}đ</span></span>
                                                    </div>
                                                </div><!-- box-text -->
                                            </div><!-- box -->
                                        </div><!-- .col-inner -->
                                    </div><!-- col -->
                                    @endforeach

                               


                               

                            </div>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_1743988301 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>

        <section class="section sec_tin_tuc" id="section_2060527057">
            <div class="bg section-bg fill bg-fill  bg-loaded">





            </div><!-- .section-bg -->

            <div class="section-content relative">

                <div class="gap-element" style="display:block; height:auto; padding-top:60px" class="clearfix">
                </div>
                <div class="row row-small" id="row-1718846027">
                    <div class="col small-12 large-12" data-animate="bounceInUp">
                        <div class="col-inner">
                            <h2 class="mona_title">Thông tin hữu ích</h2>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
                <div class="row row-small" id="row-1581308157">
                    <div class="col small-12 large-12">
                        <div class="col-inner">


                            <div class="row large-columns-3 medium-columns-3 small-columns-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="duis-luctus-elit-nisi-et-cursus-magna-pellentesque-non/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/14.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                             />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">Duis luctus elit
                                                            nisi, et cursus magna pellentesque non.</h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Sed dapibus, massa non viverra
                                                            [...] </p>

                                                        <button
                                                            href="duis-luctus-elit-nisi-et-cursus-magna-pellentesque-non/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="mauris-tristique-pretium-tempus-vestibulum-et-accumsan-magna/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/12.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                             />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">Mauris tristique
                                                            pretium tempus. Vestibulum et accumsan magna.</h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">Donec tempus eu ligula sed
                                                            blandit. Vivamus vel enim ac quam iaculis rutrum. [...] </p>

                                                        <button
                                                            href="mauris-tristique-pretium-tempus-vestibulum-et-accumsan-magna/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="aliquam-placerat-nisl-nec-imperdiet-vehicula-phasellus-tempus-ligula-id-orci-finibus-feugiat/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/13.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                             />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">Aliquam placerat
                                                            nisl nec imperdiet vehicula. Phasellus tempus ligula id orci
                                                            finibus feugiat.</h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">n rutrum tempus purus, ut
                                                            euismod dui facilisis ac. Fusce semper dignissim diam [...]
                                                        </p>

                                                        <button
                                                            href="aliquam-placerat-nisl-nec-imperdiet-vehicula-phasellus-tempus-ligula-id-orci-finibus-feugiat/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="in-rutrum-tempus-purus-ut-euismod-dui-facilisis-ac-fusce-semper-dignissim-diam-a-egestas/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/15.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                             />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">In rutrum tempus
                                                            purus, ut euismod dui facilisis ac. Fusce semper dignissim
                                                            diam a egestas.</h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Sed dapibus, massa non viverra
                                                            [...] </p>

                                                        <button
                                                            href="in-rutrum-tempus-purus-ut-euismod-dui-facilisis-ac-fusce-semper-dignissim-diam-a-egestas/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="donec-tempus-eu-ligula-sed-blandit-vivamus-vel-enim-ac-quam-iaculis-rutrum/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/17.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                             />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">Donec tempus eu
                                                            ligula sed blandit. Vivamus vel enim ac quam iaculis rutrum.
                                                        </h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">In rutrum tempus purus, ut
                                                            euismod dui facilisis ac. Fusce semper dignissim diam [...]
                                                        </p>

                                                        <button
                                                            href="donec-tempus-eu-ligula-sed-blandit-vivamus-vel-enim-ac-quam-iaculis-rutrum/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                                <div class="col post-item" data-animate="flipInX">
                                    <div class="col-inner">
                                        <a href="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit/index.html"
                                            class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:56.25%;">
                                                        <img width="1024" height="480"
                                                            src="{{url('template/layout')}}/wp-content/uploads/2018/04/16.jpg"
                                                            class="attachment-original size-original wp-post-image"
                                                            alt=""
                                                            />
                                                    </div>
                                                </div><!-- .box-image -->
                                                <div class="box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">


                                                        <h5 class="post-title is-large uppercase">Lorem ipsum dolor
                                                            sit amet, consectetur adipiscing elit.</h5>
                                                        <div class="is-divider"></div>
                                                        <p class="from_the_blog_excerpt ">In lobortis erat orci, at
                                                            viverra leo lobortis non. Pellentesque at augue ac [...]
                                                        </p>

                                                        <button
                                                            href="lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit/index.html"
                                                            class="button secondary is-link is-small mb-0">
                                                            Đọc thêm </button>


                                                    </div><!-- .box-text-inner -->
                                                </div><!-- .box-text -->
                                                <div class="badge absolute top post-date badge-outline">
                                                    <div class="badge-inner">
                                                        <span class="post-date-day">08</span><br>
                                                        <span class="post-date-month is-xsmall">Th3</span>
                                                    </div>
                                                </div>
                                            </div><!-- .box -->
                                        </a><!-- .link -->
                                    </div><!-- .col-inner -->
                                </div><!-- .col -->
                            </div>
                        </div>
                    </div>

                    <style scope="scope">

                    </style>
                </div>
            </div><!-- .section-content -->


            <style scope="scope">
                #section_2060527057 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>



    </div>



</main><!-- #main -->
@endsection